<?php
	require "connect.php";
	
	$id = $_POST['id'];
	$title = addslashes($_POST['title']);
	$content = addslashes($_POST['content']);
	$photo = $_FILES['photo'];

	$photo_name = $photo['name'];

	$photo_path = "../images/".$photo_name;

	move_uploaded_file($photo['tmp_name'], $photo_path);

	$conn = Connect::getConnection();

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$update = $conn->prepare("UPDATE posts SET title='$title',content='$content',photo='$photo_name' WHERE id=$id");

	$update->execute();
	
	header('Location: ../index.php?page=read.php&id='.$id.'');
?>