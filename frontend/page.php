<?php
include "../config/conn.php";
$get_menu_id=$_GET['send_id'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height: 1500px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height: auto;}
        }
    </style>
</head>
<body>

<?php
include '../template/header.php';
?>
<div class="container-fluid">

    <div class="col-sm-9">
        <h4><small>RECENT POSTS</small></h4>
        <hr>

        <?php
        //            include '../config/conn.php';
        $gets=mysqli_query($conn,"select * from detail WHERE de_id=$get_menu_id");
        foreach ($gets as $row)
        {
            ?>
            <h2><?php echo $row['title'];?></h2>
            <img src="../uploads/<?php echo $row['image']; ?>" width="100%" height="300px";
            <p><?php echo $row['description'];?></p>
            <br><br>
            <?php
        }
        ?>






    </div>
</div>
<footer class="container-fluid text-center">
    <?php
    include "../template/footer.php";
    ?>
</footer>

</body>
</html>
