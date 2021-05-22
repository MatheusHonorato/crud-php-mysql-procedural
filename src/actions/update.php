<?php

require_once '../../config.php';

function update($conn, $id, $name, $email, $phone) {
	$id = mysqli_real_escape_string($conn, $id);
	$name = mysqli_real_escape_string($conn, $name);
	$email = mysqli_real_escape_string($conn, $email);
	$phone = mysqli_real_escape_string($conn, $phone);

	if($id && $name && $email && $phone) {
		$sql = "UPDATE users SET name = ?, email = ?, phone = ? WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'sssi', $name, $email, $phone, $id);
		mysqli_stmt_execute($stmt);

		mysqli_close($conn);
		header('Location: ../../index.php');
	}
	mysqli_close($conn);
	header('Location: ../../pages/create.php');
}

update($conn, $_POST['id'], $_POST['name'], $_POST['email'], $_POST['phone']);