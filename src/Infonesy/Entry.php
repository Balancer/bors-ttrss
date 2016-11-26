<?php

namespace Bal\TtRss\Infonesy;

class Entry extends \B2\Obj
{
	function infonesy_uuid()
	{
		return 'ru.balancer.tt-rss.entry.' . $this->id()->id();
	}

	function feed_entry() { return $this->id(); }

	function _markdown_def()
	{
		return $this->feed_entry()->markdown();
	}

	function _digest_def()
	{
		$text = $this->markdown();

		$num_images = preg_match_all('/!\[/', $text);

		if(bors_strlen($text) > 3000 || $num_images > 4)
		{
			$topic = Topic::load($this->feed_entry()->id());
			$topic->set_attr('title', $this->feed_entry()->title());
			$topic->set_create_time($this->feed_entry()->create_time(), false);
			$topic->set_modify_time($this->feed_entry()->modify_time(), false);
			return $topic;
		}

		return Digest::load(date('Ym', $this->feed_entry()->create_time()));
	}

	function infonesy_push($storage)
	{
		$feed_entry = $this->feed_entry();

		$this->digest()->infonesy_push($storage);
//		$this->author()->infonesy_push($storage);

		require_once BORS_CORE.'/inc/functions/fs/file_put_contents_lock.php';

		$file = $storage.'/'.$this->infonesy_uuid().'.md';

		$meta = [
			'UUID'		=> $this->infonesy_uuid(),
			'Node'		=> 'ru.balancer.tt-rss',
			'Title'		=> $feed_entry->title(),
			'TopicUUID'	=> $this->digest()->infonesy_uuid(),
		];

		$meta = array_merge($meta, [
			'Author'	=> [
				'Title' => $feed_entry->author()->title(),
				'EmailMD5'	=> NULL,
				'UUID'	=> $feed_entry->author()->infonesy_uuid(),
			],
			'Date'		=> date('r', $feed_entry->create_time()),
			'Modify'	=> date('r', $feed_entry->modify_time()),
			'Type'		=> 'News',
			'Markup'	=> 'Markdown',
		]);

		// symfony/yaml=*
		$dumper = new \Symfony\Component\Yaml\Dumper();

		$md = "---\n";
		$md .= $dumper->dump(array_filter($meta), 2);
		$md .= "---\n\n";

		$text = trim($this->markdown())."\n";

		$md .= $text;

		@file_put_contents_lock($file, $md);
		@chmod($file, 0666);
		@touch($file, $feed_entry->modify_time());

		return $file;
	}
}
