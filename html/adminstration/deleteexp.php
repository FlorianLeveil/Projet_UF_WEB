<?php
    require('./../request.php');

    $delete_exp = $_POST['exp_id'];

    $req = $db->prepare('DELETE FROM experience WHERE exp_id=:exp_id');
    $req->execute(array(
        "exp_id" => $delete_exp
    ));

    header('Location: https://florian.cyber-stuff.net/adminstration/experience.php');
    exit();

?>
