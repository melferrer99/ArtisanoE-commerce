
<?php include 'process.php'; ?>



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

  <a href="admintrailerRE.php" style="color: gray;"><img src="img/trailer.png" style="width:30px;height:30px; margin-right: 10%;">Videos</a>

  <a href="messages.php" style="color: white; background-color: lightgray;"><img src="img/messages.png" style="width:30px;height:30px; margin-right: 10%;">Reserve</a>

  <a href="packagesadmin.php" style="color: gray;"><img src="img/package.png" style="width:30px;height:30px; margin-right: 10%;">Packages</a>

  <a href="class" btn btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="color: gray;"><img src="img/account.png" style="width:30px;height:30px; margin-right: 10%;">Create Account</a>
</div>


<!-- Page content --><!-- content dapat class-->
<div class="container" style="margin-left: 15%;">
  <div class="col-sm-12" style="text-align: center; font-size: 2em;">MESSAGES</div> 

<div class="col-sm-12" style="text-align: center;">
  <a href="messages.php"><button class="btn btn-outline-secondary " type="button">Pending</button></a>
      <a href="messagesApprove.php"><button class="btn btn-outline-secondary active" type="button">Approved</button></a>
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


  <?php while ($rows = mysqli_fetch_assoc($approved)):?>
  <tr>

    <td>
    

       <a class="del_btn btn btn-danger" onclick="javascript:confirmationDelete($(this));return false;" href="process.php?del_Amessage=<?php echo $rows['a_id']; ?>">Delete</a>

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