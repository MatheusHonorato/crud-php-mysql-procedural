<?php

require_once '../../config.php';

function verifyEmailUser($conn, $email) {
	$sql = "SELECT * FROM users WHERE email = ?";
	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql))
		exit('SQL error');

	mysqli_stmt_bind_param($stmt, 's', $email);
	mysqli_stmt_execute($stmt);

	$result = mysqli_stmt_get_result($stmt);

	return mysqli_num_rows($result);
}

function save($conn, $name, $email, $phone) {
	$name = mysqli_real_escape_string($conn, $name);
	$email = mysqli_real_escape_string($conn,  $email);
	$phone = mysqli_real_escape_string($conn,  $phone);

	if($name && $email && $phone) {
		$result_check = verifyEmailUser($conn, $email);

		if($result_check === 0) {
			$sql = "INSERT INTO users (name, email, phone) VALUES (?, ?, ?)";
			$stmt = mysqli_stmt_init($conn);

			if(!mysqli_stmt_prepare($stmt, $sql)) 
				exit('SQL error');
			
			mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $phone);
			mysqli_stmt_execute($stmt);
			mysqli_close($conn);

			header('Location: ../../index.php');
		}
		mysqli_close($conn);

		header('Location: ../../src/pages/create.php');
	} 
	mysqli_close($conn);

	header('location: ../../index.php');
}

save($conn, $_POST['name'], $_POST['email'], $_POST['phone']);
