<?php

$hote = "localhost";
$username = "root";
$password = "";
$db_name = "sgt";
$port = "3306";

$dbconnect = mysqli_connect($hote, $username, $password, $db_name, $port);

echo $_POST['nom']."<br>";
echo $_POST['type']."<br>";
$query = "insert into banque (id_banque, nom, type, id_reunion) values ('BAN001','".$_POST["nom"]."', '".$_POST["type"]."', '".$_POST["reunion"]."' )";
echo $query;
mysqli_query($dbconnect,$query);
header("Location:listebanque.php");
?>