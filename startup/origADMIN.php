<?php include 'process.php'; ?>
<?php include 'processCH.php';?>
<?php include 'processBD.php';?>
<?php include 'processWED.php';?>
<?php include 'processDB.php';?>
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
  border: 1px solid gray;
  padding: 1%;
}

div.gallery img {
  width: 220px;
  height: 200px;

}

  .bg_counter{
    background: white;
    transition: 0.1s;

  }
  .bg_counter:hover{
    transform: scale(1.1);
    background: orange;
    z-index: 2;
    box-shadow: 2px 2px 2px #000;
    
  }

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

  <a href="admin.php" style="background-color: lightgray; color: white;"><img src="img/dashboard.png" style="width:30px;height:30px; margin-right: 10%;">Dashboard</a>

  <a href="adminphotoRE.php" style="color: gray;"><img src="img/photo.png" style="width:30px;height:30px; margin-right: 10%;"> Photos</a>

  <a href="admintrailerRE.php" style="color: gray;"><img src="img/trailer.png" style="width:30px;height:30px; margin-right: 10%;">Videos</a>


  <a href="messages.php" style="color: gray;"><img src="img/messages.png" style="width:30px;height:30px; margin-right: 10%;">Reserve</a>

  <a href="packagesadmin.php" style="color: gray;"><img src="img/package.png" style="width:30px;height:30px; margin-right: 10%;">Packages</a>

  <a href="createacc.php" btn btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="color: gray;"><img src="img/account.png" style="width:30px;height:30px; margin-right: 10%;">Create Account</a>
</div>


<!-- Page content -->

  

  <div style="text-align: center;">
    <div class="col-sm-9"></div>
  <div class="col-sm-2" style="background-color: lightgray;padding: 5px; border-radius: 3%; margin-top: 1%;margin-left: 6%">
          <th>
              <tr><p style="margin-right: 15px;"></p></tr>
          </th>
          <th>
              <a href="Login.php"><button type="button" class="btn btn-success">
                    <span>SignOut</span>
              </button></a>
          </th>
</div>
</div>



 <form method="POST" action="admin.php" enctype="multipart/form-data">
  <div class="content col-sm-10" style=" text-align: center;margin-top: 2%;">
      <ul class="col-sm-12" style="background-color: lightgray; height: auto; border-radius: 1%; margin-left: 11px; box-shadow: 5px 5px 7px grey;">

        <div class=" col-lg-6 " style="margin-top: 2%;margin-bottom: 2%;">
        <h2>PHOTOS</h2>
<!--start-->
        <div class="bg_counter col-sm-12" style=" box-shadow: 5px 4px 5px gray; text-align:left; ">
        
        <div class="col-lg-9" style="font-size: 20px; margin-top: 4%;">Number of Reunion Photos: </div>

        <div class="col-lg-1">
        <?php 
        $con=mysqli_connect('localhost','root','','db_upload');

        $sql="SELECT count(id) AS total FROM tbl_reunionphotos";
        $result= mysqli_query($con,$sql);
        $values=mysqli_fetch_assoc($result);
        $num_rows=$values['total'];
        echo "<h3>",$num_rows,"</h3>";
         ?> 
         </div>

        </div>
<!---------------------------------------------------------------------------------------------------------------------------->
        <div class="bg_counter col-sm-12" style=" box-shadow: 5px 4px 5px gray; text-align:left; margin-top: 1%;">
        
        <div class="col-lg-9" style="font-size: 20px; margin-top: 4%;">Number of Christening Photos: </div>

        <div class="col-lg-1">
        <?php 
        $con=mysqli_connect('localhost','root','','db_upload');

        $sql="SELECT count(id) AS total FROM tbl_christeningphotos";
        $result= mysqli_query($con,$sql);
        $values=mysqli_fetch_assoc($result);
        $num_rows=$values['total'];
        echo "<h3>",$num_rows,"</h3>";
         ?> 
         </div>

        </div>
<!---------------------------------------------------------------------------------------------------------------------------->
        <div class="bg_counter col-sm-12" style=" box-shadow: 5px 4px 5px gray; text-align:left; margin-top: 1%;">
        
        <div class="col-lg-9" style="font-size: 20px; margin-top: 4%;">Number of Wedding Photos: </div>

        <div class="col-lg-1">
        <?php 
        $con=mysqli_connect('localhost','root','','db_upload');

        $sql="SELECT count(id) AS total FROM tbl_weddingphotos";
        $result= mysqli_query($con,$sql);
        $values=mysqli_fetch_assoc($result);
        $num_rows=$values['total'];
        echo "<h3>",$num_rows,"</h3>";
         ?> 
         </div>

        </div>
<!---------------------------------------------------------------------------------------------------------------------------->
        <div class="bg_counter col-sm-12" style=" box-shadow: 5px 4px 5px gray; text-align:left; margin-top: 1%;">
        
        <div class="col-lg-9" style="font-size: 20px; margin-top: 4%;">Number of Birthday Photos: </div>

        <div class="col-lg-1">
        <?php 
        $con=mysqli_connect('localhost','root','','db_upload');

        $sql="SELECT count(id) AS total FROM tbl_birthdayphotos";
        $result= mysqli_query($con,$sql);
        $values=mysqli_fetch_assoc($result);
        $num_rows=$values['total'];
        echo "<h3>",$num_rows,"</h3>";
         ?> 
         </div>

        </div>
<!---------------------------------------------------------------------------------------------------------------------------->
        <div class="bg_counter col-sm-12" style=" box-shadow: 5px 4px 5px gray; text-align:left; margin-top: 1%;">
        
        <div class="col-lg-9" style="font-size: 20px; margin-top: 4%;">Number of Debut Photos: </div>

        <div class="col-lg-1">
        <?php 
        $con=mysqli_connect('localhost','root','','db_upload');

        $sql="SELECT count(id) AS total FROM tbl_debutphotos";
        $result= mysqli_query($con,$sql);
        $values=mysqli_fetch_assoc($result);
        $num_rows=$values['total'];
        echo "<h3>",$num_rows,"</h3>";
         ?> 
         </div>

        </div>
<!--end-->
      </div>


<div class=" col-lg-6" style="margin-top: 2%;margin-bottom: 2%;">
        <h2>VIDEOS</h2>
<!--start-->
        <div class="bg_counter col-sm-12" style=" box-shadow: 5px 4px 5px gray; text-align:left; ">
        
        <div class="col-lg-9" style="font-size: 20px; margin-top: 4%;">Number of Reunion Videos: </div>

        <div class="col-lg-1">
        <?php 
        $con=mysqli_connect('localhost','root','','db_upload');

        $sql="SELECT count(id) AS total FROM tbl_reunionvideos";
        $result= mysqli_query($con,$sql);
        $values=mysqli_fetch_assoc($result);
        $num_rows=$values['total'];
        echo "<h3>",$num_rows,"</h3>";
         ?> 
         </div>

        </div>
<!---------------------------------------------------------------------------------------------------------------------------->
        <div class="bg_counter col-sm-12" style=" box-shadow: 5px 4px 5px gray; text-align:left; margin-top: 1%;">
        
        <div class="col-lg-9" style="font-size: 20px; margin-top: 4%;">Number of Christening Videos: </div>

        <div class="col-lg-1">
        <?php 
        $con=mysqli_connect('localhost','root','','db_upload');

        $sql="SELECT count(id) AS total FROM tbl_christeningvideos";
        $result= mysqli_query($con,$sql);
        $values=mysqli_fetch_assoc($result);
        $num_rows=$values['total'];
        echo "<h3>",$num_rows,"</h3>";
         ?> 
         </div>

        </div>
<!---------------------------------------------------------------------------------------------------------------------------->
        <div class="bg_counter col-sm-12" style=" box-shadow: 5px 4px 5px gray; text-align:left; margin-top: 1%;">
        
        <div class="col-lg-9" style="font-size: 20px; margin-top: 4%;">Number of Wedding Videos: </div>

        <div class="col-lg-1">
        <?php 
        $con=mysqli_connect('localhost','root','','db_upload');

        $sql="SELECT count(id) AS total FROM tbl_weddingvideos";
        $result= mysqli_query($con,$sql);
        $values=mysqli_fetch_assoc($result);
        $num_rows=$values['total'];
        echo "<h3>",$num_rows,"</h3>";
         ?> 
         </div>

        </div>
<!---------------------------------------------------------------------------------------------------------------------------->
        <div class="bg_counter col-sm-12" style=" box-shadow: 5px 4px 5px gray; text-align:left; margin-top: 1%;">
        
        <div class="col-lg-9" style="font-size: 20px; margin-top: 4%;">Number of Birthday Videos: </div>

        <div class="col-lg-1">
        <?php 
        $con=mysqli_connect('localhost','root','','db_upload');

        $sql="SELECT count(id) AS total FROM tbl_birthdayvideos";
        $result= mysqli_query($con,$sql);
        $values=mysqli_fetch_assoc($result);
        $num_rows=$values['total'];
        echo "<h3>",$num_rows,"</h3>";
         ?> 
         </div>

        </div>
<!---------------------------------------------------------------------------------------------------------------------------->
        <div class="bg_counter col-sm-12" style=" box-shadow: 5px 4px 5px gray; text-align:left; margin-top: 1%;">
        
        <div class="col-lg-9" style="font-size: 20px; margin-top: 4%;">Number of Debut Videos: </div>

        <div class="col-lg-1">
        <?php 
        $con=mysqli_connect('localhost','root','','db_upload');

        $sql="SELECT count(id) AS total FROM tbl_debutvideos";
        $result= mysqli_query($con,$sql);
        $values=mysqli_fetch_assoc($result);
        $num_rows=$values['total'];
        echo "<h3>",$num_rows,"</h3>";
         ?> 
         </div>

        </div>

      </div>      
      <!--end-->

      <div class=" col-lg-6" style="margin-top: 2%;margin-bottom: 2%;">
        <h2>PACKAGES</h2>
<!--start-->
        <div class="bg_counter col-sm-12" style=" box-shadow: 5px 4px 5px gray; text-align:left; ">
        
        <div class="col-lg-9" style="font-size: 20px; margin-top: 4%;">Number of Packages: </div>

        <div class="col-lg-1">
        <?php 
        $con=mysqli_connect('localhost','root','','db_upload');

        $sql="SELECT count(id) AS total FROM tbl_packages";
        $result= mysqli_query($con,$sql);
        $values=mysqli_fetch_assoc($result);
        $num_rows=$values['total'];
        echo "<h3>",$num_rows,"</h3>";
         ?> 
         </div>

        </div>

      </div>      
 <!--end-->  
    </div>
  </form>

</body>
</html>





 