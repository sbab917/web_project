<?php
include_once '../src/Bootstrap.php';

$login = !empty($_POST['login']) ? $_POST['login'] : null;
$pwd = !empty($_POST['pwd']) ? $_POST['pwd'] : null;

if($login != null && $pwd != null){
  $userRepository = new Model\Entity\User\UserRepository(\Db\Connection::get());
  //Si la combinnaison login mdp existe renvoyer sur l'index avec la session enregistrer sinon retrourner sur la page avec un code erreur
//$test = $userRepository->userExist($login,$pwd);
//var_dump($test);die;
  if($userRepository->userExist($login,$pwd)){
    $_SESSION['user_login']=$login;
    header('Location: pokedex.php');
  }else{
    header('Location: login.php?erreur=1');
  }
}
var_dump($pwd);die;

?>
