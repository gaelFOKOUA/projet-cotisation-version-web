<?php

$hote = "localhost";
$username = "root";
$password = "";
$db_name = "sgt";
$port = "3306";

$dbconnect = mysqli_connect($hote, $username, $password, $db_name, $port);

echo $_POST['nom']."<br>";
echo $_POST['date_evenement']."<br>";
echo $_POST['type_evenement']."<br>";
echo $_POST['montants']."<br>";
$query = "insert into evenements (  id_reunion, nom, date_evenement, type_evenement, montants, id_membre ) values (".$_POST["reunion"].",'".$_POST["nom"]."',".$_POST["date_evenement"].",'".$_POST["type_evenement"]."',".$_POST["montants"].",".$_POST["membres"]." )";
echo $query;

mysqli_query($dbconnect,$query);
header("Location:listevenement.php");

?>