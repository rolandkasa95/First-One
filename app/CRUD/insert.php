<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
$name = $_GET["name"];
$email = $_GET["email"];
$email = $db->escapeString($email); // Escape any input before insert
if ($email && $name)
  $db->insert('CRUDClass',array('name'=>$name,'email'=>$email));  // Table name, column names and respective values
$res = $db->getResult();
print_r($res);

header("Location: rezult.html");

?>
