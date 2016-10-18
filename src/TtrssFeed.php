<?php

namespace Bal\TtRss;

class Feed extends ObjectDb
{
	function table_name() { return 'ttrss_feeds'; }
	function table_fields()
	{
		return [
			'id',
			'owner_uid' => ['class' => User::class, 'have_null' => true],
			'title',
			'cat_id' => ['class' => FeedCategory::class, 'have_null' => true],
			'feed_url' => ['type' => 'bbcode'],
			'icon_url',
			'update_interval',
			'purge_interval',
			'last_updated',
			'last_error',
			'site_url',
			'auth_login',
			'auth_pass',
			'parent_feed' => ['class' => Feed::class, 'have_null' => true],
			'private',
			'rtl_content',
			'hidden',
			'include_in_digest',
			'cache_images',
			'cache_content',
			'auth_pass_encrypted',
			'last_viewed',
			'last_update_started',
			'always_display_enclosures',
			'update_method',
			'order_id',
			'mark_unread_on_update',
			'update_on_checksum_change',
			'strip_images',
			'pubsub_state',
			'favicon_last_checked',
			'hide_images',
			'view_settings',
			'favicon_avg_color',
			'feed_language',
		];
	}
}
