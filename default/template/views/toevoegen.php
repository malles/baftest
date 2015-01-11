<?php
/**
 * toevoegen.php - Nieuw persoon
 *
 * @var array $data
 * @var array $persoon
 */

?>

<h3>Toevoegen</h3>

<?php if (count($data['errors'])) : ?>
	<ul class="error">
	<?php foreach ($data['errors'] as $error) : ?>
		<li class="error"><?php echo $error; ?></li>
	<?php endforeach; ?>
    </ul>
<?php endif; ?>

<form name="input" action="/persoon/persoonwijzigen.php" method="post">
	Voornaam *: <input type="text" name="form[voornaam]" value="<?php echo $persoon['voornaam']; ?>"/> <br/>
	Achternaam *: <input type="text" name="form[achternaam]" value="<?php echo $persoon['achternaam']; ?>"/> <br/>
	Geboorteplaats: <input type="text" name="form[geboorteplaats]" value="<?php echo $persoon['geboorteplaats']; ?>"/> <br/>

	<input type="hidden" name="form[persoon_auto_id]" value="0"/>
	<button type="submit">Versturen</button>
</form>

