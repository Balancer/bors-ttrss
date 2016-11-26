<?php

namespace Bal\TtRss\Infonesy;

class Digest extends \B2\Obj
{
	function infonesy_uuid()
	{
		return 'ru.balancer.tt-rss.digest.' . $this->id();
	}

	function container()
	{
		return Container::load(NULL);
	}

	function infonesy_push($storage_dir)
	{
		$this->container()->infonesy_push($storage_dir);

		require_once BORS_CORE.'/inc/functions/fs/file_put_contents_lock.php';

		$file = $storage_dir.'/'.$this->infonesy_uuid().'.json';

		if(preg_match('/^(\d{4})(\d{2})$/', $this->id(), $m))
			list($year, $month) = [$m[1], $m[2]];
		else
			throw new \Exception("Unknown digest ID");

		$data = [
			'UUID'		=> $this->infonesy_uuid(),
			'Node'		=> 'ru.balancer.tt-rss',
			'Title'		=> 'Дайджест от ' . bors_lower(\blib_month::name_g($month)). ' ' . $year .'г',
			'Type'		=> 'Topic',
			'ForumUUID'	=> $this->container()->infonesy_uuid(),
//			'Keywords'		=> $this->keywords(),
		];

//		$posts = [];

//		foreach(balancer_board_post::find(['topic_id' => $this->id(), 'order' => 'create_time'])->all() as $p)
//			$posts[] = $p->infonesy_uuid();

//		$data['Posts'] = $posts;

		@file_put_contents_lock($file, json_encode($data, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		@chmod($file, 0666);
	}
}
