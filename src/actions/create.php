<?php

require_once '../../config.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn,  $_POST['email']);
$phone = mysqli_real_escape_string($conn,  $_POST['phone']);

if($name && $email && $phone) {
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $result_check = mysqli_num_rows($result);

    if($result_check === 0) {
        $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
        mysqli_query($conn, $sql);
        $conn->close();

        header("Location: ../../index.php");
        exit;
    } else {
        $conn->close();

        header("Location: ../../src/pages/create.php");
        exit;
    }
} else {
    $conn->close();

    header('location: ../../index.php');
}
