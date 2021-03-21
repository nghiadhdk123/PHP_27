<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="xuly.php" method="POST" role="form" enctype="multipart/form-data">
            <legend>Upload Document</legend>

            <div class="form-group">
                <label for="">ID Môn học</label>
                <input type="text" class="form-control" id="" placeholder="Nhập MSV" name="id">
            </div>

            <div class="form-group">
                <label for="">Tên tài liệu</label>
                <input type="text" class="form-control" id="" placeholder="Nhập MSV" name="name">
            </div>
            
            <div class="form-group">
                <input type="file" class="form-control" id="" placeholder="Nhập vào họ tên" name="uploadfile" >
            </div>  
            
            <button type="submit" class="btn btn-primary" name="submit">Upload</button>
            
        </form>
    </div>
</body>
</html>