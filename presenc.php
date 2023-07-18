<?php

$hote = "localhost";
$username = "root";
$password = "";
$db_name = "sgt";
$port = "3306";

$date = date("Y-m-d");

$dbconnect = mysqli_connect($hote, $username, $password, $db_name, $port);

echo $_POST['montants']."<br>";
echo $_POST['etat']."<br>";
$query = "insert into presence (  id_reunion, montants, etat, date_presence, id_membre ) values (".$_POST["reunion"].",".$_POST["montants"].",'".$_POST["etat"]."', '".$date."', ".$_POST["membres"]." )";
echo $query;
mysqli_query($dbconnect,$query);
header("Location:listepresence.php");
?>