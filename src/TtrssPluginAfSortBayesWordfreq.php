<?php

namespace Bal\TtRss;

class PluginAfSortBayesWordfreq extends ObjectDb
{
	function table_name() { return 'ttrss_plugin_af_sort_bayes_wordfreqs'; }
	function table_fields()
	{
		return [
			'word',
			'category_id' => ['class' => PluginAfSortBayesCategory::class, 'have_null' => true],
			'owner_uid' => ['class' => User::class, 'have_null' => true],
			'count',
		];
	}
}
