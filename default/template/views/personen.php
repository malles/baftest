<?php
/**
 * personen.php - Lijstweergave van personen
 * @var array $data
 * @var mysqli_result $personenData
 *
 */


?>

<h3>Lijst met personen</h3>
	<table>
		<tr>
			<td>Auto ID</td>
			<td>ID</td>
			<td>Voornaam</td>
			<td>Achternaam</td>
			<td>Geboortedatum</td>
			<td>Geboorteplaats</td>
			<td>Bewerk</td>
		</tr>
		<?php
		while($row = $personenData->fetch_assoc()){
			?>
			<tr>
				<td><?php echo $row['persoon_auto_id']; ?></td>
				<td><?php echo $row['persoon_id']; ?></td>
				<td><?php echo $row['voornaam']; ?></td>
				<td><?php echo $row['achternaam']; ?></td>
				<td><?php echo $row['geboortedatum']; ?></td>
				<td><?php echo $row['geboorteplaats']; ?></td>
				<td><a href="/persoon/persoon.php?persoon_auto_id=<?php echo $row['persoon_auto_id']; ?>">Bewerken</a></td>
			</tr>

		<?php
		}
		?>

	</table>


<?
if ($config['debug'] == true) {
	echo '<pre>';
	print_r($personenData);
	echo '</pre>';
}
