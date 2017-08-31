<?php
	require "connect.php";
	
	$id = $_GET['id'];
	
	$conn = Connect::getConnection();

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$update = $conn->prepare("DELETE FROM posts WHERE id=$id");

	$update->execute();
	
	header('Location: ../index.php?page=all_posts.php');
?>