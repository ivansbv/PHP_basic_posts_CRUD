<?php
	
$id = $_GET['id'];

$conn = $conn = Connect::getConnection();

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $conn->prepare("SELECT * FROM posts WHERE id=$id");

$sql->execute();

$post = $sql->fetch(PDO::FETCH_ASSOC);
?>

<form method="post" action="core/destroy.php">
	
	<label class="bg-danger"><h3>Are you sure to delete this "<?=$post['title']?>" post?</h3></label>
	<div style='text-align: center;'>
		<a href="core/destroy.php?id=<?=$post['id']?>" class="btn btn-danger btn-lg">YES</a>
		<a href="?page=read.php&id=<?=$post['id']?>" class="btn btn-primary btn-lg">NO</a>
	</div>
</form>