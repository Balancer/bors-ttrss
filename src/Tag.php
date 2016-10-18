<?php

namespace Bal\TtRss;

class Tag extends ObjectDb
{
	function table_name() { return 'ttrss_tags'; }
	function table_fields()
	{
		return [
			'id',
			'owner_uid' => ['class' => User::class, 'have_null' => true],
			'tag_name',
			'post_int_id',
		];
	}
}
