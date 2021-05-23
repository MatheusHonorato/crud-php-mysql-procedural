<?php

require_once '../../database/user.php';

function findUserAction($conn, $id) {
	return findUserDb($conn, $id);
}

function createUserAction($conn, $name, $email, $phone) {
	createUserDb($conn, $name, $email, $phone);
	return header('location: ../../../index.php');
}

function readUserAction($conn) {
	return readUserDb($conn);
}

function updateUserAction($conn, $id, $name, $email, $phone) {
	updateUserDb($conn, $id, $name, $email, $phone);
	return header('Location: ../../../index.php');
}

function deleteUserAction($conn, $id) {
	deleteUserDb($conn, $id);
	return header('Location: ../../../index.php');
}
