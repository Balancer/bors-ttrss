<?php

namespace Bal\TtRss;

class UserEntry extends ObjectDb
{
	function table_name() { return 'ttrss_user_entries'; }
	function table_fields()
	{
		return [
			'id' => 'int_id',
			'entry_id' => ['name' => 'ref_id', 'class' => Entry::class, 'have_null' => true],
			'uuid',
			'feed_id' => ['class' => Feed::class, 'have_null' => true],
			'orig_feed_id' => ['class' => ArchivedFeed::class, 'have_null' => true],
			'owner_uid' => ['class' => User::class, 'have_null' => true],
			'marked',
			'is_published' => 'published',
			'tag_cache' => ['type' => 'bbcode'],
			'label_cache' => ['type' => 'bbcode'],
			'last_read',
			'score',
			'note',
			'unread',
			'last_marked',
			'last_published',
		];
	}
}
