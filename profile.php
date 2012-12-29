<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CourseFit - Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="./index.php">CourseFit</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="./dashboard.php">Dashboard Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
    	<h1>User Profile</h1>
		<br>
		<form class="well">
    		<h3>User Details</h3>
    		<br>
			<b>Full Name:</b> Mohammad Javed
			<br>
			<br>
			<b>Student Number:</b> 996529472
			<br>
			<br>
			<b>Email:</b> mohammad.javed@utoronto.ca
    	</form>
		<br>
    	<form class="well">
    		<h3>Which area(s) of study are you interested in?</h3>
    		<br>
          <label class="checkbox">
              <input type="checkbox">Photonic and Semiconductor Physics
          </label>
          <label class="checkbox">
              <input type="checkbox">Control, Communications, Signal Processing
          </label>
          <label class="checkbox">
              <input type="checkbox">Electromagnetics and Energy Systems
          </label>
          <label class="checkbox">
              <input type="checkbox">Analog and Digital Electronics
          </label>
          <label class="checkbox">
              <input type="checkbox">Computer Hardware and Computer Networks
          </label>
          <label class="checkbox">
              <input type="checkbox">Software
          </label>
    	</form>

    </div> <!-- /container -->

    <div class="container">
      <a class="btn btn-success btn-large" href="./dashboard.php">Save Changes</a>
      <a class="btn btn-large" href="./dashboard.php">Cancel</a>
    </div>
    <br>
    <br>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
