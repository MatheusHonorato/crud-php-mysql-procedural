<?php

function getUser($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);
    $user;

    $sql = "SELECT * FROM users  WHERE id = ?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo 'SQL error';
    } else {
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        $user = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
    }
    mysqli_close($conn);
    return $user;
}

function getUsers($conn) {
    $users = [];
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    $result_check = mysqli_num_rows($result);
    
    if($result_check > 0) {
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    mysqli_close($conn);
    return $users;
}
