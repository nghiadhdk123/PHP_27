<?php 
	require_once('conextion.php');

	$data = $_GET['id'];

	$query = "SELECT *,users.name1,categories.name  FROM post INNER JOIN users ON post.users_id = users.id INNER JOIN categories ON post.cate_id = categories.id WHERE post.id1 = " .$data;

	$result = $conn->query($query);

	$post = $result->fetch_assoc();
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<ul>
 		<li>
 			ID : <?= $post['id1'] ?>
 		</li>
 		<li>
 			Title : <?= $post['title'] ?>
 		</li>
 		<li>
 			Description : <?= $post['description1'] ?>
 		</li>
 		<li>
 			View-Count : <?= $post['view_count'] ?>
 		</li>
 		<li>
 			Content : <?= $post['content'] ?>
 		</li>
 		<li>
 			Tac gia : <?= $post['name1'] ?>
 		</li>
 		<li>
 			Chuyen muc : <?= $post['name'] ?>
 		</li>
 		<li>
 			Creat_at : <?= $post['creat_at'] ?>
 		</li>
 	</ul>
 </body>
 </html>