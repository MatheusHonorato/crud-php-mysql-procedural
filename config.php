<?php

// db
$db_name = 'crud';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);

// host
$host = 'http://localhost/crud-php-mysql-procedural';