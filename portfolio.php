<!DOCTYPE html>
<html>
  <title>Portfolio</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- inline css here -->
  <style type="text/css">
    body{
      background-color: whitesmoke;
    }
  </style>
<body id="myPage">



  <!-- Navbar -->
  <div class="w3-top">
   <div class="w3-bar w3-theme-d2 w3-left-align">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
    <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Team</a>
    <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Price</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    <a href="index.php" style="float: right; text-decoration: none; margin-right: 20px; margin-top: 10px">Back</a>
    </div>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
   </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
      <a href="#team" class="w3-bar-item w3-button">Team</a>
      <a href="#work" class="w3-bar-item w3-button">Work</a>
      <a href="#pricing" class="w3-bar-item w3-button">Price</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
      <a href="#" class="w3-bar-item w3-button">Search</a>
    </div>
  </div>

  <!-- Image Header -->
  <div class="w3-display-container w3-animate-opacity">
    <img title="Scroll down please" src="image/homeback.jpeg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
    <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
      <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">Requirement Tracking and Traceability Matrix</button>
    </div>
  </div>


  <!-- Team Container -->
  <div class="w3-container w3-padding-64 w3-center" id="team">
  <h2>OUR TEAM</h2>
  <p>Meet the team - our office rats:</p>

  <div class="w3-row"><br>

  <div style="margin-left: 150px" class="w3-quarter">
    <img src="image/11.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
    <h3>Sagor Askar</h3>
    <p>Web Designer & Developer</p>
  </div>

  <div class="w3-quarter">
    <img src="image/12.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
    <h3>Nadim ZX</h3>
    <p>Techniqal Support</p>
  </div>

  <div class="w3-quarter">
    <img src="image/14.jpg" alt="Boss" style="width: 45%" class="w3-circle w3-hover-opacity">
    <h3>Prome Mehbub</h3>
    <p>Quality Tester</p>
  </div>

  </div>
  </div>


  <!-- Pricing Row -->
  <div class="w3-row-padding w3-center w3-padding-64" id="pricing">
      <h2>PRICING</h2>
      <p>Choose a pricing plan for hosting that fits customer needs.</p><br>
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-hover-shadow">
          <li class="w3-theme">
            <p class="w3-xlarge">Basic</p>
          </li>
          <li class="w3-padding-16"><b>10GB</b> Storage</li>
          <li class="w3-padding-16"><b>10</b> Emails</li>
          <li class="w3-padding-16"><b>10</b> Domains</li>
          <li class="w3-padding-16"><b>Endless</b> Support</li>
          <li class="w3-padding-16">
            <h2 class="w3-wide"><i class="fa fa-usd"></i> 10</h2>
            <span class="w3-opacity">per month</span>
          </li>
        </ul>
      </div>

      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-hover-shadow">
          <li class="w3-theme-l2">
            <p class="w3-xlarge">Pro</p>
          </li>
          <li class="w3-padding-16"><b>25GB</b> Storage</li>
          <li class="w3-padding-16"><b>25</b> Emails</li>
          <li class="w3-padding-16"><b>25</b> Domains</li>
          <li class="w3-padding-16"><b>Endless</b> Support</li>
          <li class="w3-padding-16">
            <h2 class="w3-wide"><i class="fa fa-usd"></i> 25</h2>
            <span class="w3-opacity">per month</span>
          </li>
        </ul>
      </div>

      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-hover-shadow">
          <li class="w3-theme">
            <p class="w3-xlarge">Premium</p>
          </li>
          <li class="w3-padding-16"><b>50GB</b> Storage</li>
          <li class="w3-padding-16"><b>50</b> Emails</li>
          <li class="w3-padding-16"><b>50</b> Domains</li>
          <li class="w3-padding-16"><b>Endless</b> Support</li>
          <li class="w3-padding-16">
            <h2 class="w3-wide"><i class="fa fa-usd"></i> 50</h2>
            <span class="w3-opacity">per month</span>
          </li>
        </ul>
      </div>
  </div>

  <!-- Contact Container -->
  <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
    <div class="w3-row">
      <div class="w3-col m5">
      <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
        <h3>Address</h3>
        <p>Swing by for a cup of coffee, or whatever.</p>
        <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  74/A, Green Road, Farmgate, Dhaka-1215</p>
        <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
        <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  abcd@gmail.com</p>
      </div>
      <div class="w3-col m7">
        <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="" target="_blank"> <!-- action a email send er kaj ta kore dilei hobe -->
        <div class="w3-section">      
          <label>Name</label>
          <input class="w3-input" type="text" name="Name" required>
        </div>
        <div class="w3-section">      
          <label>Email</label>
          <input class="w3-input" type="text" name="Email" required>
        </div>
        <div class="w3-section">      
          <label>Message</label>
          <input class="w3-input" type="text" name="Message" required>
        </div>  
        <input class="w3-check" type="checkbox" checked name="Like">
        <label>I Like it!</label>
        <button title="this is under construction" type="submit" class="w3-button w3-right w3-theme">Send</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Image of location/map -->
  <img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
    <h4>Follow Us</h4>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
    <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
    <p>@all rights researved</p>

    <!-- Top going arrow -->
    <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
      <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
      <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
      <i class="fa fa-chevron-circle-up"></i></span></a>
    </div>
  </footer>

    <script>
      // Script for side navigation
      function w3_open() {
        var x = document.getElementById("mySidebar");
        x.style.width = "300px";
        x.style.paddingTop = "10%";
        x.style.display = "block";
      }

      // Close side navigation
      function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
      }

      // Used to toggle the menu on smaller screens when clicking on the menu button
      function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
        } else { 
          x.className = x.className.replace(" w3-show", "");
        }
      }
    </script>

</body>
</html>
