<?php

namespace Bal\TtRss;

class Filters2 extends ObjectDb
{
	function table_name() { return 'ttrss_filters2'; }
	function table_fields()
	{
		return [
			'id',
			'owner_uid' => ['class' => User::class, 'have_null' => true],
			'match_any_rule',
			'enabled',
			'inverse',
			'order_id',
			'title',
		];
	}
}
