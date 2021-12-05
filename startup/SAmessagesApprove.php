
<?php include 'SAprocess.php'; 

session_start();
if (!isset($_SESSION['u_Fname'])){
   echo "<script>alert('Login First!'); location.href='login.php';</script>";
 }

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

  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 10px;
  border-color: lightgray;
}
table {
  border-spacing: 5px;
  background-color: #FEF5E7;

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


/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
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
<div class="sidebar">
  <div style="text-align: center; background-color: lightgray;"><img src="img/artisano.png" style="width:150px ;height:60px; margin-top: 20px; margin-bottom: 20px;"></div>
  <a href="SuperAdmin.php" style="color: gray;"><img src="img/dashboard.png" style="width:30px;height:30px; margin-right: 10%;">Dashboard</a>

  <a href="SAadminphotoRE.php" style="color: gray;"><img src="img/photo.png" style="width:30px;height:30px; margin-right: 10%;"> Photos</a>

  <a href="SAadmintrailerRE.php" style="color: gray;"><img src="img/trailer.png" style="width:30px;height:30px; margin-right: 10%;">Videos</a>

  <a href="SAmessages.php" style="color: white; background-color: lightgray;"><img src="img/messages.png" style="width:30px;height:30px; margin-right: 10%;">Reserve</a>

  <a href="SApackagesadmin.php" style="color: gray;"><img src="img/package.png" style="width:30px;height:30px; margin-right: 10%;">Packages</a>

    <a href="createacc.php" btn btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="color: gray;"><img src="img/account.png" style="width:30px;height:30px; margin-right: 10%;">Create Account</a>

    
</div>


<!-- Page content --><!-- content dapat class-->
<div class="container" style="margin-left: 15%;">
   <div class="col-sm-12" style="text-align: center; font-size: 2em;">
    <div class="col-sm-11">MESSAGES</div> 
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
    <a href="SAEditAcc.php">Edit Account</a>
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

<div class="col-sm-12" style="text-align: center; margin-top: 1%;">
  <a href="SAmessages.php"><button class="btn btn-outline-secondary " type="button">Pending</button></a>
      <a href="SAmessagesApprove.php"><button class="btn btn-outline-secondary active" type="button">Approved</button></a>
      <a href="export.php?export=true" type="submit" name="export" class="btn btn-success" style="float: right;" >EXPORT</a>
</div>


 

<div class="col-sm-12" style="margin-top: 2%; text-align: center;">
<table style="width:100%">
  <tr>
    <th></th>
    <th>Name</th>
    <th>Category</th>
    <th>Type</th>
    <th>Address</th>
    <th>Event Place</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Status</th>
  </tr>


  <?php
include 'export.php';
$data = array();
$view_querys = mysqli_query($connection,"SELECT * FROM tbl_approved");

   while ($rows = mysqli_fetch_array($approved)):
     $data = $rows;
    ?>
  <tr>

    <td>
    

       <a class="del_btn btn btn-danger" onclick="javascript:confirmationDelete($(this));return false;" href="SAprocess.php?del_Amessage=<?php echo $rows['a_id']; ?>">Delete</a>

          <script type="text/javascript">
            function confirmationDelete(anchor){
              var conf = confirm('Are you sure want to delete this record?');
            if(conf)
              window.location=anchor.attr("href");
              }
          </script>

    </td>


    <td><?php echo $rows['a_first_name']," ",$rows['a_last_name'];?></td>
    <td><?php echo $rows['a_category'];?></td>
    <td><?php echo $rows['a_type'];?></td>
    <td><?php echo $rows['a_address'];?></td>
    <td><?php echo $rows['a_event'];?></td>
    <td><?php echo $rows['a_event_start'];?></td>
    <td><?php echo $rows['a_event_end'];?></td>
    <td><?php echo $rows['a_email'];?></td>
    <td><?php echo $rows['a_contact'];?></td>
    <td><?php echo $rows['a_approve'];?></td>
  </tr>

<?php endwhile; ?>
</table>
</div>




</div>
</body>
</html>