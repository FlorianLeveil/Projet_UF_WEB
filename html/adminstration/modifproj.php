<?php
    require('./../request.php');

    $titre = $_POST['new_titre'];
    $desci = $_POST['new_img'];
    $dure = $_POST['new_texte'];
    $proj_comp = $_POST['proj_id'];

    $req = $db->prepare('UPDATE projet SET proj_titre = :proj_titre,
     proj_img = :proj_img,
     proj_txt = :proj_txt
     WHERE proj_id=:proj_id');

    $req->execute(array('proj_titre' => $titre,
    'proj_img' => $desci,
    'proj_txt' => $dure,
    'proj_id' => $proj_comp));

    print_r($req->errorInfo());


    header('Location: https://florian.cyber-stuff.net/adminstration/projet.php');
    exit();
