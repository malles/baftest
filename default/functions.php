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
//altijd de config laden, zodat variabele $config beschikbaar is
/**
 * @var array $config;
 */
include 'config.php';


/**
 * @return mysqli
 */
function getDatabase() {
	include 'config.php';
	/**
	 * @var array $config;
	 */
	$db = new mysqli($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_database']);
	return $db;
}

