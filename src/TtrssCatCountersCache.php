<?php

namespace Bal\TtRss;

class CatCountersCache extends ObjectDb
{
	function table_name() { return 'ttrss_cat_counters_cache'; }
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
