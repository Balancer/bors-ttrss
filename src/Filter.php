<?php

namespace Bal\TtRss;

class Filter extends ObjectDb
{
	function table_name() { return 'ttrss_filters'; }
	function table_fields()
	{
		return [
			'id',
			'owner_uid' => ['class' => User::class, 'have_null' => true],
			'feed_id' => ['class' => Feed::class, 'have_null' => true],
			'filter_type' => ['class' => FilterType::class, 'have_null' => true],
			'reg_exp',
			'filter_param',
			'inverse',
			'enabled',
			'cat_filter',
			'cat_id' => ['class' => FeedCategory::class, 'have_null' => true],
			'action_id' => ['class' => FilterAction::class, 'have_null' => true],
			'action_param',
		];
	}
}
