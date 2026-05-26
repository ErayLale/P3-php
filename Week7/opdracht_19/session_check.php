<?php
session_start();
	$_SESSION['kleur'] = 'rood';
?>
<p>Mijn opgeslagen waarde is: <?php echo $_SESSION['kleur']; ?></p>