<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',

	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'ir',

	// 'hostname' => '147.50.136.211',
	// 'username' => 'iradmin',
	// 'password' => 'Ttua?587',
	// 'database' => 'ir',

	
	'hostname' => '147.50.136.211',
	'username' => 'cmogroup',
	'password' => 'hC04ha_1',
	'database' => 'cmogroup',


	

	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
