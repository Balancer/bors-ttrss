<?php

namespace Bal\TtRss;

class CountersCache extends ObjectDb
{
	function table_name() { return 'ttrss_counters_cache'; }
	function table_fields()
	{
		return [
			'feed_id',
			'owner_uid',
			'value',
			'updated',
		];
	}
}
