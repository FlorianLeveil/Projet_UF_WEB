<?php

$filename = $_FILES['file']['name'];

$goto = "../img/" . $filename;
$uplaodOK= 1;
$imageFileType = pathinfo($goto, PATHINFO_EXTENSION);

$valid_ext = array("jpg", "jpeg", "png");
if (!in_array(strtolower($imageFileType), $valid_ext)) {
    $uplaodOK = 0;
}

if ($uplaodOK == 0) {
    echo 0;
} else {
    if (move_uploaded_file($_FILES['file']['tmp_name'], $goto)) {
        echo $goto;
    } else {
        echo 0;
    }
}
    header('Location: https://florian.cyber-stuff.net/adminstration/presentation.php');
    exit();

?>
