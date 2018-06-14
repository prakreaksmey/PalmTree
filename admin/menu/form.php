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

    <form action="add.php" method="post">


        <div class="form-group">
            <label for="menu_title">menu_title:</label>
            <input type="text" class="form-control" id="menu_title" placeholder="Enter menu_title" name="menu_title">
        </div>
        <div class="form-group">
            <label for="menu_index">menu_index:</label>
            <input type="text" class="form-control" id="menu_index" placeholder="Enter menu_index" name="menu_index">
        </div>
        <div class="form-group">
            <label for="menu_sub_of">menu_sub_of:</label>
            <input type="text" class="form-control" id="menu_sub_of" placeholder="Enter menu_sub_of" name="menu_sub_of">
        </div>

        <button type="submit" class="btn btn-default" name="but_upload">Submit</button>
    </form>
</div>

</body>
</html>
