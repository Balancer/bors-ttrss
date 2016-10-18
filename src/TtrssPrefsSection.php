<?php

namespace Bal\TtRss;

class PrefsSection extends ObjectDb
{
	function table_name() { return 'ttrss_prefs_sections'; }
	function table_fields()
	{
		return [
			'id',
			'order_id',
		];
	}
}
