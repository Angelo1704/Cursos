<?php
$db= new PDO("pgsql:host=localhost;dbname=angelo","postgres","");

$id=$_POST["id"];
$db->query("delete from curso where codc = $id");
