<!--upload photo-->

<!--upload REUNION PHOTOS-->
<?php
  
  
  $edit_state = false;
  
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


  $image ="";
  $image_text ="";

 if (isset($_POST['updateRE'])) {
  $image =($_FILES['image']['name']);
  $image_text =($_POST['image_text']);
  $id = ($_POST['id']);
  $oldimage=$_POST['oldimage'];
  
  if (isset($_FILES['image']['name'])&&($_FILES['image']['name']!="")){
    $newimage =$_FILES['image']['name'];
    unlink($oldimage);
    move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
  }
  else{
    $newimage=$oldimage;
  }

  mysqli_query($db, "UPDATE tbl_reunionphotos SET image_text='$image_text', image='$newimage' WHERE id = $id");
  $_SESSION['msg'] = "Address updated";
  header('location: SAadminphotoRE.php');
}

      $resultReunionPH= mysqli_query($db, "SELECT * FROM tbl_reunionphotos"); 
?>
<!--END REUNION UPLOAD-->


<!--upload CHRISTENING PHOTOS-->
<?php
 
 $id=1;
 $edit_state = false;

 // Create database connection
  $db = mysqli_connect("localhost", "root", "", "db_upload");

  // Initialize message variable
  $msg = "";
  // If upload button is clicked ...
  if (isset($_POST['upload_christeningPH'])) {
    // Get image name
    $imageCH = $_FILES['imageCH']['name'];
    // Get text
    $image_textCH = mysqli_real_escape_string($db, $_POST['image_textCH']);

    // image file directory
    $target = "images/".basename($imageCH);

    $sql = "INSERT INTO tbl_christeningphotos (imageCH, image_textCH) VALUES ('$imageCH', '$image_textCH')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['imageCH']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }  
  }

   $imageCH ="";
  $image_textCH ="";

  
 if (isset($_POST['updateCH'])) {
  $imageCH =($_FILES['imageCH']['name']);
  $image_textCH =($_POST['image_textCH']);
  $id = ($_POST['id']);
   $oldimage=$_POST['oldimage'];
  
  if (isset($_FILES['imageCH']['name'])&&($_FILES['imageCH']['name']!="")){
    $newimage =$_FILES['imageCH']['name'];
    unlink($oldimage);
    move_uploaded_file($_FILES['imageCH']['tmp_name'], $newimage);
  }
  else{
    $newimage=$oldimage;
  }

  mysqli_query($db, "UPDATE tbl_christeningphotos SET image_textCH='$image_textCH', imageCH='$newimage' WHERE id = $id");
  $_SESSION['msg'] = "Address updated";
  header('location: SAadminphCH.php');
}

  $resultChristeningPH = mysqli_query($db, "SELECT * FROM tbl_christeningphotos");
  ?>
<!--end CHRISTENING upload-->


<!--upload WEDDING PHOTOS-->
<?php
 
  $id=1;
 $edit_state = false;
 // Create database connection
  $db = mysqli_connect("localhost", "root", "", "db_upload");

  // Initialize message variable
  $msg = "";
  // If upload button is clicked ...
  if (isset($_POST['upload_weddingPH'])) {
    // Get image name
    $imageWED = $_FILES['imageWED']['name'];
    // Get text
    $image_textWED = mysqli_real_escape_string($db, $_POST['image_textWED']);

    // image file directory
    $target = "images/".basename($imageWED);

    $sql = "INSERT INTO tbl_weddingphotos (imageWED, image_textWED) VALUES ('$imageWED', '$image_textWED')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['imageWED']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }

  $imageWED ="";
  $image_textWED ="";

   if (isset($_POST['updateWED'])) {
  $imageWED =($_FILES['imageWED']['name']);
  $image_textWED =($_POST['image_textWED']);
  $id = ($_POST['id']);
   $oldimage=$_POST['oldimage'];
  
  if (isset($_FILES['imageWED']['name'])&&($_FILES['imageWED']['name']!="")){
    $newimage =$_FILES['imageWED']['name'];
    unlink($oldimage);
    move_uploaded_file($_FILES['imageWED']['tmp_name'], $newimage);
  }
  else{
    $newimage=$oldimage;
  }

  mysqli_query($db, "UPDATE tbl_weddingphotos SET image_textWED='$image_textWED', imageWED='$newimage' WHERE id = $id");
  $_SESSION['msg'] = "Address updated";
  header('location: SAadminphWED.php');
}


  $resultWedPH = mysqli_query($db, "SELECT * FROM tbl_weddingphotos");
  ?>
<!--end WEDDING upload-->

<!--upload Bday PHOTOS-->
<?php
  
  $id=1;
  $edit_state = false;
 // Create database connection
  $db = mysqli_connect("localhost", "root", "", "db_upload");

  // Initialize message variable
  $msg = "";
  // If upload button is clicked ...
  if (isset($_POST['upload_birthdayPH'])) {
    // Get image name
    $imageBD = $_FILES['imageBD']['name'];
    // Get text
    $image_textBD = mysqli_real_escape_string($db, $_POST['image_textBD']);

    // image file directory
    $target = "images/".basename($imageBD);

    $sql = "INSERT INTO tbl_birthdayphotos (imageBD, image_textBD) VALUES ('$imageBD', '$image_textBD')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['imageBD']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }  
  }


   $imageBD ="";
  $image_textBD ="";

  if (isset($_POST['updateBD'])) {
  $imageBD =($_FILES['imageBD']['name']);
  $image_textBD =($_POST['image_textBD']);
  $id = ($_POST['id']);
   $oldimage=$_POST['oldimage'];
  
  if (isset($_FILES['imageBD']['name'])&&($_FILES['imageBD']['name']!="")){
    $newimage =$_FILES['imageBD']['name'];
    unlink($oldimage);
    move_uploaded_file($_FILES['imageBD']['tmp_name'], $newimage);
  }
  else{
    $newimage=$oldimage;
  }

  mysqli_query($db, "UPDATE tbl_birthdayphotos SET image_textBD='$image_textBD', imageBD='$newimage' WHERE id = $id");
  $_SESSION['msg'] = "Address updated";
  header('location: SAadminphBD.php');
}



    $resultBirthDPH= mysqli_query($db, "SELECT * FROM tbl_birthdayphotos"); 
?>
<!--END Bday UPLOAD-->


<!--upload DEBUT PHOTOS-->
<?php
  

  $id=1;
  $edit_state = false;
 // Create database connection
  $db = mysqli_connect("localhost", "root", "", "db_upload");

  // Initialize message variable
  $msg = "";
  // If upload button is clicked ...
  if (isset($_POST['upload_debutPH'])) {
    // Get image name
    $imageDB = $_FILES['imageDB']['name'];
    // Get text
    $image_textDB = mysqli_real_escape_string($db, $_POST['image_textDB']);

    // image file directory
    $target = "images/".basename($imageDB);

    $sql = "INSERT INTO tbl_debutphotos (imageDB, image_textDB) VALUES ('$imageDB', '$image_textDB')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['imageDB']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }  
  }

  $imageDB ="";
  $image_textDB ="";

  if (isset($_POST['updateDB'])) {
  $imageDB =($_FILES['imageDB']['name']);
  $image_textDB =($_POST['image_textDB']);
  $id = ($_POST['id']);
   $oldimage=$_POST['oldimage'];
  
  if (isset($_FILES['imageDB']['name'])&&($_FILES['imageDB']['name']!="")){
    $newimage =$_FILES['imageDB']['name'];
    unlink($oldimage);
    move_uploaded_file($_FILES['imageDB']['tmp_name'], $newimage);
  }
  else{
    $newimage=$oldimage;
  }

  mysqli_query($db, "UPDATE tbl_debutphotos SET image_textDB='$image_textDB', imageDB='$newimage' WHERE id = $id");
  $_SESSION['msg'] = "Address updated";
  header('location: SAadminphDB.php');
}
      $resultDBPH= mysqli_query($db, "SELECT * FROM tbl_debutphotos"); 
?>
<!--END DEBUT UPLOAD-->

<!--end upload-->

<!---------------------------------------------------------------------------------------------------------------->

<!--DELETE-->
<?php
  $id = 0;

  $db = mysqli_connect("localhost", "root", "", "db_upload"); 


   //DELETE MESSAGES
   if(isset($_GET['del_Amessage'])) {
  $id = $_GET['del_Amessage'];
  mysqli_query($db, "DELETE FROM tbl_approved WHERE a_id=$id");
  $_SESSION['msg'] = "Messages Deleted";
  header('location: SAmessagesApprove.php');
  }
  $result = mysqli_query($db, "SELECT * FROM tbl_approved");


  if(isset($_GET['del_message'])) {
  $id = $_GET['del_message'];
  mysqli_query($db, "DELETE FROM tbl_reservation WHERE r_id=$id");
  $_SESSION['msg'] = "Messages Deleted";
  header('location: SAmessages.php');
  }
  $result = mysqli_query($db, "SELECT * FROM tbl_reservation");

  //DELETE REUNION PHOTOS
  if (isset($_GET['del'])) {
  $id = $_GET['del'];
  mysqli_query($db,"DELETE FROM tbl_reunionphotos WHERE id=$id");
  $_SESSION['msg'] = "Photo Deleted";
  header('location: SAadminphotoRE.php');
  }
  $result = mysqli_query($db, "SELECT * FROM tbl_reunionphotos");

    //DELETE CHRISTENING PHOTOS
  if (isset($_GET['del_CH'])) {
  $id = $_GET['del_CH'];
  mysqli_query($db,"DELETE FROM tbl_christeningphotos WHERE id=$id");
  $_SESSION['msg'] = "Photo Deleted";
  header('location: SAadminphCH.php');
  }
  $result = mysqli_query($db, "SELECT * FROM tbl_christeningphotos");

      //DELETE WEDDING PHOTOS
  if (isset($_GET['del_WED'])) {
  $id = $_GET['del_WED'];
  mysqli_query($db,"DELETE FROM tbl_weddingphotos WHERE id=$id");
  $_SESSION['msg'] = "Photo Deleted";
  header('location: SAadminphWED.php');
  }
  $result = mysqli_query($db, "SELECT * FROM tbl_weddingphotos");

      //DELETE BIRTHDAY PHOTOS
  if (isset($_GET['del_BD'])) {
  $id = $_GET['del_BD'];
  mysqli_query($db,"DELETE FROM tbl_birthdayphotos WHERE id=$id");
  $_SESSION['msg'] = "Photo Deleted";
  header('location: SAadminphBD.php');
  }
  $result = mysqli_query($db, "SELECT * FROM tbl_birthdayphotos");

      //DELETE DEBUT PHOTOS
  if (isset($_GET['del_DB'])) {
  $id = $_GET['del_DB'];
  mysqli_query($db,"DELETE FROM tbl_debutphotos WHERE id=$id");
  $_SESSION['msg'] = "Photo Deleted";
  header('location: SAadminphDB.php');
  }
  $result = mysqli_query($db, "SELECT * FROM tbl_debutphotos");

 ?>

<!--end DELETE-->
<!---------------------------------------------------------------------------------------------------------------->

<!--add package-->


<?php 
    $edit_state = false;

    $connect = mysqli_connect("localhost","root","","db_upload");
 ?>


<?php
 



  if (isset($_POST['add_package'])) {
    $id =$_POST['id'];
    $p_category = $_POST['p_category'];
    $p_type = $_POST['p_type'];
    $p_price = $_POST['p_price'];
    $p_content = $_POST['p_content'];

    $imagePackage = $_FILES['imagePackage']['name'];
    // image file directory
    $target = "images/".basename($imagePackage);

    $insert_package = mysqli_query($connect," INSERT INTO tbl_packages (imagePackage,p_category,p_type,p_price,p_content)
      VALUES ('$imagePackage','$p_category','$p_type','$p_price','$p_content') ");

    mysqli_query($connect, $insert_package);
    
    if (move_uploaded_file($_FILES['imagePackage']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }

    $id = "";
    $p_category = "";
    $p_type = "";
    
    $p_price = "";
    $p_content = "";
     $imagePackage = "";

  if (isset($_POST['updatePACKAGE'])) {
  $id = ($_POST['id']);
  $p_category = $_POST['p_category'];
  $p_type = $_POST['p_type'];
  $p_price = $_POST['p_price'];
  $p_content = $_POST['p_content'];
  $imagePackage = $_FILES['imagePackage']['name'];

  mysqli_query($connect, "UPDATE tbl_packages SET p_category='$p_category', p_type='$p_type', p_price='$p_price', p_content='$p_content', imagePackage='$imagePackage' WHERE id = $id");

  $_SESSION['msg'] = "Address updated";
  header('location: SApackagesadmin.php');
}


  $resultas = mysqli_query($connect, "SELECT * FROM tbl_packages");
 ?>


<!--delete package-->
<?php 

  $db = mysqli_connect("localhost", "root", "", "db_upload"); 

  //DELETE REUNION PHOTOS
  if (isset($_GET['del_package'])) {
  $id = $_GET['del_package'];
  mysqli_query($db,"DELETE FROM tbl_packages WHERE id=$id");
  $_SESSION['msg'] = "Photo Deleted";
  header('location: SApackagesadmin.php');
  }
  $result = mysqli_query($db, "SELECT * FROM tbl_packages");

 ?>
<!--end delete package-->

<!--end add package-->

<!--------------------------------------------------------------------------------------------------------------------->

<!-- reserve -->
<?php
$rv = mysqli_connect("localhost","root","","db_upload");

$r_approve = "";
$r_status = "";
$r_category = "";
$r_type = "";
$r_first_name ="";     
$r_last_name = "";   
$r_address = "";   
$r_event = "";
$r_event_start = ""; 
$r_event_end = "";       
$r_email = "";     
$r_contact = "";     
$r_message ="";


if(isset($_POST['Send'])){

$r_approve = mysqli_real_escape_string($rv,$_POST['r_approve']);
$r_status = mysqli_real_escape_string($rv,$_POST['r_status']);
$r_category = mysqli_real_escape_string($rv,$_POST['r_category']);
$r_type = mysqli_real_escape_string($rv,$_POST['r_type']);
$r_first_name = mysqli_real_escape_string($rv,$_POST['r_first_name']);     
$r_last_name = mysqli_real_escape_string($rv,$_POST['r_last_name']);   
$r_address = mysqli_real_escape_string($rv,$_POST['r_address']);   
$r_event = mysqli_real_escape_string($rv,$_POST['r_event']);
$r_event_start = mysqli_real_escape_string($rv,$_POST['r_event_start']); 
$r_event_end = mysqli_real_escape_string($rv,$_POST['r_event_end']);       
$r_email = mysqli_real_escape_string($rv,$_POST['r_email']);     
$r_contact = mysqli_real_escape_string($rv,$_POST['r_contact']);     
$r_message = mysqli_real_escape_string($rv,$_POST['r_message']);
$insert_reserve = mysqli_query($rv, "INSERT INTO tbl_reservation(r_first_name,r_last_name,r_address,r_event,r_event_start,r_event_end,r_email,r_contact,r_message,r_category,r_type,r_status,r_approve)
VALUES('$r_first_name','$r_last_name','$r_address','$r_event','$r_event_start','$r_event_end','$r_email','$r_contact','$r_message','$r_category','$r_type','Pending','$r_approve')");

echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Send Reservation!');
    window.location.href='SASApackages.php';
    </script>";
}



if (isset($_GET['approval'])) {
    $r_id = $_GET['approval'];
    

    $rec = mysqli_query($rv, "SELECT * FROM tbl_reservation WHERE r_id=$r_id");
    $record= mysqli_fetch_array($rec);
    $r_id = $record['r_id'];

    $r_approve = mysqli_real_escape_string($rv,$record['r_approve']);
    $r_status = mysqli_real_escape_string($rv,$record['r_status']);
    $r_category = mysqli_real_escape_string($rv,$record['r_category']);
    $r_type = mysqli_real_escape_string($rv,$record['r_type']);
    $r_first_name = mysqli_real_escape_string($rv,$record['r_first_name']);     
    $r_last_name = mysqli_real_escape_string($rv,$record['r_last_name']);   
    $r_address = mysqli_real_escape_string($rv,$record['r_address']);   
    $r_event = mysqli_real_escape_string($rv,$record['r_event']);
    $r_event_start = mysqli_real_escape_string($rv,$record['r_event_start']); 
    $r_event_end = mysqli_real_escape_string($rv,$record['r_event_end']);       
    $r_email = mysqli_real_escape_string($rv,$record['r_email']);     
    $r_contact = mysqli_real_escape_string($rv,$record['r_contact']);     
    $r_message = mysqli_real_escape_string($rv,$record['r_message']);

    mysqli_query($rv, "INSERT INTO tbl_approved(a_first_name,a_last_name,a_address,a_event,a_event_start,a_event_end,a_email,a_contact,a_message,a_category,a_type,a_status,a_approve)
VALUES('$r_first_name','$r_last_name','$r_address','$r_event','$r_event_start','$r_event_end','$r_email','$r_contact','$r_message','$r_category','$r_type','Pending','$r_approve')");

    mysqli_query($rv,"DELETE FROM tbl_reservation WHERE r_id=$r_id");
  $_SESSION['msg'] = "Deleted";
  header('location: SAmessages.php');  
  }

  if (isset($_GET['resrv'])) {
    $id = $_GET['resrv'];

    $rec = mysqli_query($connect, "SELECT p_category, p_type FROM tbl_packages WHERE id=$id");
    $record = mysqli_fetch_assoc($rec);

    $p_category = $record['p_category'];
    $p_type = $record['p_type'];

}


$reserve = mysqli_query($rv,"SELECT * FROM tbl_reservation");
?>
<!-- end reserve -->

<!---------------------------------------------------------------------------------------------------------------------->
<?php 

$con = mysqli_connect("localhost","root","","db_upload");

$a_approve = "";
$a_status = "";
$a_category = "";
$a_type = "";
$a_first_name ="";     
$a_last_name = "";   
$a_address = "";   
$a_event = "";
$a_event_start = ""; 
$a_event_end = "";       
$a_email = "";     
$a_contact = "";     
$a_message ="";


$approved = mysqli_query($con,"SELECT * FROM tbl_approved");

 ?>





<!--------------------------------------------------------------------------------------------------------------------->

<!--upload video RE-->
<?php


$edit_state = false;
$con = mysqli_connect("localhost","root","","db_upload");
$msgs ="";

if (isset($_POST['Upload_videoRE'])) {
  $videos = $_FILES['videos']['name'];
  //get text
  $video_text = mysqli_real_escape_string($con, $_POST['video_text']);

  //VIDEO FILE DIRECTORY
  $target_dir = "reunionvideos/".basename($videos);

  $videoFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));

  $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

  if (in_array($videoFileType,$extensions_arr)) {

    if (move_uploaded_file($_FILES['videos']['tmp_name'], $target_dir)) {
      $query = "INSERT INTO tbl_reunionvideos (videos,video_text) VALUES ('$videos','$video_text')";

      mysqli_query($con, $query);
      # code...
    }
  }
}

$videos = "";
$video_text="";


  if (isset($_POST['updateREvid'])) {
  $video_text =($_POST['video_text']);
  $id = ($_POST['id']);

  
  mysqli_query($con, "UPDATE tbl_reunionvideos SET video_text='$video_text' WHERE id = $id");
  $_SESSION['msg'] = "Address updated";
  header('location: SAadmintrailerRE.php');
} 

$resultVidRE = mysqli_query($con, "SELECT * FROM tbl_reunionvideos");
?>

<?php 

$con = mysqli_connect("localhost","root","","db_upload");

if (isset($_GET['delVideoRE'])) {
  $id = $_GET['delVideoRE'];
  mysqli_query($con,"DELETE FROM tbl_reunionvideos WHERE id=$id");
  $_SESSION['msg'] = "Photo Deleted";
  header('location: SAadmintrailerRE.php');
  }

  $resultVidRE = mysqli_query($con, "SELECT * FROM tbl_reunionvideos");

 ?>

<!--END RE-->

<!------------------------------------------------------------------------------------------------------------------------------>


<?php 
  
  $connect = mysqli_connect("localhost","root","","db_upload");

$u_Fname = "";
$u_Lname = "";
$u_Email ="";
$u_Cnumber = "";
$u_type = "";


  if(isset($_POST['Signup'])){

$u_Fname = mysqli_real_escape_string($connect,$_POST['u_Fname']);
$u_Lname = mysqli_real_escape_string($connect,$_POST['u_Lname']);
$u_Email = mysqli_real_escape_string($connect, $_POST['u_Email']);
$u_Cnumber = mysqli_real_escape_string($connect,$_POST['u_Cnumber']);
$u_type = mysqli_real_escape_string($connect,$_POST['u_type']);
$u_Password = password_hash($_POST['u_Password'], PASSWORD_DEFAULT);


$Reserve = mysqli_query($connect, "INSERT INTO tbl_users (u_Fname,u_Lname,u_Email,u_Cnumber,u_Password,u_type)
VALUES('$u_Fname','$u_Lname','$u_Email','$u_Cnumber','$u_Password','$u_type')");

echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Created an Account!');
    window.location.href='SuperAdmin.php';
    </script>";
}

$addusers = mysqli_query($connect,"SELECT * FROM tbl_users");
 ?>





