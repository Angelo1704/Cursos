
<?php
$db= new PDO("pgsql:host=localhost;dbname=angelo","postgres","");
$nome= $_POST['nome'];
$var=$_POST['codc'];

$db->query("update curso set nome='$nome' where codc=$var;");

header("Location: /cursos");


  ?>
