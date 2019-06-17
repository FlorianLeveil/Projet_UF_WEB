<?php 
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "monsite");
define("DATABASE_USER", "florian");
define("DATABASE_PASSWORD", "lol123");
    

$db = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);


$req = $db->prepare('SELECT * FROM presentation');
$req->execute();
$data = $req->fetch();

$req = $db->prepare('SELECT * FROM competence');
$req->execute();
$data_comp = $req->fetchAll();

$req = $db->prepare('SELECT * FROM projet');
$req->execute();
$data_projet = $req->fetchAll();

$req = $db->prepare('SELECT * FROM experience');
$req->execute();
$data_exp = $req->fetchAll();
