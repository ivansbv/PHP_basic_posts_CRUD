<?php

$conn = Connect::getConnection();

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $conn->prepare("SELECT * FROM posts");

$sql->execute();

echo "<h1 style='text-align: center;'>All Posts</h1>";

foreach($sql as $row){ ?>
		<div class="panel panel-default">
		<div class='panel-heading' style='text-align: center;'>
			<h3><?=$row['title']?></h3>
		</div>
		<div class='panel-body'>
			<img src="images/<?=$row['photo']?>" align='right'>
			<?=$row['content']?>
		</div>
		<div class='panel-footer'>
			<small>Created: <?=$row['created_at']?></small>
			<a href="?page=read.php&id=<?=$row['id']?>" class="btn btn-primary">READ-UPDATE-DELETE</a>
		</div>
	</div>
<?php } ?>