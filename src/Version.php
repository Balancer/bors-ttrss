<?php

namespace Bal\TtRss;

class Version extends ObjectDb
{
	function table_name() { return 'ttrss_version'; }
	function table_fields()
	{
		return [
			'schema_version',
		];
	}
}
