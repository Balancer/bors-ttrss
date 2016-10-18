<?php

namespace Bal\TtRss;

class PluginStorage extends ObjectDb
{
	function table_name() { return 'ttrss_plugin_storage'; }
	function table_fields()
	{
		return [
			'id',
			'name',
			'owner_uid' => ['class' => User::class, 'have_null' => true],
			'content',
		];
	}
}
