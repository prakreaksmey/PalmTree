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
<div class="container-fluid">


    <?php
        include '../config/conn.php';
        $query =mysqli_query($conn, "select * from setting");
        foreach ($query as $row)
        {
            ?>

            <footer class="container-fluid text-center">
                <p style="background-color:black; height:60px; color:white;"><?php echo $row['footer']; ?></p>
            </footer>
            <?php
        }

    ?>




</div>
</body>
</html>
















