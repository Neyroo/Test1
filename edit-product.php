<?php
  include('bootstrap.php');
  include('menu_met.php');
  include('connexion-db.php');

  $nom = '';
  $prenom = '';
  $age = 0;
  $email = '';
  $adresse='';
  $telephone = '';
  $matricule = $_GET['matricule'];
  $idFiliere ='0';

  $req = "SELECT * FROM apprenants where matricule = $matricule";
  $result = $conn->query($req);
  
  if ($result==true ) {
    while($row = $result->fetch_assoc()) {
      $nom=$row['nom'];
      $prenom=$row['prenom'];
      $age=$row['age'];
      $email=$row['email'];
      $adresse=$row['adresse'];
      $telephone=$row['telephone'];
    
    }
  }
 
 ?>
 <form method="POST" action="update-product.php?apprenants=<?=$matricule?>">
          <div class="row">
            <div class="col">
              <label for="nom" class="form-label">NOM</label>
              <input type="text" name="nom" class="form-control" id="nom" value="<?php echo($nom)?>">
              <label for="prenom" class="form-label">PRENOM</label>
              <input type="text" name="prenom" class="form-control" id="prenom" value="<?php echo($prenom)?>">
              <label for="age" class="form-label">AGE</label>
              <input type="number" name="age" class="form-control" id="age" value="<?php echo($age)?>">
            </div>
            <div class="col">
              <label for="email" class="form-label">EMAIL</label>
              <input type="text" name="email" class="form-control" id="email" value="<?php echo($email)?>">
              <label for="telephone" class="form-label">TELEPHONE</label>
              <input type="number" name="telephone" class="form-control" id="telephone" value="<?php echo($telephone)?>">
              <label for="adresse" class="form-label">ADRESSE</label>
              <input type="text" name="adresse" class="form-control" id="adresse" value="<?php echo($adresse)?>">
              <label for="idFiliere" class="form-label">ID</label>
              <input type="number" name="idFiliere" class="form-control" id="idFiliere" value="<?php echo($idFiliere)?>">
            </div>
          </div>
            <br>
            <button type="submit" class="btn btn-success align-middle">Mettre à jour</button>
        </form>
      </div>
    </div>
  </div>
</div>