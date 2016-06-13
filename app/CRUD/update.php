<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
$id = $_GET["id"];
$name = $_GET["name"];
$email = $_GET["email"];
$email = $db->escapeString($email);
if ($id){
  if ($name && $email)
    $db->update('CRUDClass',array('name'=>$name,'email'=>$email),'id=' . $id); // Table name, column names and values, WHERE conditions
  if ($name)
    $db->update('CRUDClass',array('name'=>$name),'id=' . $id);
  if ($email)
    $db->update('CRUDClass',array('email'=>$email),'id=' . $id);
}
header("Location: rezult.html");
$res = $db->getResult();
print_r($res);
