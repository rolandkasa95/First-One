<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
$id = $_GET["id"];
$name = $_GET["name"];
$email = $_GET["email"];
$email = $db->escapeString($email);
#$db->idNumber('CRUDClass');
if ($id && $name && $email){
    $db->delete('CRUDClass','id=' . $id . 'AND' . 'name=' . $name . 'AND' . 'email=' . $email);
    header("Location: rezult.html");
}
if ($id && $name){
    $db->delete('CRUDClass','id=' . $id . 'AND' . 'name=' . $name);
    header("Location: rezult.html");
}
if ($id && $email){
    $db->delete('CRUDClass','id=' . $id . 'AND' . 'email=' . $email);
    header("Location: rezult.html");
}
if ($email && $name){
    $db->delete('CRUDClass','email=' . $email . 'AND' . 'name=' . $name);
    header("Location: rezult.html");
}
if ($id){
  $db->delete('CRUDClass','id=' . $id);  // Table name, WHERE conditions
  header("Location: rezult.html");
}
if ($name){
  $db->delete('CRUDClass','name=' . $name);
  header("Location: rezult.html");
}
if ($email){
    $db->delete('CRUDClass','email=' . $email);
    header("Location: rezult.html");
}
header("Location: rezult.html");
$res = $db->getResult();
print_r($res);

?>
