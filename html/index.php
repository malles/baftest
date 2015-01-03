<?php
//connectie met database wordt in variabele $connectie opgeslagen. Deze var heb je nodig als je met db wilt praten
$connectie = mysqli_connect('localhost','baf','plop0999','stamboom');

//bereid de query voor
$q ="SELECT `voornaam`
FROM `personenregister`
WHERE `persoon_id` = 2";

//query uitvoeren en data resource in variabele laden
$resultaat = mysqli_query($connectie, $q);

if (!$resultaat) {//als geen resource, fout weergeven
	echo "Fout: " . mysqli_error($connectie) . "<br/>"; //foutmelding van db weergeven
} else {
	echo '<pre>';
	while ($record = mysqli_fetch_assoc($resultaat))
	{
		print_r($record);
	}
	echo "<br/>Aantal records: " . mysqli_num_rows($resultaat);
	echo '</pre>';
}