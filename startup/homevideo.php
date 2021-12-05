<?php include 'process.php'; ?>
<?php include 'processCH.php';?>
<?php include 'processBD.php';?>
<?php include 'processWED.php';?>
<?php include 'processDB.php';?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Artisano</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <!-- CSS here -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

   
    <style type="text/css">

        body{
            background-color: white;
        }

        h4{
            font-family: Arial, Helvetica;
            font-size: 1em;
        }   

        .header-area{
            box-shadow: 5px 5px 6px grey;

        }
        .footer{
            box-shadow: 10px 10px 10px grey;
        }
        .main-menu h4{
            color: white; 
        }
        .nav th{
            color: white;
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
  margin: 3px;
  width: auto;
  height: auto;
  text-align: center;
}

div.gallery img {
  width: 400px;
  height: 400px;

}
            


   </style>
</head>
  
<body>
   <form>

    <header>

        <div class="header-area" style="background-color: #343333;">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">

                         <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="home.php">
                                     <img src="img/artisano.png" style="height: 80px;width: 200px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu d-none d-lg-block text-center">
                                <nav>
                                    
                                    <ul id="navigation">

                                        
                                        <li><a href="#"><h4>Reunion</h4></a>
                                            <ul class="submenu">
                                                <li><a href="HOMEReunionPH.php">Photos</a></li>
                                                <li><a href="home.php">Videos</a></li>
                                                
                                            </ul>
                                        </li>

                                        <li><a href="#"><h4>Christening</h4></a>
                                            <ul class="submenu">
                                                <li><a href="HOMEChristeningPH.php">Photos</a></li>
                                                <li><a href="home.php">Videos</a></li>
                                                
                                            </ul>
                                        </li>

                                        <li><a href="#"><h4>Wedding</h4></a>
                                            <ul class="submenu">
                                                <li><a href="HOMEWeddingPH.php">Photos</a></li>
                                                <li><a href="home.php">Videos</a></li>
                                                
                                            </ul>
                                        </li>

                                        <li><a href="#"><h4>Birthday</h4></a>
                                            <ul class="submenu">
                                                <li><a href="HOMEBirthdayPH.php">Photos</a></li>
                                                <li><a href="home.php">Videos</a></li>
                                                
                                            </ul>
                                        </li>

                                        <li><a href="#"><h4>Debut</h4></a>
                                            <ul class="submenu">
                                                <li><a href="HOMEDebutPH.php">Photos</a></li>
                                                <li><a href="home.php">Videos</a></li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>        
                            </div>
                        </div>

                        <div class="col-lg-2" style="text-align: center;">
                                <th>
                                   <a href="packages.php"><button type="button" class="but btn-hover">
                                        <i class="fab"></i>
                                        <span>Packages</span></button></a>
                                </th>

            

                        </div>

                        <div class="col-lg-2 d-none d-lg-block" style="background-color: white;padding: 10px; border-radius: 3%;">
                                <th>
                                    <tr><p style="margin-right: 15px;"> <i class="fa fa-phone"></i>(+639871736281)</p></tr>
                                </th>
                                <th>
                                   <button type="button" class="but btn-fb btn-hover">
                                        <i class="fab"></i>
                                        <span>Facebook</span>
                                    </button>
                                    <button type="button" class="but btn-fb btn-hover">
                                        <i class="fab"></i>
                                        <span>Instagram</span>
                                    </button>
                                </th>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    
    </header>
    <!-- header-end -->

    <!-- portfolio_image_area  -->
    <form method="POST" action="homevideo.php" enctype="multipart/form-data">
    <div class="portfolio_image_area" >
        <div class="container col-sm-12">       


<div style="text-align: center;">
      <a href="home.php"><button class="btn btn-success"type="button" style="font-size: 20px;">PHOTOS</button></a>
      <a href="homevideo.php"><button class="btn btn-success active" type="button" style="font-size: 20px;">VIDEOS</button></a>
</div>
<!--video-->
<?php while ($row = mysqli_fetch_array($resultVidRE)):?>
  <div class="gallery col-sm-6">
  <table>
    <thead>
      <td>
        <tr><video style="width: 400px; height: 400px" controls="mouse-over"><?php echo "<source src='reunionvideos/".$row['videos']."' >"; ?></video></tr>
        <tr><?php echo "<p>" .$row['video_text']."</p>"; ?></tr>
      </td>
    </thead>
  </table>
</div>
<?php endwhile; ?>


<?php while ($row1 = mysqli_fetch_array($resultvidCH)):?>
  <div class="gallery col-sm-6">
  <table>
    <thead>
      <td>
        <tr><video style="width: 400px; height: 400px" controls="mouse-over"><?php echo "<source src='christeningvideos/".$row1['videos']."' >"; ?></video></tr>
        <tr><?php echo "<p>" .$row1['video_text']."</p>"; ?></tr>
      </td>
    </thead>
  </table>
</div>
<?php endwhile; ?>

<?php while ($row2 = mysqli_fetch_array($result2)):?>
  <div class="gallery col-sm-6">
  <table>
    <thead>
      <td>
        <tr><video style="width: 400px; height: 400px" controls="mouse-over"><?php echo "<source src='birthdayvideos/".$row2['videos']."' >"; ?></video></tr>
        <tr><?php echo "<p>" .$row2['video_text']."</p>"; ?></tr>
      </td>
    </thead>
  </table>
</div>
<?php endwhile; ?>

<?php while ($row3 = mysqli_fetch_array($result3)):?>
  <div class="gallery col-sm-6">
  <table>
    <thead>
      <td>
        <tr><video style="width: 400px; height: 400px" controls="mouse-over"><?php echo "<source src='weddingvideos/".$row3['videos']."' >"; ?></video></tr>
        <tr><?php echo "<p>" .$row3['video_text']."</p>"; ?></tr>
      </td>
    </thead>
  </table>
</div>
<?php endwhile; ?>

<?php while ($row4 = mysqli_fetch_array($result4)):?>
  <div class="gallery col-sm-6">
  <table>
    <thead>
      <td>
        <tr><video style="width: 400px; height: 400px" controls="mouse-over"><?php echo "<source src='debutvideos/".$row4['videos']."' >"; ?></video></tr>
        <tr><?php echo "<p>" .$row4['video_text']."</p>"; ?></tr>
      </td>
    </thead>
  </table>
</div>
<?php endwhile; ?>
<!--video-->

        </div>
    </div>
</form>
 
    <!-- Modal -->
  <div class="modal fade" id="reserveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
      <!-- Modal content-->
      <div class="modal-content" style="padding: 5%">
        <div class="modal-header">
            <h4 class="modal-title" style="margin-left: 110px;"><img src="img/artisano.png" style="height:60% ;width:70%;"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>  
        </div>

        <?php include 'reserve.php';  ?>
        
        </div>
      
    </div>
  </div>
  


    <!-- footer start -->
    <div style="bottom: 0; width: 100%; position: fixed;">
                    
                    <div style="text-align: center; background-color: #343333;width: 100%;">
                        
                        <th>                    
                        <tr><a href="home.php" style="font-size: 1.2em;">About</a></tr>
                        </th>
                    </div>  
            </div>




    <!--/ footer end  -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


    </form>


</body>

</html> 