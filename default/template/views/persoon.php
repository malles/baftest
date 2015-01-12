<?php
/**
 * persoon.php - Bewerk persoon
 *
 * @var array $data
 * @var array $persoon
 */

?>

<?php if (isset($_GET['msg']) && $_GET['msg'] == 'oke') : ?>
    <div class="success">Persoon is succesvol opgeslagen!</div>
<?php endif; ?>

<h3><?php echo $persoon['voornaam']; ?> <?php echo $persoon['achternaam']; ?></h3>

	Voornaam: <?php echo $persoon['voornaam']; ?><br/>
	Achternaam: <?php echo $persoon['achternaam']; ?><br/>
	Geboorteplaats: <?php echo $persoon['geboorteplaats']; ?><br/>

<h3>Bewerken</h3>
<?php if (!empty($data['errors'])) : ?>
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
	Partner: <select name="form[partner_id]">
		<option value="0">Geen partner</option>
		<?php foreach ($data['pulldownOptiesPersonen'] as $id=>$text) :
			//bepaal of de huidige waarde de geselcteerde is
			$selected = '';
			if ($id == $persoon['partner_id']) {
				$selected = ' selected="selected"';
			}
			?>
			<option value="<?php echo $id; ?>"<?php echo $selected; ?>><?php echo $text; ?></option>
		<?php endforeach; ?>
	</select><br/>

	<input type="hidden" name="form[persoon_auto_id]" value="<?php echo $persoon['persoon_auto_id']; ?>"/>
	<button type="submit">Versturen</button>
</form>
<?
echo '<pre>';
print_r($persoon);
echo '</pre>';


