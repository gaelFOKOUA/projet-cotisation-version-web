<?php

$hote = "localhost";
$username = "root";
$password = "";
$db_name = "sgt";
$port = "3306";

$dbconnect = mysqli_connect($hote, $username, $password, $db_name, $port);

echo $_POST['montants']."<br>";
echo $_POST['date_pret']."<br>";
echo $_POST['date_rembour']."<br>";
$query = "insert into banque (id_pret, montants, date_pret,date_rembour, id_reunion,id_membre,id_taux,id_banque) values ('PRET001','REU001','MEM001','BAN001','TAU001','".$_POST["montants"]."', '".$_POST["date_pret"]."', '".$_POST["date_rembour"]."', '".$_POST["reunion"]."' , '".$_POST["membre"]."' , '".$_POST["banque"]."' , '".$_POST["taux"]."' )";
echo $query;
mysqli_query($dbconnect,$query);
header("Location:listepret.php");
?>