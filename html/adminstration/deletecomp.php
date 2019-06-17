<?php
    require('./../request.php');

    $delete_comp = $_POST['comp_id'];

    $req = $db->prepare('DELETE FROM competence WHERE comp_id=:comp_id');
    $req->execute(array(
        "comp_id" => $delete_comp
    ));

    header('Location: https://florian.cyber-stuff.net/adminstration/competence.php');
    exit();

?>
