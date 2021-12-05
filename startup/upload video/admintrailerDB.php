<?php include 'processDB.php'; ?>
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
</style>
</head>


<body>


    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
    
      <!-- Modal content-->
      <div class="modal-content" style="padding: 5%">
        <div class="modal-header">
            <h4 class="modal-title" style="margin-left: 110px;"><img src="img/artisano.png" style="height:60% ;width:70%;"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>  
        </div>

       <div class="col-sm-12" id="Reserve" style="margin-top: 3%;">
                <form method="post" class="jumbotron">

                    <?php include 'createacc.php'; ?>
                </form>
            </div>

      </div>
      
    </div>
  </div>
<!-- end modal -->


  
  <!-- The sidebar -->
<div class="sidebar">
  <div style="text-align: center; background-color: lightgray;"><img src="img/artisano.png" style="width:150px ;height:60px; margin-top: 20px; margin-bottom: 20px;"></div>
 <a href="admin.php"><img src="img/dashboard.png" style="width:30px;height:30px; margin-right: 10%;">Dashboard</a>

  <a href="adminphotoRE.php" style="color: gray;"><img src="img/photo.png" style="width:30px;height:30px; margin-right: 10%;"> Photos</a>

  <a href="admintrailerRE.php" style="color: white; background-color: lightgray;"><img src="img/trailer.png" style="width:30px;height:30px; margin-right: 10%;">Trailers</a>
  <a href="adminhighRE.php" style="color: gray;"><img src="img/highlight.png" style="width:30px;height:30px; margin-right: 10%;">Highlights</a>

  <a href="messages.php" style="color: gray;"><img src="img/messages.png" style="width:30px;height:30px; margin-right: 10%;">Messages</a>

  <a href="packagesadmin.php" style="color: gray;"><img src="img/package.png" style="width:30px;height:30px; margin-right: 10%;">Packages</a>

  <a href="class" btn btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="color: gray;"><img src="img/account.png" style="width:30px;height:30px; margin-right: 10%;">Create Account</a>
</div>


<!-- Page content -->
<div class="content">
  <div class="col-sm-12" style="text-align: center; font-size: 2em;">TRAILERS</div> 
  <div class="menu" style="text-align: center; padding-bottom: 1%;">
  
      <a href="admintrailerRE.php"><button class="btn btn-outline-secondary" type="button">Reunion</button></a>
      <a href="admintrailerCH.php"><button class="btn btn-outline-secondary" type="button">Christening</button></a>
      <a href="admintrailerWED.php"><button class="btn btn-outline-secondary" type="button">Wedding</button></a>
      <a href="admintrailerBD.php"><button class="btn btn-outline-secondary" type="button">Birthday</button></a>
      <a href="admintrailerDB.php"><button class="btn btn-outline-secondary active" type="button">Debut</button></a>
    <hr>
  </div>


 <!-- input upload --> 
 <form method="POST" action="admintrailerDB.php" enctype="multipart/form-data">
<div class="col-lg-4" style="background-color: lightgray; padding: 1%; border-radius: 10px;">
  
  <form class="md-form" action="#" >
    <div class="file-field" >
      <div class="btn btn-outline-white btn-rounded waves-effect" >
        <input type="file" multiple name="video">
      </div>
      
      <input type="text" required="" name="video_text" class="form-control" input type="text" placeholder="Album Name">
    
    </div>
  </form>
 
  <div class="input-group-append" style="margin-top: 5px;">
    <button class="btn btn-outline-secondary btn-block" type="submit" name="Upload" style="border: solid 1px;">Upload</button>
  </div>

</div>

<div class="col-sm-12"><hr></div>

 <?php while ($row4 = mysqli_fetch_array($result4)):?>
  <div class="gallery col-sm-6" style=" margin: 10px; width: 325px; height: 270px; border: 1px solid gray; padding: 1%;">
  <table>
    <thead>
      <td>
        <tr><video style="width: 300px; height: 250px" controls="mouse-over"><?php echo "<source src='debutvideos/".$row4['videos']."' >"; ?></video></tr>
        <tr><?php echo "<p>" .$row4['video_text']."</p>"; ?></tr>
      </td>
      <td>
          <a href="" class="btn btn-danger" name="delet">Delete</a>
      </td>
    </thead>
  </table>
</div>
<?php endwhile; ?>
</form>
</div>
</div>  

</div>
</div>	



</body>
</html>