<?php

namespace Bal\TtRss;

class SettingsProfile extends ObjectDb
{
	function table_name() { return 'ttrss_settings_profiles'; }
	function table_fields()
	{
		return [
			'id',
			'title',
			'owner_uid' => ['class' => User::class, 'have_null' => true],
		];
	}
}
