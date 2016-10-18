<?php

namespace Bal\TtRss;

class Labels2 extends ObjectDb
{
	function table_name() { return 'ttrss_labels2'; }
	function table_fields()
	{
		return [
			'id',
			'owner_uid' => ['class' => User::class, 'have_null' => true],
			'caption',
			'fg_color',
			'bg_color',
		];
	}
}
