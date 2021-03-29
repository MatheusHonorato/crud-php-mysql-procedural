<?php

require '../../config.php';
include_once 'partials/header.php';
include_once 'partials/message.php';

?>
<div class="container">
	<div class="row">
        <a href="../../index.php"><h1>Users - Edit</h1></a>
        <a class="btn btn-success text-white" href="../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../actions/update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo filter_input(INPUT_GET, 'id'); ?>" required/>
                <label>Name</label>
                <input type="text" name="name" value="<?php echo filter_input(INPUT_GET, 'name'); ?>" required/>
                <label>E-mail</label>
                <input type="email" name="email" value="<?php echo filter_input(INPUT_GET, 'email'); ?>" required/>

                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php include_once 'partials/footer.php'; ?>

