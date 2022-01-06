<?php 
	include('connexion-db.php');
	
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$telephone=$_POST['telephone'];
	$adresse=$_POST['adresse'];
	$age=$_POST['age'];
	$idFiliere = $_POST['idFiliere'];

	$query = "INSERT INTO apprenants (nom, prenom, email, telephone, adresse, age, idfiliere)
	VALUES ('$nom','$prenom','$email','$telephone','$adresse',$age,$idFiliere)";
	 $v = $conn->query($query);

	if ($v){
	    echo "New record created successfully";
	  header('Location: apprenants.php');
	  exit();

	} else {
	  echo "Error: " . $query . "<br>" . $conn->error;
	}

	$conn->close();
 ?>