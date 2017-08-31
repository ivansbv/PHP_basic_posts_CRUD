<?php
include "core/connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<nav class="navbar navbar-default">
  		<div class="container-fluid">
  			<div class="navbar-header">
		      <a class="navbar-brand" href="#">PHP CRUD</a>
		    </div>
	<ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="?page=all_posts.php">All Posts</a></li>
      <li><a href="?page=create.php">Create Post</a></li>
    </ul>
    	</div>
    </nav>
	<div class="col-md-8 col-md-offset-2">
		<?php
			
			if(!isset($_GET['page'])){
			
				include "views/all_posts.php";
			}else{
				include "views/".$_GET['page'];
			}
			
		?>
	</div>
</div>
</body>
</html>