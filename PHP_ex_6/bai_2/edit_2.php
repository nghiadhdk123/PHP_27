<?php 
	
	$id = $_GET['id'];

	require_once('conextion.php');

	$query = "SELECT * FROM categories WHERE id = " .$id;

	$result = $conn->query($query);

	$cate = $result->fetch_assoc();
 ?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">UPDATE USERS</h3>
    <hr>
        <form action="edit_1.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $cate['id']; ?> ">
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $cate['name']; ?> ">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="decsrpition" value="<?= $cate['description']; ?>">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail" value="<?= $cate['thumbnail']; ?>">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?= $cate['slug']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>