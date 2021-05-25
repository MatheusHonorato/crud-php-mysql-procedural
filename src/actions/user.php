<?php

require_once '../../database/user.php';

function findUserAction($conn, $id) {
	return findUserDb($conn, $id);
}

function readUserAction($conn) {
	return readUserDb($conn);
}

function createUserAction($conn, $name, $email, $phone) {
	$createUserDb = createUserDb($conn, $name, $email, $phone);
	$message = $createUserDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ./read.php?message=$message");
}

function updateUserAction($conn, $id, $name, $email, $phone) {
	$updateUserDb = updateUserDb($conn, $id, $name, $email, $phone);
	$message = $updateUserDb == 1 ? 'success-update' : 'error-update';
	return header("Location: ./read.php?message=$message");
}

function deleteUserAction($conn, $id) {
	$deleteUserDb = deleteUserDb($conn, $id);
	$message = $deleteUserDb == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./read.php?message=$message");
}
