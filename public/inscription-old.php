<?php include('../src/View/header.php') ?>

<div class="container">

<form action="loginController.php" method="post">
  <h1>Inscription</h1>
  <label>Login :</label>
  <input type="text" name="login" id="login">
  <label>Password :</label>
  <input type="text" name="pwd" id="pwd">
  <label>Nom :</label>
  <input type="text" name="nom" id="nom" required pattern="[A-Z][A-Za-z' -]+" onkeyup="verifForm(this)">
  <label>Prenom :</label>
  <input type="text" name="prenom" id="prenom" required pattern="[A-Z][A-Za-z' -]+" onkeyup="verifForm(this)">
  <button type="submit">Valider</button>
  <input id="action" name="action" type="hidden" value="inscriptionAction">
  <?php
    if(isset($_GET['erreur'])){
      $err = $_GET['erreur'];
      if($err == 1){
        echo"<p>Veuiller bien remplire le formulaire</p>";
      }
    }
  ?>
</form>

</div>
<?php include('../src/View/footer.php') ?>

<script type="text/javascript">

function verifForm(name) {
  //console.log(name.id);
  if(name.validity.patternMismatch) {
    if(name.id == "nom"){
      name.setCustomValidity("Le nom doit être de la forme NOM ou Nom sans chiffre ou caractère spéciaux");
    }else if (name.id == "prenom") {
      name.setCustomValidity("Le prenom doit être de la forme Prenom sans chiffre ou caractère spéciaux");
    }
  } else {
    name.setCustomValidity("");
  }
}

</script>
