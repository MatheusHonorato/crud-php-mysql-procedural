<?php

require_once '../../config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone');

if($name && $email) {
    $sql = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO users (name, email, phone) VALUES (:name, :email, :phone)");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':phone', $phone);
        $sql->execute();

        header("Location: ../../index.php");
        exit;
    } else {
        header("Location: ../../src/pages/create.php");
        exit;
    }
} else {
    header('location: ../../index.php');
}