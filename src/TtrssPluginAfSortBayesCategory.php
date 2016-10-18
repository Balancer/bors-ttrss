<?php

namespace Bal\TtRss;

class PluginAfSortBayesCategory extends ObjectDb
{
	function table_name() { return 'ttrss_plugin_af_sort_bayes_categories'; }
	function table_fields()
	{
		return [
			'id',
			'category',
			'probability',
			'owner_uid' => ['class' => User::class, 'have_null' => true],
			'word_count',
		];
	}
}
