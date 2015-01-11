<?php
/**
 * persoonwijzigen.php - post met formulierdata ophalen
 */


//basisfuncties (met ../ ervoor om een directory omlaag te gaan)
require_once '../functions.php';

//data uit db halen
$db = getDatabase();


//variabelen uit de post halen
$formdata = $_POST['form']; //omdat ik in het form de inputs allemaal de naam 'form[veldnaam]' heb gegeven, staat alles in 1 array die 'form' heet

//de query wordt wat ingewikkelder nu.. kan later vast makkelijker
$sql = "UPDATE `personenregister` SET
	`voornaam` = '" . $formdata['voornaam'] . "',
	`achternaam` = '" . $formdata['achternaam'] . "',
	`geboorteplaats` = '" . $formdata['geboorteplaats'] . "'
WHERE `persoon_auto_id` = ".$formdata['persoon_auto_id'].";";

//Data uit db halen en in data-object laden
$dbResult = $db->query($sql);

if (!$dbResult) {//als geen resource, fout weergeven
	//foutmelding van db staat nu in 'die' het programma stopt als het mis gaat
	die ("Fout: " . $db->error);
}
//id van de laatste toevoeging opvragen uit db
if ($db->insert_id) {
	$formdata['persoon_auto_id'] = $db->insert_id;
}

//alles goed, doorsturen naar de view-weergave
header('Location:  /persoon/persoon.php?persoon_auto_id=' . $formdata['persoon_auto_id']);
exit();