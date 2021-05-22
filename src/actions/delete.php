<?php

require_once '../../config.php';

$id = mysqli_real_escape_string($conn, $_GET['id']);

if($id) {
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo 'SQL error';
    } else {
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
    }
    mysqli_close($conn);
}
header('Location: ../../index.php');
exit;
