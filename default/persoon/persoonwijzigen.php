<?php
/**
 * persoonwijzigen.php - post met formulierdata ophalen
 */


//basisfuncties (met ../ ervoor om een directory omlaag te gaan)
require_once '../functions.php';

//db ophalen
$db = getDatabase();

//variabelen uit de post halen
$formdata = $_POST['form']; //omdat ik in het form de inputs allemaal de naam 'form[veldnaam]' heb gegeven, staat alles in 1 array die 'form' heet

//data valideren
$errors = array();
if (empty($formdata['voorrnaam'])) {
	$errors[] = 'Voornaam is verplicht';
}
if (empty($formdata['achternaam'])) {
	$errors[] = 'Achternaam is verplicht';
}
if (count($errors) > 0) {
	//form is niet goed, form template inladen

	//zet data uit form weer in $persoon, zodat dat als standaardwaarde ingevuld is
	$persoon = $formdata;

	//data vcor template voorbereiden
	$data = array();
	$data['title'] = 'Toevoegen persoon - ongeldig formulier';
	$data['view'] = 'toevoegen';
	$data['errors'] = $errors;

	//template includen en stoppen
	include '../template/template.php';
	exit();
}
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
$link = ' /persoon/persoon.php?persoon_auto_id=' . $formdata['persoon_auto_id'];
//voorlopig melding meegeven in url, komt later in sessie
$link .= '&msg=oke';
header('Location: ' . $link);
exit();