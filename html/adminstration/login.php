<?php

session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'florian';
    $db_password = 'lol123';
    $db_name     = 'ouijemeco';
    $db_host     = 'localhost';
    $dbl = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($dbl,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($dbl,htmlspecialchars($_POST['password']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM logina where 
              username = '".$username."' and passworda = '".$password."' ";
        $exec_requete = mysqli_query($dbl,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: ./admin.php');
        }
        else
        {
           header('Location: ./connect.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: ./connect.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: ./connect.php');
}
?>
