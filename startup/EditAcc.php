<?php  include'process.php'; 

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

	
	<!-- The sidebar -->
<div class="sidebar" style="background-color: white;">
	<div style="text-align: center; background-color: lightgray;"><img src="img/artisano.png" style="width:150px ;height:60px; margin-top: 20px; margin-bottom: 20px;"></div>


  <a href="adminphotoRE.php" style="color: gray;"><img src="img/photo.png" style="width:30px;height:30px; margin-right: 10%;"> Photos</a>

  <a href="admintrailerRE.php" style="color: gray;"><img src="img/trailer.png" style="width:30px;height:30px; margin-right: 10%;">Videos</a>
 

  <a href="messages.php" style="color: gray;"><img src="img/messages.png" style="width:30px;height:30px; margin-right: 10%;">Reserve</a>

  <a href="packagesadmin.php" style="color: gray;"><img src="img/package.png" style="width:30px;height:30px; margin-right: 10%;">Packages</a>

   
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



<form method="POST" action="EditAcc.php" enctype="multipart/form-data">
  <div class="col-sm-10" style=" text-align: center;margin-top: 2%; margin-left:15%">
      <ul class="col-sm-12" style="background-color: lightgray; height: 100%; border-radius: 1%; margin-left: 11px; box-shadow: 5px 5px 7px grey;">


        <?php
    $connection = mysqli_connect("localhost", "root");
    $db = mysqli_select_db($connection, 'db_upload');
    $u_id = 

    $query = "SELECT * FROM tbl_users WHERE u_id = ". $_SESSION['u_id'];
    $query_run = mysqli_query($connection, $query);
    ?>

        <?php
    if($query_run)
    {
      while($row = mysqli_fetch_array($query_run));
      {       
        ?>
        <div class="col-sm-12"><label><h2>Profile</h2></label></div>

  <div class="col-sm-8" style="background-color: white; margin: 2%;margin-left: 15%; border-radius: 2%;">
    <form method="post" name="form">
    <div class="form-group" style="margin-top: 2%;">
          <form class="md-form" action="process.php" >
       
            <div class="col-sm-4" style="text-align: left; margin-top: 2%;"><label >Username:</label></div>
          <div class="col-sm-8" style="margin-top: 1%;"><input class="form-control" type="text" name="u_Fname" autocomplete="off"
            value="<?php echo $_SESSION['u_Fname']; ?>"></div>
    
         <div class="col-sm-4" style="text-align: left; margin-top: 2%;"><label >Password:</label></div>
          <div class="col-sm-8" style="margin-top: 1%;">
           
            <input class="form-control" type="password" autocomplete="off" id="u_Password" name="u_Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> 
          </div>

          <div class="col-sm-12" id="message">
  <h6>Password must contain the following:</h6>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
        
<script>
var myInput = document.getElementById("u_Password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
           </form>

    </div>
   
    <div class="form-group" >

      <button class="btn btn-success form-control" type="submit" name="updateACC" style="border: solid 1px;margin-top: 2%;">Update</button>
       
      </div>

      <?php include'editaccount.php';
      }
      
    }
    else{
      echo "No Records Found";
    }
    ?>
    

  </form>
  </div>




 
</div>

  
  

</body>
</html>





 