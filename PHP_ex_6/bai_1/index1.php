<?php

require_once('conextion.php');

// Câu lệnh truy vấn
$query = "SELECT * FROM users";

// Thực thi câu lệnh
$result = $conn->query($query);

// Tạo 1 mảng để chứa dữ liệu
$users = array();

while($row = $result->fetch_assoc()) { 
	$users[] = $row;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- USERS ---</h3>
        <a href="process.php" class="btn btn-primary">Add New Category</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Avatar</th>
            </thead>
            <?php foreach ($users as $value) {
             ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= md5($value['password'])?></td>
                <td><?= $value['email'] ?></td>
                <td>
                    <img src="<?= $value['avatar'] ?>" alt="anh khong ton tai" width='200px' height='200px'>
                </td>
                <td>
                    <a href="detail.php?id=<?= $value['id']?>" class="btn btn-primary">Detail</a>
                    <a href="edit_2.php?id=<?= $value['id']?>" class="btn btn-success">Edit</a>
                    <a href="delete.php?id=<?= $value['id']?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </table>
    </div>
</body>
</html>