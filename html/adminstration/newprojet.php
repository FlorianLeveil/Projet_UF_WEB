<?php
require('./../request.php');

$img = $_POST['new_img'];
$titre = $_POST['new_titre'];
$texte = $_POST['new_texte'];


$req = $db->prepare('INSERT INTO projet (proj_img, proj_titre, proj_txt) VALUES(:proj_img, :proj_titre, :proj_txt)');
$req->execute(array(
    "proj_img" => $img,
    "proj_titre" => $titre,
    "proj_txt" => $texte,
));

    header('Location: https://florian.cyber-stuff.net/adminstration/projet.php');
    exit();
?>
