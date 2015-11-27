<?php
/**
 * personen.php - data voorbereiden voor namenlijst
 */


//basisfuncties (met ../ ervoor om een directory omlaag te gaan)
require_once '../functions.php';

//data uit db halen
$db = getDatabase();

//bereid de query voor
$sql = "SELECT *
FROM `personenregister`
ORDER BY 'achternaam' ASC";

//Data uit db halen en in data-object laden
$personenData = $db->query($sql);

if (!$personenData) {//als geen resource, fout weergeven
	//foutmelding van db staat nu in 'die' het programma stopt als het mis gaat
	die ("Fout: " . $db->error);
}

//data vcor template voorbereiden
$data = array();
$data['title'] = 'Personenlijst';
$data['view'] = 'personen';

//template includen
include '../template/template.php';