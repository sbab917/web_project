<?php include('../src/View/header.php') ?>

<div class="container">

<form action="loginController.php" method="post">
  <h1>Inscription</h1>
  <label>Login :</label>
  <input type="text" name="login" id="login">
  <label>Password :</label>
  <input type="text" name="pwd" id="pwd">
  <label>Nom :</label>
  <input type="text" name="nom" id="nom">
  <label>Prenom :</label>
  <input type="text" name="prenom" id="prenom">
  <button type="submit">Valider</button>
  <?php
    if(isset($_GET['erreur'])){
      $err = $_GET['erreur'];
      if($err == 1){
        echo"<p>Login ou password incorrecte</p>";
      }
    }
  ?>
</form>

</div>


<?php include('../src/View/footer.php') ?>
