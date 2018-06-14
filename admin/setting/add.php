<?php
include '../../config/conn.php';

$title=$_POST['title'];
$description=$_POST['description'];
$footer=$_POST['footer'];


if(isset($_POST['but_upload'])) {

    $name = $_FILES['slide']['name'];
    $target_dir = "../../uploads/";
    $target_file = $target_dir . basename($_FILES["slide"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    // Check extension
    if (in_array($imageFileType, $extensions_arr)) {

        // Convert to base64
        $image_base64 = base64_encode(file_get_contents($_FILES['slide']['tmp_name']));
        $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
        // Insert record
        $query =mysqli_query($conn, "insert into setting(title,slide,description,footer) values('$title',''$name','$description','$footer')");
//        mysqli_query($conn, $query);

        // Upload file
        move_uploaded_file($_FILES['slide']['tmp_name'], $target_dir . $name);
    }
}
header("location:index.php");
?>