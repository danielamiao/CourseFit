<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CourseFit - Recommended Courses</title>
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
	<h1> Recommended Course Results </h1>
	<br>
	<h4>These are your recommended courses. Select the recommendations you want to save in your profile.</h4>
	<br>
	<!-- A form area -->
	<form class="well">
		<table class="table table-striped">
			<thead>
			  <tr>
			    <th>#</th>
			    <th>Course Code</th>
			    <th>Course Name</th>
			    <th>Recommended Strength</th>
			    <th style="text-align: center;">Check to save this course</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
			    <td>1</td>
			    <td>ECE361H1</td>
			    <td>Computer Networks I</td>
			    <td>      
				<div class="progress progress-success" style="margin-bottom: 9px;">
				<div class="bar" style="width: 95%"></div>
				</div>
			    </td>
			    <td style="text-align: center;"><input type="checkbox" ></td>
			  </tr>
			  <tr>
			    <td>2</td>
			    <td>CSC444H1</td>
			    <td>Software Engineering I</td>
			    <td>      
				<div class="progress progress-success" style="margin-bottom: 9px;">
				<div class="bar" style="width: 80%"></div>
				</div>
			    </td>
			    <td style="text-align: center;"><input type="checkbox" ></td>
			  </tr>
			  <tr>
			    <td>3</td>
			    <td>ECE466H1</td>
			    <td>Computer Networks II</td>
			    <td>      
				<div class="progress progress-success" style="margin-bottom: 9px;">
				<div class="bar" style="width: 70%"></div>
				</div>
			    </td>
			    <td style="text-align: center;"><input type="checkbox" ></td>
			  </tr>
			  <tr>
			    <td>4</td>
			    <td>ECE461H1</td>
			    <td>Internetworking</td>
			    <td>      
				<div class="progress progress-success" style="margin-bottom: 9px;">
				<div class="bar" style="width: 60%"></div>
				</div>
			    </td>
			    <td style="text-align: center;"><input type="checkbox" ></td>
			  </tr>
			  <tr>
			    <td>5</td>
			    <td>ECE451H1</td>
			    <td>VLSI</td>
			    <td>      
				<div class="progress progress-success" style="margin-bottom: 9px;">
				<div class="bar" style="width: 60%"></div>
				</div>
			    </td>
			    <td style="text-align: center;"><input type="checkbox" ></td>
			  </tr>
			  <tr>
			    <td>6</td>
			    <td>ECE419H1</td>
			    <td>Distributed Systems</td>
			    <td>      
				<div class="progress progress-success" style="margin-bottom: 9px;">
				<div class="bar" style="width: 55%"></div>
				</div>
			    </td>
			    <td style="text-align: center;"><input type="checkbox" ></td>
			  </tr>
			  <tr>
			    <td>7</td>
			    <td>ECE318H1</td>
			    <td>Computer Graphics</td>
			    <td>      
				<div class="progress progress-success" style="margin-bottom: 9px;">
				<div class="bar" style="width: 55%"></div>
				</div>
			    </td>
			    <td style="text-align: center;"><input type="checkbox" ></td>
			  </tr>
			  <tr>
			    <td>8</td>
			    <td>ECE448H1</td>
			    <td>Computer Systems Programming</td>
			    <td>      
				<div class="progress progress-success" style="margin-bottom: 9px;">
				<div class="bar" style="width: 55%"></div>
				</div>
			    </td>
			    <td style="text-align: center;"><input type="checkbox" ></td>
			  </tr>
			  <tr>
			    <td>9</td>
			    <td>CSC343</td>
			    <td>Introduction to Databases</td>
			    <td>      
				<div class="progress progress-success" style="margin-bottom: 9px;">
				<div class="bar" style="width: 50%"></div>
				</div>
			    </td>
			    <td style="text-align: center;"><input type="checkbox" ></td>
			  </tr>
			  <tr>
			    <td>10</td>
			    <td>CSC443</td>
			    <td>Database Systems</td>
			    <td>      
				<div class="progress progress-success" style="margin-bottom: 9px;">
				<div class="bar" style="width: 50%"></div>
				</div>
			    </td>
			    <td style="text-align: center;"><input type="checkbox" ></td>
			  </tr>
			</tbody>
		      </table>

		<a class="btn btn-success btn-large" href="./dashboard.php"> Save selected courses </a>
		<a class="btn btn-large" href="./dashboard.php"> Go back to the Dashboard </a>
	</form>
	
    </div> <!-- /container -->

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
