<?php

namespace Bal\TtRss;

class ErrorLog extends ObjectDb
{
	function table_name() { return 'ttrss_error_log'; }
	function table_fields()
	{
		return [
			'id',
			'owner_uid' => ['class' => User::class, 'have_null' => true],
			'errno',
			'errstr' => ['type' => 'bbcode'],
			'filename' => ['type' => 'bbcode'],
			'lineno',
			'context' => ['type' => 'bbcode'],
			'created_at',
		];
	}
}
