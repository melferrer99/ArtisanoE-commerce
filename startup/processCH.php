<!--upload video ch-->
<?php

$edit_state = false;
$id=0;

$con = mysqli_connect("localhost","root","","db_upload");
$msgs ="";

if (isset($_POST['Upload'])) {
  $video = $_FILES['video']['name'];
  //get text
  $video_text = mysqli_real_escape_string($con, $_POST['video_text']);

  //VIDEO FILE DIRECTORY
  $target_dir = "christeningvideos/".basename($video);

  $videoFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));

  $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

  if (in_array($videoFileType,$extensions_arr)) {

    if (move_uploaded_file($_FILES['video']['tmp_name'], $target_dir)) {
      $query = "INSERT INTO tbl_christeningvideos (videos,video_text) VALUES ('$video','$video_text')";

      mysqli_query($con, $query);
      # code...
    }
  }
}

$videos = "";
$video_text="";

  if (isset($_POST['updateCHvid'])) {
  $video_text =($_POST['video_text']);
  $id = ($_POST['id']);
  
  mysqli_query($con, "UPDATE tbl_christeningvideos SET video_text='$video_text' WHERE id = $id");
  $_SESSION['msg'] = "Address updated";
  header('location: admintrailerCH.php');
}


if (isset($_GET['delVideoCH'])) {
  $id = $_GET['delVideoCH'];
  mysqli_query($con,"DELETE FROM tbl_christeningvideos WHERE id=$id");
  $_SESSION['msg'] = "Video Deleted";
  header('location: admintrailerCH.php');
  }

$resultvidCH = mysqli_query($con, "SELECT * FROM tbl_christeningvideos");
?>

<!--END RE-->