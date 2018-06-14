<?php
include '../../config/conn.php';
$menu_title=$_POST['menu_title'];
$menu_index=$_POST['menu_index'];
$menu_sub_of=$_POST['menu_sub_of'];


mysqli_query($conn,"insert into menu(menu_title,menu_index,menu_sub_of) values('$menu_title','$menu_index','$menu_sub_of')");





header("location:index.php");
?>