<?php

require_once '../../../config.php';
require_once '../../actions/user.php';
require_once '../partials/header.php';

if (isset($_POST["id"], $_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]))
    updateUserAction($conn, $_POST["id"], $_POST["name"], $_POST["email"], $_POST["phone"]);

$user = findUserAction($conn, $_GET['id']);

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>Users - Edit</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/user/edit.php" method="POST">
                <input type="hidden" name="id" value="<?=$user['id']?>" required/>
                <label>Name</label>
                <input type="text" name="name" value="<?=htmlspecialchars($user['name'])?>" required/>
                <label>E-mail</label>
                <input type="email" name="email" value="<?=htmlspecialchars($user['email'])?>" required/>
                <label>Phone</label>
                <input type="text" name="phone" value="<?=htmlspecialchars($user['phone'])?>" required/>

                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>

