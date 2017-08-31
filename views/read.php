
		<?php
		$id = $_GET['id'];

		$conn = Connect::getConnection();

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare("SELECT * FROM posts WHERE id=$id");

		$sql->execute();

		$post = $sql->fetch(PDO::FETCH_ASSOC);
		
		?>
		<div class="panel panel-default">
			<div class='panel-heading' style='text-align: center;'>
				<h3><?=$post['title']?></h3>
			</div>
			<div class='panel-body'>
				<img src="images/<?=$post['photo']?>" align='right'>
				<?=$post['content']?>
			</div>
			<div class='panel-footer'>
				<small>Created: <?=$post['created_at']?></small>
				<a href="?page=all_posts.php" class="btn btn-primary">BACK</a>
				<a href="?page=update.php&id=<?=$post['id']?>" class="btn btn-primary">UPDATE</a>
				<a href="?page=delete.php&id=<?=$post['id']?>" class="btn btn-primary">DELETE</a>
			</div>
		</div>
		
