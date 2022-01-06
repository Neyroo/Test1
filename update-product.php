<?php 
	include('connexion-db.php');

	$matricule=$_GET['apprenants'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$telephone=$_POST['telephone'];
	$adresse=$_POST['adresse'];
	

	

	$query = "UPDATE apprenants SET nom='$nom',prenom='$prenom',email='$email',telephone='$telephone',adresse='$adresse',age='$age' WHERE matricule='".$matricule."'";
	if ($conn->query($query) === TRUE) {
	  echo "Apprenants mis à jour avec succès";
	  header('Location: apprenants.php');
	  exit();

	} else {
	  echo "Error: " . $query . "<br>" . $conn->error;
	}

	$conn->close();
 ?>