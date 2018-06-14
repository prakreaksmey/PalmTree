<?php
include '../../config/conn.php';
$page_title=$_POST['page_title'];
$menu_id=$_POST['menu_id'];


mysqli_query($conn,"insert into menu(page_title,menu_id) values('$menu_title','$menu_id')");

header("location:index.php");
?>