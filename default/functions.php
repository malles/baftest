<?php
/* *
 *	baftest
 *  functions.php
 *	Created on 11-1-2015 22:27
 *  
 *  @author Matthijs
 *  @copyright Copyright (C)2015 Bixie.nl
 *
 */


/**
 * @return mysqli
 */
function getDatabase() {
	require_once 'config.php';
	/**
	 * @var array $config;
	 */
	$db = new mysqli($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_database']);
	return $db;
}

