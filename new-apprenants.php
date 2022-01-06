<?php
  include('bootstrap.php');
  include('menu_met.php');

?>
<br><br>
<div class="container">
  <div class="card">
    <div class="card-header">
      Veuiller remplir ce formulaire
    </div>
    <div class="card-body">
      <div class="container">
        <form method="POST" action="insert-apprenants.php">
          <div class="row">
            <div class="col">
            <label for="prenom" class="form-label">PRENOM</label>
              <input type="text" name="prenom" class="form-control" id="prenom">
          
              <label for="nom" class="form-label">NOM</label>
              <input type="text" name="nom" class="form-control" id="nom">
             
            </div>
            <div class="col">
              <label for="email" class="form-label">EMAIL</label>
              <input type="text" name="email" class="form-control" id="email">
            </div>
            <div class="col">
            <label for="telephone" class="form-label">TELEPHONE</label> 
              <input type="text" name="telephone" class="form-control" id="telephone">
            </div>
            <div class="col">
            <label for="adresse" class="form-label">ADRESSE</label>
              <input type="text" name="adresse" class="form-control" id="adresse">
            </div>
            <div class="col">
            <label for="age" class="form-label">AGE</label>
              <input type="number" name="age" class="form-control" id="age">
            </div>
            <div class="col">
            <label for="idFiliere" class="form-label">ID</label>
              <input type="text" name="idFiliere" class="form-control" id="idFiliere">
            </div>
          </div>       
           <br>
            <button type="submit" class="btn btn-success align-middle">Enregistrer</button>
        </form>
      </div>
    </div>
  </div>
</div>