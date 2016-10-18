<?php

namespace Bal\TtRss;

class LinkedInstance extends ObjectDb
{
	function table_name() { return 'ttrss_linked_instances'; }
	function table_fields()
	{
		return [
			'id',
			'last_connected',
			'last_status_in',
			'last_status_out',
			'access_key',
			'access_url' => ['type' => 'bbcode'],
		];
	}
}
