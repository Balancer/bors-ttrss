<?php

namespace Bal\TtRss;

class EntryComment extends ObjectDb
{
	function table_name() { return 'ttrss_entry_comments'; }
	function table_fields()
	{
		return [
			'id',
			'ref_id' => ['class' => Entry::class, 'have_null' => true],
			'owner_uid' => ['class' => User::class, 'have_null' => true],
			'private',
			'date_entered',
		];
	}
}
