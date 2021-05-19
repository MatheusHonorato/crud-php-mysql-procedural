<?php

require_once '../../config.php';
require_once 'partials/header.php';

?>
<div class="container">
	<div class="row">
        <a href="../../index.php"><h1>Users - Edit</h1></a>
        <a class="btn btn-success text-white" href="../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../actions/update.php" method="POST">
                <input type="hidden" name="id" value="<?= htmlspecialchars($_GET['id']); ?>" required/>
                <label>Name</label>
                <input type="text" name="name" value="<?= htmlspecialchars($_GET['name']); ?>" required/>
                <label>E-mail</label>
                <input type="email" name="email" value="<?= htmlspecialchars($_GET['email']); ?>" required/>
                <label>Phone</label>
                <input type="text" name="phone" value="<?= htmlspecialchars($_GET['phone']); ?>" required/>

                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once 'partials/footer.php'; ?>

