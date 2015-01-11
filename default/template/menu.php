<?php
/**
 * @var array $data
 */

?>

<h4>Menu</h4>

<ul>
	<li><a href="/home.php" class="<?php echo $data['view'] == 'home' ? 'active' : ''; ?>">Home</a></li>
	<li><a href="/persoon/personen.php" class="<?php echo $data['view'] == 'personen' ? 'active' : ''; ?>">Personen</a></li>
	<li><a href="/persoon/toevoegen.php" class="<?php echo $data['view'] == 'toevoegen' ? 'active' : ''; ?>">Persoon toevoegen</a></li>
</ul>