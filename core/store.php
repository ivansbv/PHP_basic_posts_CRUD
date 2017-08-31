<?php
	require "connect.php";

	$title = $_POST['title'];
	$content = addslashes($_POST['content']);
	$photo = $_FILES['photo'];

	$photo_name = $photo['name'];

	$photo_path = "../images/".$photo_name;

	move_uploaded_file($photo['tmp_name'], $photo_path);

	$conn = Connect::getConnection();

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$insert = $conn->prepare("INSERT INTO posts (title,content,photo) VALUES('$title','$content','$photo_name')");

	$insert->execute();
	
	header('Location: ../index.php?page=all_posts.php');
?>