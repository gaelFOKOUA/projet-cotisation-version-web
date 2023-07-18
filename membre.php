<?php

$hote = "localhost";
$username = "root";
$password = "";
$db_name = "sgt";
$port = "3306";

$date = date("Y-m-d");

$dbconnect = mysqli_connect($hote, $username, $password, $db_name, $port);

echo $_POST['nom']."<br>";
echo $_POST['prenom']."<br>";
echo $_POST['fonction']."<br>";
echo $_POST['adresse']."<br>";
echo $_POST['numero_CNI']."<br>";
echo $_POST['genre']."<br>";
echo $_POST['email']."<br>";
echo $_POST['password']."<br>";

$query = "insert into membres ( id_reunion, nom, prenom, fonction, adresse, numero_CNI, genre, email, password, date_jour ) values (".$_POST["reunion"].",'".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["fonction"]."','".$_POST["adresse"]."',".$_POST["numero_CNI"].",'".$_POST["genre"]."','".$_POST["email"]."','".$_POST["password"]."','".$date."' )";
echo $query;
mysqli_query($dbconnect,$query);
header("Location:listesmembre.php");
?> 