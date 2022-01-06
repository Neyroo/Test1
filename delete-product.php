<?php
	include('connexion-db.php');
	echo 'Bonjour ' . htmlspecialchars($_GET["matricule"]) . '!';
	$id = $_GET['matricule'];
	echo "<p>".$matricule."</p>";

	$query = "DELETE FROM apprenants WHERE matricule='" . $id."'";
	if ($conn->query($query) === TRUE) {
		header('Location: apprenants.php');
		exit();
	}
	echo "Successfuly deleted";
	//exit();
 ?>