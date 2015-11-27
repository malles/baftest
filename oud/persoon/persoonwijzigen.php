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

$isNew = $formdata['persoon_id'] == 0; //als het id 0 is, is hij nieuw!
//data valideren
	$errors = array();
	if (empty($formdata['voornaam'])) {
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
		if ($isNew) {
			$data['title'] = 'Toevoegen persoon - ongeldig formulier';
			$data['view'] = 'toevoegen';
			$data['errors'] = $errors;
		} else { //bewerken
			$data['title'] = 'Bewerken persoon - ongeldig formulier';
			$data['view'] = 'persoon';
			$data['errors'] = $errors;
		}

		//template includen en stoppen
		include '../template/template.php';
		exit();
	}

//de query wordt wat ingewikkelder nu.. kan later vast makkelijker

if ($isNew) {
	$sql = "INSERT INTO `personenregister` (
			`voornaam`,
			`achternaam`,
			`partner_id`,
			`geboorteplaats`
		) VALUES (
			'" . $db->escape_string($formdata['voornaam']) . "',
			'" . $db->escape_string($formdata['achternaam']) . "',
			'" . $db->escape_string($formdata['partner_id']) . "',
			'" . $db->escape_string($formdata['geboorteplaats']) . "'
		)";
} else {
	$sql = "UPDATE `personenregister` SET
	`voornaam` = '" . $db->escape_string($formdata['voornaam']) . "',
	`achternaam` = '" . $db->escape_string($formdata['achternaam']) . "',
	`partner_id` = '" . $db->escape_string($formdata['partner_id']) . "',
	`geboorteplaats` = '" . $db->escape_string($formdata['geboorteplaats']) . "'
	WHERE `persoon_id` = " . $db->escape_string($formdata['persoon_id']) . ";";
}

//Data uit db halen en in data-object laden
$dbResult = $db->query($sql);

if (!$dbResult) {//als geen resource, fout weergeven
	//foutmelding van db staat nu in 'die' het programma stopt als het mis gaat
	die ("Fout: " . $db->error);
}
//id van de laatste toevoeging opvragen uit db
if ($db->insert_id) {
	$formdata['persoon_id'] = $db->insert_id;
}

//alles goed, doorsturen naar de view-weergave
$link = ' /persoon/persoon.php?persoon_id=' . $formdata['persoon_id'];
//voorlopig melding meegeven in url, komt later in sessie
$link .= '&msg=oke';
header('Location: ' . $link);
exit();