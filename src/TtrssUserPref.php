<?php

namespace Bal\TtRss;

class UserPref extends ObjectDb
{
	function table_name() { return 'ttrss_user_prefs'; }
	function table_fields()
	{
		return [
			'owner_uid' => ['class' => User::class, 'have_null' => true],
			'pref_name',
			'value',
			'profile' => ['class' => SettingsProfile::class, 'have_null' => true],
		];
	}
}
