<?php include 'processBD.php';


if (isset($_GET['editVideoBD'])) {
    $id = $_GET['editVideoBD'];
    
    $edit_state = true;

    $rec = mysqli_query($con, "SELECT * FROM tbl_birthdayvideos WHERE id=$id");
    $record = mysqli_fetch_array($rec);
    $video_text = $record['video_text'];
    $id = $record['id'];
  }
session_start();
if (!isset($_SESSION['u_Fname'])){
   echo "<script>alert('Login First!'); location.href='login.php';</script>";
 }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style type="text/css">
	.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
  .content{
    box-shadow: 5px 5px 10px gray;
  }
}

div.gallery {
  margin: 10px;
  width: auto;
  height: auto;
  border: 1px solid gray;
  padding: 1%;
}

div.gallery img {
  width: 234px;
  height: 200px;

}


  /* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 5px;
  font-size: 14px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 60px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  font-size: 12px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}

</style>
</head>


<body>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
      <!-- Modal content-->
      <div class="modal-content" style="padding: 5%">
        
        <?php while ($row = mysqli_fetch_array($addusers)):?>
        
        <?php include 'createacc.php'; ?>
        
        <?php endwhile; ?> 

        </div>
      

    </div>
  </div>


<!-- end modal -->


  
  <!-- The sidebar -->
<div class="sidebar">
  <div style="text-align: center; background-color: lightgray;"><img src="img/artisano.png" style="width:150px ;height:60px; margin-top: 20px; margin-bottom: 20px;"></div>
 

  <a href="adminphotoRE.php" style="color: gray;"><img src="img/photo.png" style="width:30px;height:30px; margin-right: 10%;"> Photos</a>

  <a href="admintrailerRE.php" style="color: white; background-color: lightgray;"><img src="img/trailer.png" style="width:30px;height:30px; margin-right: 10%;">Videos</a>
  

  <a href="messages.php" style="color: gray;"><img src="img/messages.png" style="width:30px;height:30px; margin-right: 10%;">Reserve</a>

  <a href="packagesadmin.php" style="color: gray;"><img src="img/package.png" style="width:30px;height:30px; margin-right: 10%;">Packages</a>

   
</div>


<!-- Page content -->
<div class="content">
    <div class="col-sm-12" style="text-align: center; font-size: 2em;">
    <div class="col-sm-11">VIDEOS</div> 
      <div class="col-lg-1">
     <div class="dropdown">
  <button class="dropbtn">
     WELCOME
     <?php 
    if (isset($_SESSION['u_Fname'])) {
      echo $_SESSION['u_Fname'];
    }
    else{
      header("location:login.php");
    }
    ?>
  </button>
  <div class="dropdown-content">
    <a href="logout.php" type="submit" name="logout" onclick="javascript:confirmationLogout($(this));return false;">LogOut</a>
    <a href="EditAcc.php">Edit Account</a>
  </div>
  </div>

       <script type="text/javascript">
            function confirmationLogout(anchor){
              var conf = confirm('Are you sure want to SIGNOUT?');
            if(conf)
              window.location=anchor.attr("href");
              }
          </script>

      </div>

  </div>
  <div class="menu" style="text-align: center; padding-bottom: 1%;">
  
      <a href="admintrailerRE.php"><button class="btn btn-outline-secondary" type="button">Reunion</button></a>
      <a href="admintrailerCH.php"><button class="btn btn-outline-secondary" type="button">Christening</button></a>
      <a href="admintrailerWED.php"><button class="btn btn-outline-secondary" type="button">Wedding</button></a>
      <a href="admintrailerBD.php"><button class="btn btn-outline-secondary active" type="button">Birthday</button></a>
      <a href="admintrailerDB.php"><button class="btn btn-outline-secondary" type="button">Debut</button></a>
    <hr>
  </div>


  <!-- input upload --> 
 <form method="POST" action="admintrailerBD.php" enctype="multipart/form-data">
<div class="col-lg-4" style="background-color: lightgray; padding: 1%; border-radius: 10px;">
  
  <form class="md-form" action="#" >
    <div class="file-field" >

        
      <input type="hidden" name="id" value="<?php echo $id;?>">
      <input type="hidden" name="oldvideo" value="<?php echo $videos;?>">

      <div class="btn btn-outline-white btn-rounded waves-effect" >
        <input type="file" multiple name="video">
      </div>
      
      <input type="text" required="" name="video_text" class="form-control" input type="text" placeholder="Video name" value="<?= $video_text;?>">
    
    </div>
  </form>
 
 <div class="input-group" style="margin-top: 5px;">
        <?php if ($edit_state == false): ?>
        <button class="btn btn-outline-secondary btn-block" type="submit" name="Upload" style="border: solid 1px;">Upload</button>
        <?php else: ?>
         <button class="btn btn-outline-secondary btn-block  btn-success" type="submit" name="updateBDvid" style="border: solid 1px;">Update</button>
        <?php endif ?>
      </div>

</div>

<div class="col-sm-12"><hr></div>

 <?php while ($row = mysqli_fetch_array($result2)):?>
  <div class="gallery col-sm-6" style="text-align: center;">
  <table>
    <thead>
      <td>
        <tr><video style="width: 300px; height: 250px" controls="mouse-over"><?php echo "<source src='birthdayvideos/".$row['videos']."' >"; ?></video></tr>
        <tr><?php echo "<p>" .$row['video_text']."</p>"; ?></tr>
      </td>
      <td>
          <a class="edit_btn btn btn-success" onclick="javascript:confirmationEdit($(this));return false;" href="admintrailerBD.php?editVideoBD=<?php echo $row['id']; ?>">Rename</a>

          
          <a class="del_btn btn btn-danger" onclick="javascript:confirmationDelete($(this));return false;" href="processBD.php?delVideoBD=<?php echo $row['id']; ?>">Delete</a>

          <script type="text/javascript">
            function confirmationDelete(anchor){
              var conf = confirm('Are you sure want to delete this record?');
            if(conf)
              window.location=anchor.attr("href");
              }

          </script>

          <script type="text/javascript">
            function confirmationEdit(anchor){
              var conf = confirm('Are you sure want to edit this record?');
            if(conf)
              window.location=anchor.attr("href");
              }

          </script>
      </td>
    </thead>
  </table>
</div>
<?php endwhile; ?>
</form>
<!--Copy-->

</div>

</body>
</html>