<?php

define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "ouijemeco");
define("DATABASE_USER", "florian");
define("DATABASE_PASSWORD", "lol123");
    

$dbl = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);

