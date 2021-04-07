<?php

require_once '../../config.php';

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone');

if($id && $name && $email) {
    $sql = $pdo->prepare("UPDATE users SET name = :name, email = :email, phone = :phone WHERE id = :id");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':phone', $phone);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: ../../index.php");
} else {
    header("Location: ../../pages/create.php");
}