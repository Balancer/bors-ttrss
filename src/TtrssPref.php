<?php

namespace Bal\TtRss;

class Pref extends ObjectDb
{
	function table_name() { return 'ttrss_prefs'; }
	function table_fields()
	{
		return [
			'pref_name',
			'type_id' => ['class' => PrefsType::class, 'have_null' => true],
			'section_id' => ['class' => PrefsSection::class, 'have_null' => true],
			'access_level',
			'def_value' => ['type' => 'bbcode'],
		];
	}
}
