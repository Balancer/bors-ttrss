<?php

namespace Bal\TtRss;

class Enclosure extends ObjectDb
{
	function table_name() { return 'ttrss_enclosures'; }
	function table_fields()
	{
		return [
			'id',
			'content_url' => ['type' => 'bbcode'],
			'content_type',
			'post_id' => ['class' => Entry::class, 'have_null' => true],
			'title' => ['type' => 'bbcode'],
			'duration' => ['type' => 'bbcode'],
			'width',
			'height',
		];
	}
}
