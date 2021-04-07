<?php

require_once '../../config.php';
require_once 'partials/header.php';
require_once 'partials/message.php';

?>
<div class="container">
	<div class="row">
        <a href="../../index.php"><h1>Users - Create</h1></a>
        <a class="btn btn-success text-white" href="../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../actions/save.php" method="POST">
                <label>Name</label>
                <input type="text" name="name" required/>
                <label>E-mail</label>
                <input type="email" name="email" required/>
                <label>Phone</label>
                <input type="text" name="phone" required/>

                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once 'partials/footer.php'; ?>

