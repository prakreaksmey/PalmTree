<?php
include '../../config/conn.php';
$title=$_POST['title'];

if(isset($_POST['but_upload'])) {

    $name = $_FILES['banner_image']['name'];
    $target_dir = "../../uploads/";
    $target_file = $target_dir . basename($_FILES["banner_image"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    // Check extension
    if (in_array($imageFileType, $extensions_arr)) {

        // Convert to base64
        $image_base64 = base64_encode(file_get_contents($_FILES['banner_image']['tmp_name']));
        $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
        // Insert record
        $query = "insert into banner(title,banner_image) values('$title','$name')";
        mysqli_query($conn, $query);

        // Upload file
        move_uploaded_file($_FILES['banner_image']['tmp_name'], $target_dir . $name);
    }
}
header("location:index.php");
?>