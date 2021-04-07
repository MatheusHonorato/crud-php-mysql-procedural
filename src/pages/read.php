<?php

require_once 'src/actions/read.php';
require_once 'partials/header.php';
require_once 'partials/message.php';

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
			<th>PHONE</th>
		</tr>
		<?php foreach($users  as $user): ?>
		<tr>
			<td class="user-name"><?=htmlspecialchars($user['name']);?></td>
			<td class="user-email"><?=htmlspecialchars($user['email']);?></td>
			<td class="user-phone"><?=htmlspecialchars($user['phone']);?></td>
			<td>
				<a class="btn btn-primary text-white" href="src/pages/edit.php?id=<?=$user['id'];?>&name=<?=htmlspecialchars($user['name']);?>&email=<?=htmlspecialchars($user['email']);?>&phone=<?=htmlspecialchars($user['phone']);?>">Edit</a>
			</td>
			<td>
				<a class="btn btn-danger text-white" href="src/actions/delete.php?id=<?=$user['id'];?>" onclick="return confirm('Tem certeza que deseja excluir?')">Remove</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
<?php require_once 'partials/footer.php'; ?>

