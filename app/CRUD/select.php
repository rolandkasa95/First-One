<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
$db->select('CRUDClass','id,name',NULL,NULL,'id DESC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
var_dump($res);
print_r($res);
?>
