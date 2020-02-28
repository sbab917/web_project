<?php
include_once '../src/Bootstrap.php';
//var_dump($_SESSION);die;

$datas = $_POST;
$action = !empty($datas['action']) ? $datas['action'] : null;

if($action == 'search'){
  $nom =  !empty($datas['name']) ? $datas['name'] : null;
  $type1 =  !empty($datas['type1']) ? $datas['type1'] : null;
  $type2 =  !empty($datas['type2']) ? $datas['type2'] : null;
  //var_dump($nom);var_dump($type1);var_dump($type2);var_dump($datas);die;
  //$userRepository = new Model\Entity\User\UserRepository(\Db\Connection::get());
  $pokemonRepository = new Model\Entity\Pokemon\PokemonRepository(\Db\Connection::get());

  $length=$datas["length"];
  $start=$datas["start"];
  $length+=$start; // La taille plus le debut
  $order_column=$datas["order"][0]["column"];
  $order_direction=$datas["order"][0]["dir"];


  $pokemons = $pokemonRepository->search($nom, $type1, $type2, $start, $length ,$order_column,$order_direction);

  $return = array(
    "draw" => $datas["draw"],
    "data" => $pokemons,
    "recordsTotal" => count($pokemons),
    "recordsFiltered" => count($pokemons)
  );
  $return = json_encode($return);
  //var_dump($users);
  //var_dump(json_encode($users, JSON_FORCE_OBJECT));die;
  echo $return;

}


?>
