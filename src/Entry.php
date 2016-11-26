<?php

namespace Bal\TtRss;

class Entry extends ObjectDb
{
	function table_name() { return 'ttrss_entries'; }
	function table_fields()
	{
		return [
			'id',
			'title' => ['type' => 'bbcode'],
			'guid',
			'link' => ['type' => 'bbcode'],
			'updated',
			'html' => 'content',
			'content_hash',
			'cached_content',
			'no_orig_date',
			'date_entered',
			'date_updated',
			'num_comments',
			'plugin_data',
			'comments',
			'author_title' => 'author',
			'lang',
		];
	}

	function create_time() { return strtotime($this->date_entered().' UTC'); }
	function modify_time() { return strtotime($this->date_updated().' UTC'); }

	function _author_def()
	{
		$author = new \B2\Obj(NULL);
		$feed = $this->feed();

		if(!$feed)
		{
			$this->logger()->warning("Empty feed for feed entry ".$this->id());

			$author->set_attr('title', NULL);
			$author->set_attr('email', NULL);
			$author->set_attr('infonesy_uuid', 'ru.balancer.tt-rss.feed.0');
		}
		else
		{
			$author->set_attr('title', $feed->title());
			$author->set_attr('email', md5($feed->title()));
			$author->set_attr('infonesy_uuid', 'ru.balancer.tt-rss.feed.'.$feed->id());
		}

		return $author;
	}

	function markdown()
	{
		$converter = new \League\HTMLToMarkdown\HtmlConverter(['strip_tags' => true]);
		$md = $converter->convert($this->html());

		$replaces = [
			'<a name="cut"></a>' => '',
			'<a name="cutid1-end"></a>' => '',
			'[](http)' => '',
		];

		$md = str_replace(array_keys($replaces), array_values($replaces), $md);

		$md = trim(preg_replace("/\n\n\n+/", "\n\n", $md), "  \t\n\r\x0B");

		$title  = "## [{$this->title()}]({$this->link()})";
		$origin = "_// Источник: <{$this->link()}>_";

		$imgs = [];
		$enclosures = Enclosure::find(['post_id' => $this->id()])->all();
		if($enclosures->is_not_null())
			foreach($enclosures as $enc)
				if(preg_match('!^image/!', $enc->content_type()))
					$imgs[] = "![]({$enc->content_url()})";
//				elseif(preg_match('!^video/!', $enc->content_type())
//					$imgs[] = "![]({$enc->content_url()})";

		$imgs = join("\n\n", $imgs)."\n\n";

		return "$title\n\n$md\n\n$imgs$origin\n";
	}
}
