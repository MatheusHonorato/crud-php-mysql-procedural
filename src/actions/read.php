<?php

require_once 'config.php';

$users = [];
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

$result_check = mysqli_num_rows($result);

if($result_check > 0) {
    $users = mysqli_fetch_array($result, MYSQLI_BOTH);
}

$conn->close();

