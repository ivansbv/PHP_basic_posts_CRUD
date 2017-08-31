<?php
	$id = $_GET['id'];

	$conn = Connect::getConnection();

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = $conn->prepare("SELECT * FROM posts WHERE id=$id");

	$sql->execute();

	$post = $sql->fetch(PDO::FETCH_ASSOC);
		
	?>
<h1 style='text-align: center;'>Update Post</h1>
<form method="post" action="core/update_post.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?=$post['id']?>">
	<div class="form-group">
		<label>Title:</label>
		<input type="text" name="title" value="<?=$post['title']?>" class="form-control">
	</div>
	<div class="form-group">
		<label>Content:</label>
		<textarea name="content" rows="10" class="form-control"><?=$post['content']?></textarea>
	</div>
	<div class="form-group">
		<label>Photo:</label>
		<img src="images/<?=$post['photo']?>" style="width: 128px; height: 128px">
		<input type="file" name="photo" class="custom-file-input">
	</div><br>
	<input type="submit" name="submit" value="Update Post"  class="bnt bnt-default">
</form>



