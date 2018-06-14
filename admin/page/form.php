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
<?php
include '../../config/conn.php';
    $query =mysqli_query($conn,"select * from page  INNER JOIN menu");

?>
<div class="container">

    <form action="add.php" method="post">


        <div class="form-group">
            <label for="page_title">page_title:</label>
            <input type="text" class="form-control" id="page_title" placeholder="Enter page_title" name="page_title">
        </div>

        <div class="form-group">
            <label for="sel1">Select menu_id</label>

            <select name="menu_id" id="menu_id">
                <option selected="selected">Choose one</option>
                <?php
                foreach($query as $name) { ?>
                    <option value="<?php echo $name['menu_id'] ?>"><?php echo $name['menu_id']; ?></option>
                    <?php
                } ?>
            </select>
        </div>

        <button type="submit" class="btn btn-default" name="but_upload">Submit</button>
    </form>
</div>

</body>
</html>
