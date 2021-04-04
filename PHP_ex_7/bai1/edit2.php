<?php 
	require_once('conextion.php');

	$id = $_GET['id'];

	echo($id);

	$query = "SELECT post.id1,post.title,post.description1,post.content,post.users_id,post.cate_id,users.name1,categories.id,categories.name FROM post INNER JOIN users ON post.users_id = users.id INNER JOIN categories ON post.cate_id = categories.id WHERE post.id1 = " .$id;

	$result = $conn->query($query);

	$post = $result->fetch_assoc();

	$query = "SELECT users.id,users.name1 FROM users INNER JOIN post ON users.id = post.users_id WHERE users.id = post.users_id";

	$result = $conn->query($query);

	$users = array();

	while($row = $result->fetch_assoc())
	{
		$users[] = $row;
	}

	$query = "SELECT categories.id,categories.name FROM categories INNER JOIN post ON categories.id = post.cate_id WHERE categories.id = post.cate_id";

	$result = $conn->query($query);

	$cate = array();

	while($row = $result->fetch_assoc())
	{
		$cate[] = $row;
	}

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
    <h3 align="center">UPDATE POST</h3>
    <hr>
        <form action="edit1.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="hidden" class="form-control" id="" placeholder="" name="id1" value="<?= $post['id1']; ?> ">
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $post['title']; ?> ">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description1" value="<?= $post['description1']; ?>">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content" value="<?= $post['content']; ?>">
            </div>
            <div class="form-group">
                <label for="">Tac gia</label><br>
                <select name="post" id="post">
                	<option value="0">Danh muc tac gia</option>
                	<?php 
                		foreach ($users as $value) {
                	 ?>
                	 	<option <?php echo ($value['id'] == $post['users_id'])?'selected':'NULL'?> value="<?= $value['id']?>"><?= $value['name1'] ?></option>
                	<?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="">Chuyen Muc</label><br>
                <select name="post" id="post">
                	<option value="0">Danh muc tac gia</option>
                	<?php 
                		foreach ($cate as $value) {
                	 ?>
                	 	<option <?php echo ($value['id'] == $post['cate_id'])?'selected':'NULL'?> value="<?= $value['id']?>"><?= $value['name'] ?></option>
                	<?php } ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">UPDATE</button>
        </form>
        	<a href="index.php" class="btn btn-primary">BACK</a>
    </div>
</body>
</html>