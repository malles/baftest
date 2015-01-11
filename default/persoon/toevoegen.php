<?php
/**
 * toevoegen.php - data voorbereiden voor toevoegen persoon
 */


//basisfuncties (met ../ ervoor om een directory omlaag te gaan)
require_once '../functions.php';

//standaardwaarden
$persoon['voornaam'] = '';
$persoon['achternaam'] = '';
$persoon['geboorteplaats'] = '';

//data vcor template voorbereiden
$data = array();
$data['title'] = 'Toevoegen persoon';
$data['view'] = 'toevoegen';

//template includen
include '../template/template.php';
