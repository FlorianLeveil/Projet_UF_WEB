<?php
    require('./../request.php');

    $titre = $_POST['new_titre'];
    $desci = $_POST['new_deti'];
    $dure = $_POST['new_dure'];
    $appr = $_POST['new_texte'];
    $id_exp = $_POST['exp_id'];

    $req = $db->prepare('UPDATE experience SET exp_titre = :exp_titre,
     exp_deti = :exp_deti,
     exp_dure = :exp_dure,
     exp_texte = :exp_texte
     WHERE exp_id=:exp_id');

    $req->execute(array('exp_titre' => $titre,
    'exp_deti' => $desci,
    'exp_dure' => $dure,
    'exp_texte' => $appr,
    'exp_id' => $id_exp));

    print_r($req->errorInfo());


    header('Location: https://florian.cyber-stuff.net/adminstration/experience.php');
    exit();
