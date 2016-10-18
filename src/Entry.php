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
			'author',
			'lang',
		];
	}
}
