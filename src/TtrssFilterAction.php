<?php

namespace Bal\TtRss;

class FilterAction extends ObjectDb
{
	function table_name() { return 'ttrss_filter_actions'; }
	function table_fields()
	{
		return [
			'id',
			'name',
			'description',
		];
	}
}
