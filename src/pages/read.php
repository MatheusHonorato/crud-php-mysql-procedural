<?php

require_once 'src/actions/read.php';
require_once 'partials/header.php';

?>
<div class="container">
	<div class="row">
		<a href=""><h1>Users - Read</h1></a>
		<a class="btn btn-success text-white" href="src/pages/create.php">New</a>
	</div>

	<table class="table-users">
		<tr>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>PHONE</th>
		</tr>
		<?php while($row = mysqli_fetch_array($result)): ?>
		<tr>
			<td class="user-name"><?=htmlspecialchars($row['name']);?></td>
			<td class="user-email"><?=htmlspecialchars($row['email']);?></td>
			<td class="user-phone"><?=htmlspecialchars($row['phone']);?></td>
			<td>
				<a class="btn btn-primary text-white" href="src/pages/update.php?id=<?=$row['id'];?>&name=<?=htmlspecialchars($row['name']);?>&email=<?=htmlspecialchars($row['email']);?>&phone=<?=htmlspecialchars($row['phone']);?>">Edit</a>
			</td>
			<td>
				<a class="btn btn-danger text-white" href="src/actions/delete.php?id=<?=$row['id'];?>" onclick="return confirm('Tem certeza que deseja excluir?')">Remove</a>
			</td>
		</tr>
		<?php endwhile; ?>
	</table>
</div>
<?php require_once 'partials/footer.php'; ?>

