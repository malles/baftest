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
	$db = new mysqli('localhost', 'baf', 'plop0999', 'stamboom');
	return $db;
}

