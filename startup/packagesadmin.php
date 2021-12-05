<?php  include'process.php'; 


if (isset($_GET['editPACKAGE'])) {
    $id = $_GET['editPACKAGE'];
    $edit_state = true;

    $rec = mysqli_query($db, "SELECT * FROM tbl_packages WHERE id=$id");
    $record = mysqli_fetch_array($rec);
    $id = $record['id'];
    $p_category = $record['p_category'];
    $p_type = $record['p_type'];
    $p_price = $record['p_price'];
    $p_content = $record['p_content'];
     $imagePackage = $record['imagePackage'];
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

  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="bootstrap/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

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
  box-shadow: 2px 2px 10px grey;
  border-radius: 1%;
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
}

.but {
            background-color: #ddd;
            border: none;
            color: black;
            padding: 5px 10px;
            text-align: center;
            font-size: 16px;
            transition: 0.3s;
            border-radius: 5px;
        }
.but:hover {
            background-color: lightblue;
            color: white;
        }

div.gallery {
  margin: 10px;
  width: auto;
  height: auto;
  padding: 1%;
}

div.gallery img {
  width: 400px;
  height: 300px;

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
<div class="sidebar" style="background-color: white;">
	<div style="text-align: center; background-color: lightgray;"><img src="img/artisano.png" style="width:150px ;height:60px; margin-top: 20px; margin-bottom: 20px;"></div>


  <a href="adminphotoRE.php" style="color: gray;"><img src="img/photo.png" style="width:30px;height:30px; margin-right: 10%;"> Photos</a>

  <a href="admintrailerRE.php" style="color: gray;"><img src="img/trailer.png" style="width:30px;height:30px; margin-right: 10%;">Videos</a>
 

  <a href="messages.php" style="color: gray;"><img src="img/messages.png" style="width:30px;height:30px; margin-right: 10%;">Reserve</a>

  <a href="packagesadmin.php" style="color: white; background-color: lightgray;"><img src="img/package.png" style="width:30px;height:30px; margin-right: 10%;">Packages</a>

   
</div>

<!-- Page content -->
<div class="col-sm-12" style="text-align: center; font-size: 2em;">
    <div class="col-sm-11"></div> 
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



<form method="POST" action="packagesadmin.php" enctype="multipart/form-data">
  <div class="col-sm-10" style=" text-align: center;margin-top: 2%; margin-left:15%">
      <ul class="col-sm-12" style="background-color: lightgray; height: 100%; border-radius: 1%; margin-left: 11px; box-shadow: 5px 5px 7px grey;">

        <div class="col-sm-12"><label><h2>Packages</h2></label></div>

  <div class="col-sm-6" style="background-color: white; margin: 2%; border-radius: 2%;">
    <form method="post" name="form">
    <div class="form-group" style="margin-top: 2%;">
          <form class="md-form" action="process.php" >

            <input type="hidden" name="id" value="<?php echo $id;?>">

          <div class="col-sm-4" style="text-align: left; margin-top: 2%;"><label>Sample Picture:</label></div>
          <div class="btn btn-outline-white btn-rounded waves-effect col-sm-6" style="text-align: left;"> 
            <input type="file" multiple name="imagePackage" >
          </div>

          <div class="col-sm-4" style="text-align: left; margin-top: 2%;"><label >Package Category:</label></div>
          <div class="col-sm-8" style="margin-top: 1%;">
            <input class="form-control" autocomplete="off" type="text" name="p_category" value="<?= $p_category;?>"></div>

          <div class="col-sm-4" style="text-align: left; margin-top: 2%;"><label>Package Type:</label></div>
          <div class="col-sm-8" style="margin-top: 1%;">
            <input class="form-control" type="text" name="p_type" value="<?= $p_type;?>" autocomplete="off"></div>

          <div class="col-sm-4" style="text-align: left;margin-top: 2%;"><label>Price:</label></div>
          <div class="col-sm-8" style="margin-top: 1%;">
            <input class="form-control" type="number" name="p_price" value="<?= $p_price;?>" autocomplete="off"></div>
    
          <div class="col-sm-12" style="margin-top: 4%;"><label>Package Content</label></div>
          <div><textarea class="form-control" aria-label="With textarea" name="p_content" rows="1"></textarea></div>
           </form>
    </div>
   
    <div class="form-group" style="margin-top: 5px;">
      <?php if ($edit_state == false): ?>
      <button class="btn btn-success form-control" type="submit" name="add_package" style="border: solid 1px;">ADD</button>
        <?php else: ?>
         <button class="btn btn-success form-control" type="submit" name="updatePACKAGE" style="border: solid 1px;">UPDATE</button>
        <?php endif ?>
      </div>

  </form>
  </div>

  

  <div class="col-sm-12" id="package_body" style="background-color: white; border-radius: 1%;margin-bottom: 2%;">
 

  <?php while ($row = mysqli_fetch_array($resultas)):?>
  <div class="gallery col-lg-5 col-md-5 col-lg-5" style="background-color: lightgray; border-radius: 2%;padding: 1%; box-shadow: 5px 5px 10px gray;margin: 4%; height: auto;">
  <table>
    <thead>
        <table>
        <tr><?php echo "<img src='images/".$row['imagePackage']."' >"; ?></tr>
        <tr><h2><?php echo $row['p_category'] ?></h2></tr>
        </table>

        <table>
       <tr><h3><?php echo $row['p_type'] ?></h3></tr>
       </table>

       <table>
        <tr><h4><label>Price:&#8369; </label><?php echo $row['p_price'] ?></h4></tr>
        </table>

        <table>
        <tr>
          <?php echo $row['p_content'] ?>
        </tr>
        </table>
      <td>
          
           <a class="edit_btn btn btn-success" onclick="javascript:confirmationEdit($(this));return false;" href="packagesadmin.php?editPACKAGE=<?php echo $row['id']; ?>">Edit</a>


          <a class="del_btn btn btn-danger" onclick="javascript:confirmationDelete($(this));return false;" href="process.php?del_package=<?php echo $row['id']; ?>">Delete</a>

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
</div>

  </ul>
</div>

</form>   
  

</body>
</html>





 