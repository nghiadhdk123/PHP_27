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
        <form action="add.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">TILLE</label>
                <input type="text" class="form-control" id="" placeholder="Tiêu đề bài viết" name="title">
            </div>
            <div class="form-group">
                <label for="">DESCRIPTION</label>
                <input type="text" class="form-control" id="" placeholder="Chuyên mục bài viết" name="description">
            </div>
            <div class="form-group">
                <label for="">CONTENT</label>
                <input type="text" class="form-control" id="" placeholder="Nội dung bài viết" name="content">
            </div>
            <div class="form-group">
                <label for="">View_count</label>
                <input type="text" class="form-control" id="" placeholder="" name="view_count">
            </div>
            <div class="form-group">
                <label for="">Users_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="users_id">
            </div>
            <div class="form-group">
                <label for="">cate_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="cate_id">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>