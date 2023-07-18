<?php

$hote = "localhost";
$username = "root";
$password = "";
$db_name = "sgt";
$port = "3306";

$dbconnect = mysqli_connect($hote, $username, $password, $db_name, $port);



 echo $_POST['name']."<br>";
echo $_POST['siege']."<br>";
echo $_POST['Datecreation']."<br>";
echo $_POST['montant_presence']."<br>";
echo $_POST['montant_cotisation']."<br>";
echo $_POST['pic']."<br>";

$nomReunion = $_POST["name"];



if (mysqli_connect($hote, $username, $password, $db_name, $port)) {
    echo "Connecté";




    $query = "insert into réunion (nom, date_creation, siege, montants_cotisation, montants_presence, bananiiere_r) values ('".$nomReunion."', ".$_POST["Datecreation"].", '".$_POST["siege"]."', ".$_POST["montant_cotisation"].", ".$_POST["montant_presence"].",'".$_POST["pic"]."');";

    echo $query;

    if (mysqli_query($dbconnect, $query)) {
        echo "Reunion crée avec succès";

        header("Location:listereunion.php");
    } else {
        echo "Erreur de creation de la reunion";
    }
    
} else {
    echo "Echoué";
    echo mysqli_error(mysqli_connect($hote, $username, $password, $db_name, $port));
}

?>