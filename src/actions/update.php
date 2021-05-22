<?php

require_once '../../config.php';

function update($conn) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    if($id && $name && $email && $phone) {
        $sql = "UPDATE users SET name = ?, email = ?, phone = ? WHERE id = ?";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo 'SQL error';
        } else {
            mysqli_stmt_bind_param($stmt, 'sssi', $name, $email, $phone, $id);
            mysqli_stmt_execute($stmt);
        }
        mysqli_close($conn);
        header('Location: ../../index.php');
        exit;
    } else {
        mysqli_close($conn);
        header('Location: ../../pages/create.php');
        exit;
    }
}

update($conn);