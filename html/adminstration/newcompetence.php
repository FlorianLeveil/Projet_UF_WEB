<?php
require('./../request.php');

$img = $_POST['new_img'];
$titre = $_POST['new_titre'];
$texte = $_POST['new_texte'];


$req = $db->prepare('INSERT INTO competence (comp_img, comp_titre, comp_txt) VALUES(:comp_img, :comp_titre, :comp_txt)');
$req->execute(array(
    "comp_img" => $img,
    "comp_titre" => $titre,
    "comp_txt" => $texte,
));

    header('Location: https://florian.cyber-stuff.net/adminstration/competence.php');
    exit();
?>
