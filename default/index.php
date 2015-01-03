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
	//hier weer geen functie opvragen met resultaat, maar num_rows is property van het resultaat-object
	echo "<br/>Aantal records: " . $resultaat->num_rows;
	echo '</pre>';
}

//tweede vraag kun je op hetzelfde db-object doen (`` zijn optioneel...)
$sql2 = "SELECT persoon_id, `voornaam`, `achternaam`
FROM `personenregister`
WHERE `achternaam` LIKE 'Gelukkig'";

//hetzelfde weer..
$resultaat2 = $db->query($sql2);
if (!$resultaat2) {//als geen resource, fout weergeven
	echo "Fout: " . $db->error . "<br/>";
} else {
	echo '<pre>';
	while($row = $resultaat2->fetch_assoc()){
		//dit geeft de array weer om te testen
		print_r($row);
		//geef een waarde uit de array weer met br
		echo $row['voornaam'] . '<br/>';
		//maak een zin
		echo 'Persoon ' . $row['voornaam'] . ' ' . $row['achternaam'] . ' heeft id ' . $row['persoon_id'] . '.<br/>';
		//maak een zin zonder die irritante punten en aanhalingstekens (http://php.net/sprintf)
		echo sprintf('Persoon %s %s heeft id %d.<br/>', $row['voornaam'], $row['achternaam'], $row['persoon_id']);
	}
	echo "<br/>Aantal records: " . $resultaat2->num_rows;
	echo '</pre>';
}
