<?php

require_once 'config.php';

$users = [];
$sql = $pdo->query("SELECT * FROM users");

if($sql->rowCount() > 0) {
    $users = $sql->fetchAll(PDO::FETCH_ASSOC);
}