<?php

namespace Bal\TtRss;

class ObjectDb extends \bors_object_db
{
	function storage_engine() { return \bors_storage_mysql::class; }
	function db_name() { return 'BAL_TTRSS'; }
}
