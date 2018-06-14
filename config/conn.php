<?php
$conn = mysqli_connect("localhost","root","","palmtree");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_set_charset($conn,"utf8");
//mysqli_close($conn);
?>