<?php

require_once '../../config.php';

$id = filter_input(INPUT_GET, 'id');

if($id) {
    $sql = $pdo->prepare("DELETE FROM users WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
}

header("Location: ../../index.php");