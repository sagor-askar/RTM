<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "finalproj";
  // connection
  $con = mysqli_connect($servername, $username, $password, $dbname);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Page of Controller</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i|Roboto:400,500" rel="stylesheet">

    <!-- inline css -->
    <style type="text/css">
      .img{
        height: 300px;
        /*position: relative;*/
        text-align: center;
        margin-top: 40px;
        color: white;
      }
      .img .content{
        position: absolute;
        top: 50%;
        left: 55%;
        transform: translate(-50%,-50%);
      }
      .img .content h2{
        color: #d91111;
      }
      .p1{
        font-family: Dibot, serif;
        font-size: 19px;
        color: black;
      }

      /*google chart design*/
      * {
        box-sizing: border-box;
      }
      .column {
        float: left;
        width: 48%;
        padding: 15px;
        height: 300px;
      }
      /*clear floats after columns*/
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      .column2 {
        float: left;
        width: 50%;
        padding: 15px;
        height: 250px;
      }
    </style>

    
  </head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Main -->
        <div id="main">
          <div class="inner">

            <!-- Header -->
            <header id="header">
              <div class="logo">
                <a href="cto.php">RTM</a>
              </div>
            </header>

           <!--  Banner -->
           <div class="img">
             <img src="assets/images/main.jpg" alt="">
             <div class="content">
               <h2>Requirement Tracking Management System</h2>
               <h4 style="text-transform: capitalize; color: white;">Control & Care Your Projects</h4>
             </div>
           </div>
           <br>

          <!-- Services -->
          <section class="services">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-md-4">
                    <div class="service-item first-item">
                      <div class="icon"></div>
                      <h4>Projects</h4>
                      <p>See The Running Project From <a href="cto/cto_run_proj.php">HERE</a></p>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="service-item second-item">
                      <div class="icon"></div>
                      <h4>System Users</h4>
                      <p>Details <a href="system_users/system_users.php">SEE</a></p>
                    </div>
                  </div>

                  
                  <div class="col-md-4">
                    <div class="service-item fivth-item">
                      <div class="icon"></div>
                      <h4>Future Works</h4>
                      <p>See Future Projects from <a href="cto/cto_futureproj.php">HERE</a></p>
                    </div>
                  </div>
                 
                </div>
              </div>
            </section>
            <br>

            <!-- see project information from here -->
            <h3 style="text-align: center; border: 0.1px solid black; padding: 10px; font-size: 20px;"><a href="projectview.php">Project View at a Glance</a></h3>

            <br>
            <br>
     
            <br>
            <!-- logout button here -->
            <div style="float: right; border-radius: 5px;">
              <button><a href="index.php"><b>Logout</b></a></button>
            </div>            



      <!--================ Start Footer Area =================-->
      <footer class="footer-area section-gap">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-6">
              <div class="single-footer-widget">
                <h4>Top Products</h4>
                <ul>
                  <li><a href="#">Managed Website</a></li>
                  <li><a href="#">Manage Reputation</a></li>
                  <li><a href="#">Power Tools</a></li>
                  <li><a href="#">Marketing Service</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
              <div class="single-footer-widget">
                <h4>Features</h4>
                <ul>
                  <li><a href="#">Jobs</a></li>
                  <li><a href="#">Brand Assets</a></li>
                  <li><a href="#">Client Relations</a></li>
                  <li><a href="#">Terms of Service</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
              <div class="single-footer-widget">
                <h4>Resources</h4>
                <ul>
                  <li><a href="#">Guides</a></li>
                  <li><a href="#">Research</a></li>
                  <li><a href="#">Experts</a></li>
                  <li><a href="#">Agencies</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-bottom row align-items-center justify-content-between">
            <p class="footer-text m-0 col-lg-6 col-md-12">Copyright © 2020 All rights reserved | Edited by <a href="https://www.facebook.com/sagor.askar.1">Sagor Askar</a></p>
            <div class="col-lg-6 col-sm-12 footer-social">
              <a href="https://www.facebook.com"><i  style="height: 15px; width: 10px;" class="fa fa-facebook"></i></a>
              <a href="https://www.twitter.com"><i  style="height: 15px; width: 10px;" class="fa fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </footer>
      <!--================ End Footer Area =================-->

          </div>
        </div>

      <!-- Sidebar -->
        <div id="sidebar">

          <div class="inner">

            <!-- Search Box -->
            <section id="search" class="alt">
              <h3 style="margin-left: 20px; margin-top: 10px; color: white; font-size: 28px">Requirement Tracking Management System</h3>
            </section>
              
            <!-- Menu -->
            <nav id="menu">
              <ul>
                <li><a href="cto.php">Homepage</a></li>
               <!-- first span -->
                <li>
                  <span class="opener">See Requirements</span>
                  <ul>
                    <li><a href="requirement/running_project.php">Running Projects</a></li>
                    <li><a href="requirement/future_project.php">Pending Projects</a></li>
                  </ul>
                </li>

              <!-- second span -->
              <li><a href="#">Project Report</a></li>
              <li>
                <span class="opener">Test Case Analysis</span>
                <ul>
                  <li><a href="projectinfo/running_project_analysis.php">Running Projects</a></li>
                  <li><a href="projectinfo/pending_project_analysis.php">Pending Projects</a></li>
                </ul>
              </li>

              <li><a href="cto/cto_matrix.php">Matrix Management</a></li>
                <li><a href="https://www.google.com">External Link</a></li>
              </ul>
            </nav>

            <!-- Featured Posts -->
            <div class="featured-posts">
              <div class="heading">
                <h2>Featured Posts</h2>
              </div>
              <div class="owl-carousel owl-theme">
                <a href="#">
                  <div class="featured-item">
                    <img src="assets/images/featured_post_01.jpg" alt="featured one">
                    <p style="text-align: center;">Go Beyond The Limit</p>
                  </div>
                </a>
                <a href="#">
                  <div class="featured-item">
                    <img src="assets/images/featured_post_02.jpg" alt="featured two">
                    <p>Think Out of The Box.</p>
                  </div>
                </a>
                <a href="#">
                  <div class="featured-item">
                    <img src="assets/images/featured_post_03.jpg" alt="featured three">
                    <p>Happy Coding.</p>
                  </div>
                </a>
              </div>
            </div> 

            

            <!-- Footer -->
            <footer id="footer">
              <p class="copyright">Copyright &copy; 2020 Sagor Askar
              <br>Modified by <a href="https://www.facebook.com/sagor.askar.1">Sagor Askar</a></p>
            </footer>

          </div>
        </div>

    </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
     crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
