<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CourseFit - Course Review</title>
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
		<h1>Course Review</h1>
		<br>
		<h4>You must fill out at least ONE review for a past course in order to receive course recommendations.</h4>
		<br>
		<h4>These are your past courses:</h4>
		<br>

		<form class="well" method="link" action="request_recommendation.php">
			<table class="table table-striped">
				<thead>
				  <tr>
	         		<th>Session</th>
				    <th>Course Code</th>
				    <th>Course Name</th>
				    <th>Mark</th>
				    <th>Select to review this course</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td>2008 Fall</td>
				    <td>ECE361H1</td>
				    <td>Computer Networks I</td>
				    <td>95</td>
				    <td><a class="btn btn-mini" href="./review.php">Review</a></td>
				  </tr>
				  <tr>
				    <td>2008 Fall</td>
				    <td>ECE466H1</td>
				    <td>Computer Networks II</td>
				    <td>90</td>
				    <td><a class="btn btn-mini" href="./review.php">Review</a></td>
				  </tr>
				  <tr>
				    <td>2009 Winter</td>
				    <td>CSC444H1</td>
				    <td>Software Engineering I</td>
				    <td>85</td>
				    <td><a class="btn btn-mini" href="./review.php">Review</a></td>
				  </tr>
				  <tr>
				    <td>2009 Fall</td>
				    <td>ECE461H1</td>
				    <td>Internetworking</td>
				    <td>74</td>
				    <td><a class="btn btn-mini" href="./review.php">Review</a></td>
				  </tr>
				  <tr>
				    <td>2009 Winter</td>
				    <td>ECE451H1</td>
				    <td>VLSI</td>
				    <td>87</td>
				    <td><a class="btn btn-mini" href="./review.php">Review</a></td>
				  </tr>
				  <tr>
				    <td>2010 Winter</td>
				    <td>ECE419H1</td>
				    <td>Distributed Systems</td>
				    <td>86</td>
				    <td><a class="btn btn-mini" href="./review.php">Review</a></td>
				  </tr>
				  <tr>
				    <td>2010 Fall</td>
				    <td>ECE318H1</td>
				    <td>Computer Graphics</td>
				    <td>69</td>
				    <td><a class="btn btn-mini" href="./review.php">Review</a></td>
				  </tr>
				  <tr>
				    <td>2011 Winter</td>
				    <td>ECE448H1</td>
				    <td>Computer Systems Programming</td>
				    <td>82</td>
				    <td><a class="btn btn-mini" href="./review.php">Review</a></td>
				  </tr>
				  <tr>
				    <td>2011 Fall</td>
				    <td>CSC343H1</td>
				    <td>Introduction to Databases</td>
				    <td>83</td>
				    <td><a class="btn btn-mini" href="./review.php">Review</a></td>
				  </tr>
				  <tr>
				    <td>2012 Winter</td>
				    <td>CSC443H1</td>
				    <td>Database Systems</td>
				    <td>74</td>
				    <td><a class="btn btn-mini" href="./review.php">Review</a></td>
				  </tr>
				</tbody>
			</table>

			<a class="btn btn-large btn-success" type="submit" href="./dashboard.php"> Go back to the Dashboard </a>
		</form>
	
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>
