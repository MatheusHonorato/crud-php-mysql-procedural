<?php

require_once '../../config.php';

function save($conn) {
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn,  $_POST['email']);
	$phone = mysqli_real_escape_string($conn,  $_POST['phone']);

	if($name && $email && $phone) {
		$sql = "SELECT * FROM users WHERE email = ?";
		$stmt = mysqli_stmt_init($conn);
		$result_check = 0;
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			echo 'SQL error';
		} else {
			mysqli_stmt_bind_param($stmt, 's', $email);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			$result_check = mysqli_num_rows($result);
		}

		if($result_check === 0) {
			$sql = "INSERT INTO users (name, email, phone) VALUES (?, ?, ?)";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)) {
				echo 'SQL error';
			} else {
				mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $phone);
				mysqli_stmt_execute($stmt);
			}
			mysqli_close($conn);
			header('Location: ../../index.php');
			exit;
		} else {
			mysqli_close($conn);
			header('Location: ../../src/pages/create.php');
			exit;
		}
	} else {
		mysqli_close($conn);
		header('location: ../../index.php');
		exit;
	}
}

save($conn);
