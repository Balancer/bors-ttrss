<?php

namespace Bal\TtRss;

class ArchivedFeed extends ObjectDb
{
	function table_name() { return 'ttrss_archived_feeds'; }
	function table_fields()
	{
		return [
			'id',
			'owner_uid' => ['class' => User::class, 'have_null' => true],
			'title',
			'feed_url' => ['type' => 'bbcode'],
			'site_url',
		];
	}
}
