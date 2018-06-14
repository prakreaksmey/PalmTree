

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
//
// include '../../template/header.php';
//?>


<div class="container">
    <a href="form.php" class="btn btn-success">Add New</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
          <th>Action</th>
      </tr>
    </thead>
    <tbody>

     <?php
        include '../../config/conn.php';
        $query=mysqli_query($conn,"select * from article ORDER BY id DESC ");
        foreach ($query as $row)

     {
             ?>
            <tr>
            <td><?php echo $row['title'];?></td>
            <td><?php echo $row['description'];?></td>
<!--                <td><center><img src="../upload/--><?php //echo $row['image'];?><!--" /></center></td>-->
<!--                <td>--><?php //echo '<img src="../upload/' . $row['image'] . '" alt="image" />'; ?><!--</td>-->
                <td><img src="../../uploads/<?php echo $row['image']; ?>" width="50" height="50" /></td>

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
