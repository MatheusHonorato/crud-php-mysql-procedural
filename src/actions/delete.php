<?php

require_once '../../config.php';

$id = mysqli_real_escape_string($conn, $_GET['id']);

if($id) {
    $sql = "DELETE FROM users WHERE id = $id";
    mysqli_query($conn, $sql);
}

$conn->close();

header('Location: ../../index.php');