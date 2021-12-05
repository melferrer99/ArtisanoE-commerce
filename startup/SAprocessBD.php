<!--upload video BD-->
<?php
$edit_state = false;
$ids=0;

$con = mysqli_connect("localhost","root","","db_upload");
$msg ="";

if (isset($_POST['Upload'])) {
  $video = $_FILES['video']['name'];
  //get text
  $video_text = mysqli_real_escape_string($con, $_POST['video_text']);

  //VIDEO FILE DIRECTORY
  $target_dir = "birthdayvideos/".basename($video);

  $videoFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));

  $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

  if (in_array($videoFileType,$extensions_arr)) {

    if (move_uploaded_file($_FILES['video']['tmp_name'], $target_dir)) {
      $query = "INSERT INTO tbl_birthdayvideos (videos,video_text) VALUES ('$video','$video_text')";

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

$videos = "";
$video_text="";


  if (isset($_POST['updateBDvid'])) {

  $video_text =($_POST['video_text']);
  $id = ($_POST['id']);
  
  mysqli_query($con, "UPDATE tbl_birthdayvideos SET video_text='$video_text' WHERE id = $id");
  $_SESSION['msg'] = "Address updated";
  header('location: SAadmintrailerBD.php');
}




if (isset($_GET['delVideoBD'])) {
  $ids = $_GET['delVideoBD'];
  mysqli_query($con,"DELETE FROM tbl_birthdayvideos WHERE id=$ids");
  $_SESSION['msg'] = "Photo Deleted";
  header('location: SAadmintrailerBD.php');
  # code...
}
$result2 = mysqli_query($con, "SELECT * FROM tbl_birthdayvideos");
?>
<!--END RE-->