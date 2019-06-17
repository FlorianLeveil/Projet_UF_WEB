<?php
    require('./../request.php');

    $titre = $_POST['new_titre'];
    $desci = $_POST['new_img'];
    $dure = $_POST['new_texte'];
    $id_comp = $_POST['comp_id'];

    $req = $db->prepare('UPDATE competence SET comp_titre = :comp_titre,
     comp_img = :comp_img,
     comp_txt = :comp_txt
     WHERE comp_id=:comp_id');

    $req->execute(array('comp_titre' => $titre,
    'comp_img' => $desci,
    'comp_txt' => $dure,
    'comp_id' => $id_comp));

    print_r($req->errorInfo());


    header('Location: https://florian.cyber-stuff.net/adminstration/competence.php');
    exit();
