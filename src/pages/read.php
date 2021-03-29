<?php

require 'src/actions/read.php';
include_once 'partials/header.php';
include_once 'partials/message.php';

?>
<div class="container">
	<div class="row">
		<a href=""><h1>Users - List</h1></a>
		<a class="btn btn-success text-white" href="src/pages/create.php">New</a>
	</div>

	<table class="table-users">
		<tr>
			<th>NAME</th>
			<th>EMAIL</th>
		</tr>
		<?php foreach($users  as $user): ?>
		<tr>
			<td><?=$user['name'];?></td>
			<td><?=$user['email'];?></td>
			<td>
				<a class="btn btn-primary text-white" href="src/pages/edit.php?id=<?=$user['id'];?>&name=<?=$user['name'];?>&email=<?=$user['email'];?>">Edit</a>
				<a class="btn btn-danger text-white" href="src/actions/delete.php?id=<?=$user['id'];?>" onclick="return confirm('Tem certeza que deseja excluir?')">Remove</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
<?php include_once 'partials/footer.php'; ?>

