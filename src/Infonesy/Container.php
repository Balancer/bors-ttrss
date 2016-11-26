<?php

namespace Bal\TtRss\Infonesy;

class Container extends \B2\Obj
{
	function infonesy_uuid()
	{
		return 'ru.balancer.tt-rss.balancer.published';
	}

	function infonesy_push($storage)
	{
		require_once BORS_CORE.'/inc/functions/fs/file_put_contents_lock.php';

		$file = $storage.'/'.$this->infonesy_uuid().'.json';

		$data = [
			'UUID'		=> $this->infonesy_uuid(),
			'Node'		=> 'ru.balancer.tt-rss',
			'Title'		=> 'Дайджест Интернет-новостей и публикаций',
			'Type'		=> 'Forum',
		];

		@file_put_contents_lock($file, json_encode(array_filter($data), JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		@chmod($file, 0666);
	}
}
