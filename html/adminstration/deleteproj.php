<?php
    require('./../request.php');

    $delete_proj = $_POST['proj_id'];

    $req = $db->prepare('DELETE FROM projet WHERE proj_id=:proj_id');
    $req->execute(array(
        "proj_id" => $delete_proj
    ));

    header('Location: https://florian.cyber-stuff.net/adminstration/projet.php');
    exit();

?>
