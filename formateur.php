<!DOCTYPE html>
<html>
 <head>
 	<title>ACCEUIL</title>
	 <link rel="stylesheet" href="style.css">
 </head>
<body style="background-color: rgb(210,175,119);">

<?php
	include('menu_met.php');
	include('bootstrap.php');
	include('connexion-db.php');


	$req = 'SELECT idFormateur, nomF, prenomF,adresseF, ageF,telephoneF, emailF FROM formateur';
	$result = $conn->query($req);

	echo '<br><div class="container"><div class="card"><div class="card-header">FORMATEURS ISEP</div><div class="card-body">';
	if ($result->num_rows > 0) {
	  echo '<table class="table table-responsive table-bordered">
	  <tr><th>IDF</th><th>NOMF</th><th>PRENOMF</th><th>ADRESSEF</th><th>AGEF</th><th>TELELEPHONEF</th><th>EMAILF</th></tr>';
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	    echo "<tr><td>".$row["idFormateur"]."</td><td>".$row["nomF"]."</td><td>".$row["prenomF"]."</td><td>".$row["adresseF"]."</td><td>".$row["ageF"]."</td><td>".$row["telephoneF"]."</td><td>".$row["emailF"]."</td></tr>";
	  }
	  echo "</table>";
	} else {
	  echo '<p class="align-middle">La liste des formateurs est vide</p>';
	}
	$conn->close();

	echo '</div></div></div>';

?>


</body>
</html>