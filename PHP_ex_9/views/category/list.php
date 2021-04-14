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
        <?php 
            if(isset($_COOKIE['sussecc']))
            {
         ?>
         <div class="alert alert-success">
             <strong><?php echo $_COOKIE['sussecc'] ?></strong>
        </div>
        <?php } ?>

        <?php 
            if(isset($_COOKIE['error']))
            {
         ?>
         <div class="alert alert-success">
             <strong><?php echo $_COOKIE['error'] ?></strong>
        </div>
        <?php } ?>

        <?php 
            if(isset($_COOKIE['tc']))
            {
         ?>
         <div class="alert alert-success">
             <strong><?php echo $_COOKIE['tc'] ?></strong>
        </div>
        <?php } ?>

        <?php 
            if(isset($_COOKIE['tt']))
            {
         ?>
         <div class="alert alert-success">
             <strong><?php echo $_COOKIE['tt'] ?></strong>
        </div>
        <?php } ?>
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="index.php?mod=category&act=add" class="btn btn-primary">Add New Category</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th> 
                <th>Thumbnail</th>
                <th>Action</th>
            </thead>
            <?php foreach ($categories as $value) {
            ?>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['description'] ?></td>
                <td style="text-align: justify; width: 50%"><?php echo $value['thumbnail'] ?></td>
                <td>
                    <a href="index.php?mod=category&act=detail&id=<?php echo $value['id'] ?>" class="btn btn-primary">Detail</a>
                    <a href="index.php?mod=category&act=edit&id=<?php echo $value['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="index.php?mod=category&act=delete&id=<?php echo $value['id'] ?>" class="btn btn-warning" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>