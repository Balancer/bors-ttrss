<?php

namespace Bal\TtRss;

class User extends ObjectDb
{
	function table_name() { return 'ttrss_users'; }
	function table_fields()
	{
		return [
			'id',
			'login',
			'pwd_hash',
			'last_login',
			'access_level',
			'theme_id',
			'email',
			'full_name',
			'email_digest',
			'last_digest_sent',
			'salt',
			'created',
			'twitter_oauth',
			'otp_enabled',
			'resetpass_token',
		];
	}
}
