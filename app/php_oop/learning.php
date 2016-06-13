<?php

error_reporting(-1);

class Connection {

    protected $host = "localhost";
    protected $dbname = "oop";
    protected $user = "root";
    protected $pass = "Kasamargit22";
    protected $DBH;

    function connect() {

        try {

            $this->DBH = new PDO("mysql:host=localhost;dbname=oop", "root", "Kasamargit22");
            echo "something";
        }
        catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    public function closeConnection() {

        $this->DBH = null;
    }

    public function select(){
      $sql = "SELECT * FROM CRUDClass";
      $stmt = $this->DBH->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      print_r($result);
    }

    public function insert($name,$email){
      $sql = "INSERT INTO CRUDClass (name,email) VALUES (:name,:email)";
      $stmt = $this->DBH->prepare($sql);
      $stmt->bindParam(":name",$name);
      $stmt->bindParam(":email",$email);
      $stmt->execute();
    }

    public function delete($id){
      $sql = "DELETE FROM CRUDClass WHERE id = :id";
      $stmt = $this->DBH->prepare($sql);
      $stmt->bindParam(":id",$id);
      $stmt->execute();
    }

    public function update($id,$name,$email){
      $sql = "UPDATE CRUDClass SET name = :name, email = :email WHERE id = :id";
      $stmt = $this->DBH->prepare($sql);
      $stmt->bindParam(":name",$name);
      $stmt->bindParam(":email",$email);
      $stmt->bindParam(":id",$id);
      $stmt->execute();
    }
}

  $obj = new Connection();
/* SELECT EVERYTHING
  $obj->connect();
  $obj->select();
*/
/*  INSERT A QUERRY
  echo "\n";
  $name="myName";
  $email="myEmail@email.com";
  $obj->connect();
  $obj->insert($name,$email);
  $obj->connect();
  $obj->select();
*/
/* DELETE A QUERY
  $obj->connect();
  $obj->delete(10);
  $obj->connect();
  $obj->select();
*/
/* UPDATE A QUERY
  $obj->connect();
  $obj->update(9,'Daniel','daniel@daniel.com');
  $obj->connect();
  $obj->select();
*/
?>
