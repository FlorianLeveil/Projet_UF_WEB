<?php
    require('./../request.php');

    $titre = $_POST['new_titre'];
    $desci = $_POST['new_desc'];
    $dure = $_POST['new_dure'];
    $appr = $_POST['new_appr'];


    $req = $db->prepare('INSERT INTO experience (exp_titre, exp_deti, exp_dure, exp_texte) VALUES(:exp_titre, :exp_deti, :exp_dure, :exp_texte)');
    $req->execute(array(
        "exp_titre" => $titre,
        "exp_deti" => $desci,
        "exp_dure" => $dure,
        "exp_texte" => $appr,
    ));

    header('Location: https://florian.cyber-stuff.net/adminstration/experience.php');
    exit();
?>
