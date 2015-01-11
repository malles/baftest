<?php
/**
 * persoon.php - data voorbereiden voor bewerken persoon
 */


//basisfuncties (met ../ ervoor om een directory omlaag te gaan)
require_once '../functions.php';

//data uit db halen
$db = getDatabase();

//variabelen uit request halen
$persoon_id = $_GET['persoon_id'];
if (!$persoon_id) {
	//bail out als niet compleet is.
	die ("Geen persoon_id gegeven!");
}

//bereid de query voor //altijd ALTIJD escape_string gebruiken als je data invoegt in de query!
$sql = "SELECT *
FROM `personenregister`
WHERE 'persoon_id' = " . $db->escape_string($persoon_id) . "
LIMIT 0, 1;" ;

//Data uit db halen en in data-object laden
$persoonData = $db->query($sql);

if (!$persoonData) {//als geen resource, fout weergeven
	//foutmelding van db staat nu in 'die' het programma stopt als het mis gaat
	die ("Fout: " . $db->error);
}
if ($persoonData->num_rows == 0) {//als geen persoon gevonden
	//foutmelding van db staat nu in 'die' het programma stopt als het mis gaat
	die ("Fout: Persoon niet gevonden");
}

//we willen alleen de eerste persoon uit de database resultaat hebben
$persoon = $persoonData->fetch_assoc();

//data vcor template voorbereiden
$data = array();
$data['title'] = 'Bewerken persoon ' . $persoon['voornaam'] . ' ' . $persoon['achternaam'];
$data['view'] = 'persoon';

//template includen
include '../template/template.php';

