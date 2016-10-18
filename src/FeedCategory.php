<?php

namespace Bal\TtRss;

class FeedCategory extends ObjectDb
{
	function table_name() { return 'ttrss_feed_categories'; }
	function table_fields()
	{
		return [
			'id',
			'owner_uid' => ['class' => User::class, 'have_null' => true],
			'title',
			'collapsed',
			'order_id',
			'parent_cat' => ['class' => FeedCategory::class, 'have_null' => true],
			'view_settings',
		];
	}
}
