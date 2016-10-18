<?php

namespace Bal\TtRss;

class LinkedFeed extends ObjectDb
{
	function table_name() { return 'ttrss_linked_feeds'; }
	function table_fields()
	{
		return [
			'feed_url' => ['type' => 'bbcode'],
			'site_url' => ['type' => 'bbcode'],
			'title' => ['type' => 'bbcode'],
			'created',
			'updated',
			'instance_id' => ['class' => LinkedInstance::class, 'have_null' => true],
			'subscribers',
		];
	}
}
