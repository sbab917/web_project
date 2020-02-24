<?php
include_once '../src/Bootstrap.php';
//var_dump($_SESSION);die;

$datas = $_POST;
$action = !empty($datas['action']) ? $datas['action'] : null;

if($action == 'search'){
  $firstname =  !empty($datas['name']) ? $datas['name'] : null;
  $userRepository = new Model\Entity\User\UserRepository(\Db\Connection::get());

  $length=$datas["length"];
  $start=$datas["start"];
  $length+=$start; // La taille plus le debut
  $order_column=$datas["order"][0]["column"];
  $order_direction=$datas["order"][0]["dir"];


  $users = $userRepository->search($firstname,$start, $length ,$order_column,$order_direction);

  $return = array(
    "draw" => $datas["draw"],
    "data" => $users,
    "recordsTotal" => 10,
    "recordsFiltered" => 10
  );
  $return = json_encode($return);
  //var_dump($users);
  //var_dump(json_encode($users, JSON_FORCE_OBJECT));die;
  echo $return;

}


?>
