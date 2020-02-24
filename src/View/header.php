<?php

require_once '../src/Bootstrap.php';

$userRepository = new Model\Entity\User\UserRepository(\Db\Connection::get());
$users = $userRepository->fetchAll();
?>

<html>
<head>
    <link rel="stylesheet" href='/css/style.css' type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
</head>

<body>
  <div class="hero-image">
    <div class="hero-text">
      <h1>Pokedex</h1>
      <p>Global Pokedex</p>
    </div>
  </div>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Poke-iien</a>
        </div>
        <ul class="nav navbar-nav" style="display:inline;">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="/pokedex.php">Pokedex</a></li>
          <li><a href="/account.php">Account</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </div>
    </nav>
