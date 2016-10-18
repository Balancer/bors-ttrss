<?php

namespace Bal\TtRss;

class Session extends ObjectDb
{
	function table_name() { return 'ttrss_sessions'; }
	function table_fields()
	{
		return [
			'id',
			'data' => ['type' => 'bbcode'],
			'expire',
		];
	}
}
