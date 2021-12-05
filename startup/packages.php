<?php include 'process.php'; ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Artisano</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="bootstrap/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- CSS here -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1/js/bootstrap.min.js">
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
            font-family: Arial, Helvetica, serif;
            font-size: 1em;
        }   

        .header-area{
            box-shadow: 5px 5px 10px grey;

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
  margin: 10px;
  width: auto;
  height: auto;
  padding: 1%;
}

div.gallery img {
  width: 400px;
  height: 300px;

}
    


   </style>
</head>

<body>
   
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
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        
                                        <li><a href="#"><h4>Reunion</h4></a>
                                            <ul class="submenu">
                                                <li><a href="home.php">Photos</a></li>
                                                <li><a href="HOMEReunionVID.php">Videos</a></li>
                                                
                                            </ul>
                                        </li>

                                        <li><a href="#"><h4>Christening</h4></a>
                                            <ul class="submenu">
                                                <li><a href="HOMEChristeningPH.php">Photos</a></li>
                                                <li><a href="HOMEChristeningVID.php">Videos</a></li>
                                                
                                            </ul>
                                        </li>

                                        <li><a href="#"><h4>Wedding</h4></a>
                                            <ul class="submenu">
                                                <li><a href="HOMEWeddingPH.php">Photos</a></li>
                                                <li><a href="HOMEWeddingVID.php">Videos</a></li>
                                                
                                            </ul>
                                        </li>

                                        <li><a href="#"><h4>Birthday</h4></a>
                                            <ul class="submenu">
                                                <li><a href="HOMEBirthdayPH.php">Photos</a></li>
                                                <li><a href="HOMEBirthdayVID.php">Videos</a></li>
                                                
                                            </ul>
                                        </li>

                                        <li><a href="#"><h4>Debut</h4></a>
                                            <ul class="submenu">
                                                <li><a href="HOMEDebutPH.php">Photos</a></li>
                                                <li><a href="HOMEDebutVID.php">Videos</a></li>
                                                
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
                                        <span><a href="https://web.facebook.com/?_rdc=1&_rdr"> Facebook</a></span>
                                    </button>
                                    <button type="button" class="but btn-fb btn-hover">
                                        <i class="fab"></i>
                                        <a href="https://www.instagram.com/">Instagram</a>
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
        </div>
    </header>
    <!-- header-end -->

    <!-- portfolio_image_area  -->

    <div class="portfolio_image_area" >
        <div class="container" style="text-align: center;">
            
        <div class="col-sm-12" style="background-color: lightgray; padding: 1%; border-radius: 1%;">
                
   

    <div class="wed_packages" id="Package_content" >
        
    <?php while ($row = mysqli_fetch_array($resultas)):?>
  <div class="gallery col-lg-5 col-md-5 col-lg-5" style="background-color: white; border-radius: 2%;padding: 1%; box-shadow: 5px 5px 10px gray;margin: 4%; height: auto;">
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
          <button  class="btn btn-success btn-block" style="margin-top: 5%;" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" href="reserve.php?resrv=<?php echo $row['id']; ?>" >Reserve</button>
        </td> 

    </thead>
  </table>
</div>
   
<?php endwhile; ?>                      
    </div>
            
    </div>
    </div>


    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
      <!-- Modal content-->
      <div class="modal-content" style="padding: 5%">
        
        <?php while ($row = mysqli_fetch_array($resultas)):?>
        
        <?php include 'reserve.php';  ?>
        
        <?php endwhile; ?> 

        </div>
      

    </div>
  </div>

 
    <!-- footer start -->
    <footer style="bottom: 0; width: 100%; position: fixed;">
                    
                    <div style="text-align: center; background-color: #343333; width: 100%;">
                        
                        <th>    
                        <tr><a href="about.php" style="font-size: 1.2em;">About</a></tr>
                        </th>
                    </div>  
            </footer>

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


    


</body>

</html> 