<?php
/**
 * persoon.php - data voorbereiden voor bewerken persoon
 */


//basisfuncties (met ../ ervoor om een directory omlaag te gaan)
require_once '../functions.php';

//data uit db halen
$db = getDatabase();

//variabelen uit request halen
$persoon_auto_id = $_GET['persoon_auto_id'];
if (!$persoon_auto_id) {
	//bail out als niet compleet is.
	die ("Geen persoon_id gegeven!");
}

//bereid de query voor //altijd ALTIJD escape_string gebruiken als je data invoegt in de query!
$sql = "SELECT *
FROM `personenregister`
WHERE `persoon_auto_id` = " . $db->escape_string($persoon_auto_id) . "
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

//data voor dropdown ophalen en voorbereiden
$sql = "SELECT persoon_auto_id, persoon_id, voornaam, achternaam
FROM `personenregister`
WHERE `persoon_auto_id` NOT IN (" . $persoon['persoon_auto_id'] . ")
AND (`partner_id` = 0 OR `partner_id` = " . $persoon['persoon_auto_id'] . ")
ORDER BY achternaam ASC;" ;
//Data uit db halen en in data-object laden
$pulldownData = $db->query($sql);
//data bewerken zodat het in tempalte makkelijk te laden is
$pulldownOpties = array();
while($row = $pulldownData->fetch_assoc()){
	//voor elke auto-id wordt een key aangemaakt in de array, waar de samengestelde string met tekst als waarde in gezet wordt
	$pulldownOpties[$row['persoon_auto_id']] = $row['persoon_id'] . ' - ' .$row['voornaam'] . ' ' . $row['achternaam'];
}
//de uiteindelijke array met auto-id's en teksten voor pulldown koppelen aan data-array voor template.
$data['pulldownOptiesPersonen'] = $pulldownOpties;

//template includen
include '../template/template.php';

