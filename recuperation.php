<?php
$hote = "localhost";
$username = "root";
$password = "";
$db_name = "sgt";
$port = "3306";

session_start();
//session_destroy();

$dbconnect = mysqli_connect($hote, $username, $password, $db_name, $port);

echo $_POST['Email'];
echo $_POST['Fonction'];
echo $_POST['password'];
$query = "select * from membres where email = '" .$_POST['Email']."' and fonction = '" .$_POST['Fonction']."' and password = '".$_POST['password']."'"  ;
echo $query;



$resultat = mysqli_query($dbconnect,$query); 

$nbLigne = $resultat->num_rows;



if ($nbLigne == 1) {

    while($row = $resultat->fetch_assoc()) {
        $_SESSION["nom"] = $row["nom"];
        $_SESSION["fonction"] = $row["fonction"];
        $_SESSION["id_reunion"] = $row["id_reunion"];
       
    }


    header("location:dashboard.php");

    
   
} else {
    header("location:sign-in.php");
}

if(isset($_GET['OUT']) && $_GET['OUT']=='true')
{
    $_SESSION["nom"] = $row["nom"];
    $_SESSION["fonction"] = $row["fonction"];
    $_SESSION["id_reunion"] = $row["id_reunion"];
header('Location: index.php');
exit();
}







?>