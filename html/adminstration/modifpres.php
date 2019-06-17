<?php
    require('./../request.php');

    $desci = $_POST['new_img'];
    $dure = $_POST['new_texte'];
    $id_pres = $_POST['pres_id'];

    $req = $db->prepare('UPDATE presentation SET pres_img = :pres_img,
     pres_txt = :pres_txt
     WHERE pres_id=:pres_id');

    $req->execute(array('pres_img' => $desci,
    'pres_txt' => $dure,
    'pres_id' => $id_pres));

    print_r($req->errorInfo());


    header('Location: https://florian.cyber-stuff.net/adminstration/presentation.php');
    exit();
