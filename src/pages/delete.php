<?php

require_once '../../config.php';
require_once '../actions/user.php';

deleteUserAction($conn, $_POST['id']);
