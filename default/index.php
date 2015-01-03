<?php
/**
 * Database mysqli functioneel
 */
//connectie met database wordt in variabele $connectie opgeslagen. Deze var heb je nodig als je met db wilt praten
$connectie = mysqli_connect('localhost', 'baf', 'plop0999', 'stamboom');

//bereid de query voor
$q = "SELECT `voornaam`
FROM `personenregister`
WHERE `persoon_id` = 2";

//query uitvoeren en data resource in variabele laden
$resultaat = mysqli_query($connectie, $q);

if (!$resultaat) {//als geen resource, fout weergeven
	//foutmelding van db weergeven. de functie mysqli_error haalt die uit de connectie variabele
	echo "Fout: " . mysqli_error($connectie) . "<br/>";
} else {
	echo '<pre>';
	//mysqli_fetch_assoc haalt uit de data-resource elke keer een rij te voorsijn en stopt die in de variabele $row
	//net zolang tot er geen rijen meer zijn
	while ($row = mysqli_fetch_assoc($resultaat)) {
		print_r($row);
	}
	echo "<br/>Aantal records: " . mysqli_num_rows($resultaat);
	echo '</pre>';
}

/**
 * Database mysqli object georienteerd (OOP)
 */
//met new maken we een nieuw object dat de verbinding met de database heeft, en veel meer
$db = new mysqli('localhost', 'baf', 'plop0999', 'stamboom');

//het object houdt zijn eigen fouten bij in de property connect_errno
if ($db->connect_errno > 0) {
	echo 'Fout: ' . $db->connect_error;
}

//bereid de query voor
$sql = "SELECT `voornaam`
FROM `personenregister`
WHERE `persoon_id` = 2";

//hetzelfde idee, maar nu wordt op het object $db de functie ->query() uitgevoerd
$resultaat = $db->query($sql);
//resultaat is weer data-resource of niets.
if (!$resultaat) {//als geen resource, fout weergeven
	//foutmelding van db weergeven. de foutmelding staat in property error
	echo "Fout: " . $db->error . "<br/>";
} else {
	echo '<pre>';
	//omdat je de OOP versie gebruikt, is ook je resultaat een object met eigen functies
	//dit resultaat kan dus zelf ->fetch_assoc() doen tot zijn rijen op zijn.
	while($row = $resultaat->fetch_assoc()){
		print_r($row);
	}
	echo "<br/>Aantal records: " . mysqli_num_rows($resultaat);
	echo '</pre>';
}
