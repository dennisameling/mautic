<?php
/**
 * Parameter overrides for GitHub Actions.
 */
$parameters = [
    'api_enabled'           => true,
    'api_enable_basic_auth' => true,
	'db_driver'             => 'pdo_mysql',
	'db_host'               => 'localhost',
	'db_table_prefix'       => null,
	'db_port'               => getenv('DB_PORT'),
	'db_name'               => 'mautictest',
	'db_user'               => 'root',
	'db_password'           => ''
];
