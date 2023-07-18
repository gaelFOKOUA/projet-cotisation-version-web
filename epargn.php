<?php

$hote = "localhost";
$username = "root";
$password = "";
$db_name = "sgt";
$port = "3306";

$date = date("Y-m-d");

$dbconnect = mysqli_connect($hote, $username, $password, $db_name, $port);

echo $_POST['montants']."<br>";
echo $date."<br>";
$query = "insert into epargne (  id_reunion, id_banque, montants, date_epargne, id_membre ) values ('".$_POST["reunion"]."','".$_POST["banque"]."',".$_POST["montants"].", ".$date.", '".$_POST["membres"]."' )";
echo $query;
mysqli_query($dbconnect,$query);
header("Location:listepargne.php");
?>