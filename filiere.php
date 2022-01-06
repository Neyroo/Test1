<!DOCTYPE html>
<html>
 <head>
 	<title>FILIERE APPRENANTS</title>
 </head>
<body style="background-color: rgb(210,175,119);">

<?php
	include('menu-nav.php');
	include('bootstrap.php');
	include('connexion-db.php');
	echo '<div class="float-end">
		<a href="new-filiere.php" class="btn-primary btn">Nouveau Filiere</a>
		
		</div><br>';


	$req = 'SELECT idFiliere,libelle,description  FROM filiere';
	$result = $conn->query($req);

	echo '<br><div class="container"><div class="card"><div class="card-header">FILIER</div><div class="card-body">';
	if ($result->num_rows > 0) {
	  echo '<table class="table table-responsive table-bordered">
	  <tr><th>idFiliere</th><th>LIBELLE</th><th>DESCRIPTION</th></tr>';
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["idFiliere"]."</td><td>".$row["libelle"]."</td><td>".$row["description"]."</td></tr>";
	  }
	  echo "</table>";
	} else {
	  echo '<p class="align-middle">La liste des filier est vide</p>';
	}
	$conn->close();

	echo '</div></div></div>';
?>
</body>
</html>