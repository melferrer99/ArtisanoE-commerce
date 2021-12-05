<!--upload photo-->
<?php
  
  $id = 0;

  

 // Create database connection
  $db = mysqli_connect("localhost", "root", "", "db_upload");

  // Initialize message variable
  $msg = "";
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO tbl_reunionphotos (image, image_text) VALUES ('$image', '$image_text')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }

  if (isset($_GET['del'])) {
  $id = $_GET['del'];
  mysqli_query($db,"DELETE FROM tbl_reunionphotos WHERE id=$id");
  $_SESSION['msg'] = "Photo Deleted";
  header('location: adminphotoRE.php');
  }
  $result = mysqli_query($db, "SELECT * FROM tbl_reunionphotos");
?>
<!--end upload photo-->

<!--add package-->
<?php 
    $connect = mysqli_connect("localhost","root","","db_upload");
 ?>
<?php 
  
  if (isset($_POST['add_package'])) {
    $p_category = $_POST['p_category'];
    $p_type = $_POST['p_type'];
    $p_price = $_POST['p_price'];
    $p_content = $_POST['p_content'];

    $insert_package = mysqli_query($connect,"INSERT INTO tbl_packages (p_category,p_type,p_price,p_content)
      VALUES ('$p_category','$p_type','$p_price','$p_content') ");
  }

  $results = mysqli_query($connect, "SELECT * FROM tbl_packages");
 ?>
<!--end add package-->

<!-- reserve -->
<!-- end reserve -->

<!--Copy-->
<!--upload video RE-->
<?php

$ids=0;

$con = mysqli_connect("localhost","root","","db_upload");
$msgs ="";

if (isset($_POST['Upload'])) {
  $video = $_FILES['video']['name'];
  //get text
  $video_text = mysqli_real_escape_string($con, $_POST['video_text']);

  //VIDEO FILE DIRECTORY
  $target_dir = "reunionvideos/".basename($video);

  $videoFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));

  $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

  if (in_array($videoFileType,$extensions_arr)) {

    if (move_uploaded_file($_FILES['video']['tmp_name'], $target_dir)) {
      $query = "INSERT INTO tbl_reunionvideos (videos,video_text) VALUES ('$video','$video_text')";

      mysqli_query($con, $query);
      # code...
    }
    // else{
    //   echo "Invalid File Extension";
    // }
    # code...
  }
  # code...
}
if (isset($_GET['delet'])) {
  $ids = $_GET['delet'];
  mysqli_query($con,"DELETE FROM tbl_reunionvideos WHERE id=$ids");
  $_SESSION['msg'] = "Photo Deleted";
  header('location: admintrailerRE.php');
  # code...
}
$results = mysqli_query($con, "SELECT * FROM tbl_reunionvideos");
?>
<!--END RE-->
<!--Copy-->

