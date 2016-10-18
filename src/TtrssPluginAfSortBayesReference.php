<?php

namespace Bal\TtRss;

class PluginAfSortBayesReference extends ObjectDb
{
	function table_name() { return 'ttrss_plugin_af_sort_bayes_references'; }
	function table_fields()
	{
		return [
			'id',
			'document_id',
			'category_id' => ['class' => PluginAfSortBayesCategory::class, 'have_null' => true],
			'owner_uid' => ['class' => User::class, 'have_null' => true],
		];
	}
}
