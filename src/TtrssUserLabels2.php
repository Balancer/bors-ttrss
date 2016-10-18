<?php

namespace Bal\TtRss;

class UserLabels2 extends ObjectDb
{
	function table_name() { return 'ttrss_user_labels2'; }
	function table_fields()
	{
		return [
			'label_id' => ['class' => Labels2::class, 'have_null' => true],
			'article_id' => ['class' => Entry::class, 'have_null' => true],
		];
	}
}
