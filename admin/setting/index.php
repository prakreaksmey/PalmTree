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
    <a href="form.php" class="btn btn-success">Add New</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#Id</th>
            <th>Title</th>
            <th>Slide</th>
            <th>Description</th>
            <th>Footer</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        include '../../config/conn.php';
        $query=mysqli_query($conn,"select * from setting ");
        foreach($query as $row)

        {
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['title'];?></td>
                <td><img src="../../uploads/<?php echo $row['slide']; ?>" width="50" height="50" /></td>
                <td><?php echo $row['description'];?></td>
                <td><?php echo $row['footer'];?></td>
                <td><a href="" class="btn btn-danger">Delete</a>
                    <a href="" class="btn btn-success">Edit</a>
                </td>

            </tr>
            <?php


        }
        ?>

        </tbody>
    </table>
</div>

</body>
</html>
