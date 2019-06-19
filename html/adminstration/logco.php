<?php

define("DATABASE_HOST", "stevenmehackpaspls");
define("DATABASE_NAME", "stevenmehackpaspls");
define("DATABASE_USER", "stevenmehackpaspls");
define("DATABASE_PASSWORD", "stevenmehackpaspls");
    

$dbl = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);

