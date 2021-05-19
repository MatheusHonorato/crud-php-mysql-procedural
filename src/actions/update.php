<?php

require_once '../../config.php';

$id = mysqli_real_escape_string($conn, $_POST['id']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);

if($id && $name && $email) {
    $sql = "UPDATE users SET name = '$name', email = '$email', phone = '$phone' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $conn->close();

    header('Location: ../../index.php');
} else {
    $conn->close();

    header('Location: ../../pages/create.php');
}