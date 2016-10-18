<?php

namespace Bal\TtRss;

class Filters2Rule extends ObjectDb
{
	function table_name() { return 'ttrss_filters2_rules'; }
	function table_fields()
	{
		return [
			'id',
			'filter_id' => ['class' => Filters2::class, 'have_null' => true],
			'reg_exp',
			'filter_type' => ['class' => FilterType::class, 'have_null' => true],
			'feed_id' => ['class' => Feed::class, 'have_null' => true],
			'cat_id' => ['class' => FeedCategory::class, 'have_null' => true],
			'cat_filter',
			'inverse',
		];
	}
}
