<!DOCTYPE html>
<html>
 <head>
 	<title>ISEP DIAMNIADIO</title>

 </head>
<body style="background-color: rgb(210,175,119);">

<?php
	include('menu_met.php');
	include('bootstrap.php');
	include('connexion-db.php');

/*	<nav class="navbar navbar-default navbar-inverse">

      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon glyphicon-search" aria-hidden="true"></span></button>
     </form>

</nav> */

	$req = 'SELECT matricule, nom, prenom, email,telephone,adresse,age,idFiliere FROM apprenants';
	$result = $conn->query($req);

	echo '<br><div class="container"><div class="eli"><div class="elou">APPRENANTS ISEP</div><div class="card-body">';
	if ($result->num_rows > 0) {
	  echo '<table class="table">
	  <tr><th>MATRICULE</th><th>NOM</th><th>PRENOM</th><th>EMAIL</th><th>TELEPHONE</th><th>ADRESSE</th><th>AGE</th><th>ID</th><th>Voulez-vous ?</th></tr>';
	  while($row = $result->fetch_assoc()) {
	    echo "<tr><td>".$row["matricule"]."</td><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["email"]."</td><td>".$row["telephone"]."</td><td>".$row["adresse"]."</td><td>".$row["age"]."</td><td>".$row["idFiliere"]."</td><td><a class='btn btn-danger float-end' href='delete-product.php?matricule=".$row["matricule"]."''>Supprimer</a><a class='btn btn-warning float-start' href='edit-product.php?matricule=".$row["matricule"]."''>Modifier</a></td></tr>";
	  }
	  echo "</table>";
	} else {
	  echo '<p class="align-middle">La liste des apprenants est vide</p>';
	}
	$conn->close();

	echo '<div class="float-end">
		<a href="new-apprenants.php" class="btn btn-success align-middle">Inscription</a>
		</div><br>';

	echo '</div></div></div>';

 
?>
</body> 
<footer>
<br><br>
    <?php
	include('pagination.php');


	?>

</footer>
</html>