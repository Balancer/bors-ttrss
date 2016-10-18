<?php

namespace Bal\TtRss;

class Filters2Action extends ObjectDb
{
	function table_name() { return 'ttrss_filters2_actions'; }
	function table_fields()
	{
		return [
			'id',
			'filter_id' => ['class' => Filters2::class, 'have_null' => true],
			'action_id' => ['class' => FilterAction::class, 'have_null' => true],
			'action_param',
		];
	}
}
