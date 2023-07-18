<?php

$hote = "localhost";
$username = "root";
$password = "";
$db_name = "sgt";
$port = "3306";



$dbconnect = mysqli_connect($hote, $username, $password, $db_name, $port);

echo $_POST['montants']."<br>";
$query = "insert into cotisevenement(  id_reunion, montants, id_evenement, id_membre ) values ('".$_POST["reunion"]."',".$_POST["montants"].",'".$_POST["evenement"]."', '".$_POST["membres"]."' )";
echo $query;
mysqli_query($dbconnect,$query);
header("Location:listcotievenement.php");
?>