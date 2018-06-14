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

    <form name="form1" action="add.php" method="post" enctype="multipart/form-data">


        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title"  name="title">
        </div>
        <div class="form-group">
            <label for="slide">Slide:</label>
            <input type="file" class="form-control" id="slide"  name="slide">
        </div>




        <div class="form-group">
            <label for="description">description:</label>
            <input type="text" class="form-control" id="description"  name="description">
        </div>

        <div class="form-group">
            <label for="footer">Footer:</label>
            <input type="text" class="form-control" id="footer"  name="footer">
        </div>





        <button type="submit" class="btn btn-default" name="but_upload">Submit</button>
    </form>
</div>

</body>
</html>
