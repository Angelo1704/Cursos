<?php
$db= new PDO("pgsql:host=localhost;dbname=angelo","postgres","");

$nome= $_POST['nome'];
$db->query("insert into curso (nome) values ('$nome')");

header("Location: /cursos");
