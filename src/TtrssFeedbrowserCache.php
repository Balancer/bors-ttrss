<?php

namespace Bal\TtRss;

class FeedbrowserCache extends ObjectDb
{
	function table_name() { return 'ttrss_feedbrowser_cache'; }
	function table_fields()
	{
		return [
			'feed_url' => ['type' => 'bbcode'],
			'site_url' => ['type' => 'bbcode'],
			'title' => ['type' => 'bbcode'],
			'subscribers',
		];
	}
}
