<!DOCTYPE html>
<html>
 <head>
 	<title>AUTHENTIFICATION APPRENANTS</title>
 </head>
<body>

<?php

session_start();

	include('bootstrap.php');
    include('connexion-db.php');
    
?>  
<form action=" apprenants.php" method="POST">
  <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputName">Nom utilisateur</label>
      <input type="text" class="form-control" id="inlineFormInputName" name="nom utilisateur" required>
    </div>
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputGroupUsername">PASSWORD</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="password" class="form-control" id="inlineFormInputGroupUsername" name="mot de passe" required>
      </div>
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">ENREGISTRER</button>
    </div>
  </div>
</form>
<?php
                $u=(isset($_POST['utilisatur']));
                $m=(isset($_POST['password']));
            try{
            }catch(Exception $e){
                die('erreur '.$e->getmessage());
                }
            $reql="INSERT INTO Utilisateurs(utilisateur, passeword) VALUES ('$u','$m')";
  ?>