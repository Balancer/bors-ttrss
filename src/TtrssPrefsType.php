<?php

namespace Bal\TtRss;

class PrefsType extends ObjectDb
{
	function table_name() { return 'ttrss_prefs_types'; }
	function table_fields()
	{
		return [
			'id',
			'type_name',
		];
	}
}
