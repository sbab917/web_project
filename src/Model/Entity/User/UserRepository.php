<?php
namespace Model\Entity\User;
use PDO;

class UserRepository
{
    /**
     * @var \PDO
     */
    private PDO $connection;

    /**
     * UserRepository constructor.
     * @param PDO $connection
     */
    public function __construct(PDO $connection){
        $this->connection = $connection;
    }

     //Transforme un tableau de données en objet
    public function hydrate($row = array()){
       if (empty($row)){
         return null;
       }
       $user = new User();
       $user
           ->setId($row->id)
           ->setFirstname($row->firstname)
           ->setLastname($row->lastname);
      return $user;
     }

     // Transforme un tableau d'objet en array

    public function ObjectsToArray($obj){
      $users = array();
      foreach ($obj as $row) {
        $user = array(
          'id' => $row->getId(),
          'firstname' => $row->getFirstname(),
          'lastname' => $row->getLastname()
        );
        $users[] = $user;
      }
      return $users;
    }
    /**
     * @return array
     * @throws \Exception
     */
    public function fetchAll(){
        $rows = $this->connection->query('SELECT * FROM "user"')->fetchAll(PDO::FETCH_OBJ);
        $users = [];
        foreach ($rows as $row) {
            $user = new User();
            $user
                ->setId($row->id)
                ->setFirstname($row->firstname)
                ->setLastname($row->lastname);
            $users[] = $user;
        }

        return $users;
    }

    public function findByName($name){
        //$name = mysqli_real_escape_string($this->connection, $name);
        $stmt = $this->connection->prepare(
          'Select * from "user" where firstname = :name'
        );
        $stmt->bindValue(':name', $name, \PDO::PARAM_STR);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_OBJ);

        $users = [];
        foreach ($rows as $row) {
            $users[] = $this->hydrate($row);
        }
        //var_dump($users);die;
        return $users;
    }

    public function search($firstname, $start, $length,$order_column,$order_direction){
        //$firstname = mysqli_real_escape_string($this->connection, $firstname);
        $txtrequete = 'Select * from "user"';

        if($firstname != null){
          $txtrequete .="where firstname = :name";
        }
        //Switch case pour l'order by les numero corresponde a l'odre des colonne dans le datatable de la vue
        switch ($order_column) {
          case 0 :
            $txtrequete .=" ORDER BY id  " . $order_direction;
            break;
          case 1:
            $txtrequete .=" ORDER BY firstname  " . $order_direction;
            break;
          case 2:
            $txtrequete .=" ORDER BY lastname  " . $order_direction;
            break;
        }

        $stmt = $this->connection->prepare($txtrequete);
        if($firstname != null){
          $stmt->bindValue(':name', $firstname, \PDO::PARAM_STR);
        }
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
        $users = [];
        //var_dump($rows);
        foreach ($rows as $row) {
            $user = array(
              'id' => $row->id,
              'firstname' => $row->firstname,
              'lastname' => $row->lastname
            );
            $users[] = $user;
        }
        return $users;
    }

    public function userExist($login,$pwd){
      $stmt = $this->connection->prepare(
        'Select * from "user" where login = :login and mdp = :mdp'
      );
      $stmt->bindValue(':login', $login, \PDO::PARAM_STR);
      $stmt->bindValue(':mdp', $pwd, \PDO::PARAM_STR);
      $stmt->execute();
      $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
      return !empty($rows);
    }

}
