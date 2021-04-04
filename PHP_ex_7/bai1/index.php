<?php 
	require_once('conextion.php');

	$query = "SELECT post.id1,post.description1,post.title,post.content,post.view_count,post.creat_at,users.id,users.name1,categories.id,categories.name FROM post INNER JOIN users ON post.users_id = users.id INNER JOIN categories ON post.cate_id = categories.id";
	// echo $query;
	$result = $conn->query($query);


	$post = array();

	while($row = $result->fetch_assoc()) { 
 		$post[] = $row;
	 }
 ?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POST</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POST ---</h3>
        <a href="process.php" class="btn btn-primary">Add New Post</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Content</th>
                <th>Tac Gia</th>
                <th>Chuyen muc</th>
                <th>View</th>
                <th>Creat_at</th>
            </thead>
            <?php foreach ($post as $value) {
             ?>
            <tr>
                <td><?= $value['id1'] ?></td>
                <td><?= $value['title'] ?></td>
                <td><?= $value['description1']?></td>
                <td><?= $value['content'] ?></td>
                <td><?= $value['name1'] ?></td>
                <td><?= $value['name']
                ?></td>
                <td><?= $value['view_count']?></td>
                <td><?= $value['creat_at']?></td>
                <td>
                    <a href="detail.php?id=<?= $value['id1']?>" class="btn btn-primary">Detail</a>
                    <a href="edit2.php?id=<?= $value['id1']?>" class="btn btn-success">Edit</a>
                    <a href="delete.php?id=<?= $value['id1']?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </table>
    </div>
</body>
</html>