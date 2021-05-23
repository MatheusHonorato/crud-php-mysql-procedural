<?php

require_once '../../database/user.php';

function findUserAction($conn, $id) {
	return find($conn, $id);
}

function createUserAction($conn, $name, $email, $phone) {
	create($conn, $name, $email, $phone);
	return header('location: ../../../index.php');
}

function readUserAction($conn) {
	return read($conn);
}

function updateUserAction($conn, $id, $name, $email, $phone) {
	update($conn, $id, $name, $email, $phone);
	return header('Location: ../../../index.php');
}

function deleteUserAction($conn, $id) {
	delete($conn, $id);
	return header('Location: ../../../index.php');
}
