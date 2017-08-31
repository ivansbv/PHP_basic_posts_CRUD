<h1 style='text-align: center;'>Create Post</h1>
<form method="post" action="core/store.php" enctype="multipart/form-data">
	<div class="form-group">
		<label>Title:</label>
		<input type="text" name="title" class="form-control">
	</div>
	<div class="form-group">
		<label>Content:</label>
		<textarea name="content" rows="10" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label>Photo:</label>
		<input type="file" name="photo" class="custom-file-input">
	</div><br>
	<input type="submit" name="submit" value="Create Post"  class="bnt bnt-default">
</form>




