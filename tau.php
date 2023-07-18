<?php

$hote = "localhost";
$username = "root";
$password = "";
$db_name = "sgt";
$port = "3306";

$dbconnect = mysqli_connect($hote, $username, $password, $db_name, $port);

echo $_POST['pourcentage']."<br>";
echo $_POST['duree']."<br>";
$query = "insert into taux (id_banque, pourcentage, duree) values (".$_POST["banque"].", ".$_POST["pourcentage"].", ".$_POST["duree"].")";
mysqli_query($dbconnect,$query);
echo $query; 
?>