<!--upload video WED-->
<?php

$ids=0;

$con = mysqli_connect("localhost","root","","db_upload");
$msgs ="";

if (isset($_POST['Upload'])) {
  $video = $_FILES['video']['name'];
  //get text
  $video_text = mysqli_real_escape_string($con, $_POST['video_text']);

  //VIDEO FILE DIRECTORY
  $target_dir = "weddingvideos/".basename($video);

  $videoFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));

  $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

  if (in_array($videoFileType,$extensions_arr)) {

    if (move_uploaded_file($_FILES['video']['tmp_name'], $target_dir)) {
      $query = "INSERT INTO tbl_weddingvideos (videos,video_text) VALUES ('$video','$video_text')";

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
  mysqli_query($con,"DELETE FROM tbl_weddingvideos WHERE id=$ids");
  $_SESSION['msg'] = "Photo Deleted";
  header('location: admintrailerWED.php');
  # code...
}
$result3 = mysqli_query($con, "SELECT * FROM tbl_weddingvideos");
?>
<!--END WED-->