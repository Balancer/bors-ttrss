<?php

namespace Bal\TtRss;

class AccessKey extends ObjectDb
{
	function table_name() { return 'ttrss_access_keys'; }
	function table_fields()
	{
		return [
			'id',
			'access_key',
			'feed_id',
			'is_cat',
			'owner_uid' => ['class' => User::class, 'have_null' => true],
		];
	}
}
