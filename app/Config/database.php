<?php

class DATABASE_CONFIG {

	 public $default = array(
              'datasource' => 'Database/Mysql',
              'persistent' => false,
              'host' => 'localhost',
              'port' => '3306',
              'login' => 'root',
              'password' => '',
              'database' => 'menus',
              'prefix' => '',
              'encoding' => 'utf8',
         );

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
		'prefix' => '',
		//'encoding' => 'utf8',
	);
}

