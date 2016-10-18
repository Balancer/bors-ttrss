<?php

namespace Bal\TtRss;

class FilterType extends ObjectDb
{
	function table_name() { return 'ttrss_filter_types'; }
	function table_fields()
	{
		return [
			'id',
			'name',
			'description',
		];
	}
}
