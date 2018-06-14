<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

    <form action="add.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="title" class="form-control" id="title" placeholder="Enter title" name="title">
        </div>

        <div class="form-group">
            <label for="description">Title:</label>
            <input type="description" class="form-control" id="description" placeholder="Enter description" name="description">
        </div>

        <div class="form-group">
            <label for="file">Image:</label>
            <input type="file" class="form-control" id="image"  name="image">
        </div>



        <button type="submit" class="btn btn-default" name="but_upload">Submit</button>
    </form>
</div>

</body>
</html>
