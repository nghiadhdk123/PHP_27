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
    <h3 align="center">Add New Category</h3>
    <hr>
        <form action="index.php?mod=user&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $user['id'] ?>">
                <input type="text" class="form-control" id="" placeholder="" name="name1" value="<?= $user['name1'] ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" value="<?= $user['email'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </form>
    </div>
</body>
</html>