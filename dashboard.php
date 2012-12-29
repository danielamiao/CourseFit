<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CourseFit - Dashboard</title>
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

    <div class="container-fluid">
	<h1>Welcome, Mohammad! <a class="btn btn-info" href="./profile.php"> Edit Your Profile &raquo; </a>   </h1>
	<br>
	<div class="row-fluid">
		<div class="well span6">
			<h2>Search Parameters</h2>
			<br>
			<h4>What type(s) of courses are you looking for today?</h4>
	    		<br>
			  <label class="checkbox">
			      <input type="checkbox" >Photonic and Semiconductor Physics
			  </label>
			  <label class="checkbox">
			      <input type="checkbox" >Control, Communications, Signal Processing
			  </label>
			  <label class="checkbox">
			      <input type="checkbox" >Electromagnetics and Energy Systems
			  </label>
			  <label class="checkbox">
			      <input type="checkbox" >Analog and Digital Electronics
			  </label>
			  <label class="checkbox">
			      <input type="checkbox" checked >Computer Hardware and Computer Networks
			  </label>
			  <label class="checkbox">
			      <input type="checkbox" checked >Software
			  </label>
			<br>
			<h4>Which learning style(s) do you prefer?</h4>
			<br>
			<table border="0" cellpadding="5" cellspacing="0">
			  <thead>
			    <tr>
			      <td class="ss-gridnumbers" style="width: 24%;"></td>
			      <td class="ss-gridnumbers" style="width: 6%;"></td>
			      <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">1</label></td>
			      <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">2</label></td>
			      <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">3</label></td>
			      <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">4</label></td>
			      <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">5</label></td>
			      <td class="ss-gridnumbers" style="width: 6%;"></td>
			    </tr>
			  </thead>
			  <tbody>
			    <div class="errorbox-good">
			      <tr class="ss-gridrow ss-grid-row-odd">
				<td class="ss-gridrow ss-leftlabel ss-gridrow-leftlabel" style="width: 24%;">Lectures</td>
				<td class="ss-gridrow" style="width: 6%;"></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.1.group" value="1" class="ss-q-radio" id="group_1_1" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.1.group" value="2" class="ss-q-radio" id="group_1_2" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.1.group" value="3" class="ss-q-radio" id="group_1_3" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.1.group" value="4" class="ss-q-radio" id="group_1_4" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.1.group" value="5" class="ss-q-radio" id="group_1_5" checked ></td>
				<td class="ss-gridrow" style="width: 6%;"></td>
			      </tr>
			    </div>
			    <div class="errorbox-good">
			      <tr class="ss-gridrow ss-grid-row-even">
				<td class="ss-gridrow ss-leftlabel ss-gridrow-leftlabel" style="width: 24%;">Labs</td>
				<td class="ss-gridrow" style="width: 6%;"></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.2.group" value="1" class="ss-q-radio" id="group_2_1" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.2.group" value="2" class="ss-q-radio" id="group_2_2" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.2.group" value="3" class="ss-q-radio" id="group_2_3" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.2.group" value="4" class="ss-q-radio" id="group_2_4" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.2.group" value="5" class="ss-q-radio" id="group_2_5" checked ></td>
				<td class="ss-gridrow" style="width: 6%;"></td>
			      </tr>
			    </div>
			    <div class="errorbox-good">
			      <tr class="ss-gridrow ss-grid-row-odd">
				<td class="ss-gridrow ss-leftlabel ss-gridrow-leftlabel" style="width: 24%;">Tutorials</td>
				<td class="ss-gridrow" style="width: 6%;"></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.3.group" value="1" class="ss-q-radio" id="group_3_1" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.3.group" value="2" class="ss-q-radio" id="group_3_2" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.3.group" value="3" class="ss-q-radio" id="group_3_3" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.3.group" value="4" class="ss-q-radio" id="group_3_4" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.3.group" value="5" class="ss-q-radio" id="group_3_5" checked ></td>
				<td class="ss-gridrow" style="width: 6%;"></td>
			      </tr>
			    </div>
			  </tbody>
			</table>
			<br>
			<h4>Which teaching style(s) do you prefer?</h4>
			<br>
			<table border="0" cellpadding="5" cellspacing="0">
			  <thead>
			    <tr>
			      <td class="ss-gridnumbers" style="width: 24%;"></td>
			      <td class="ss-gridnumbers" style="width: 6%;"></td>
			      <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">1</label></td>
			      <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">2</label></td>
			      <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">3</label></td>
			      <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">4</label></td>
			      <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">5</label></td>
			      <td class="ss-gridnumbers" style="width: 6%;"></td>
			    </tr>
			  </thead>
			  <tbody>
			    <div class="errorbox-good">
			      <tr class="ss-gridrow ss-grid-row-odd">
				<td class="ss-gridrow ss-leftlabel ss-gridrow-leftlabel" style="width: 24%;">Textbook</td>
				<td class="ss-gridrow" style="width: 6%;"></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.5.group" value="1" class="ss-q-radio" id="group_5_1" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.5.group" value="2" class="ss-q-radio" id="group_5_2" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.5.group" value="3" class="ss-q-radio" id="group_5_3" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.5.group" value="4" class="ss-q-radio" id="group_5_4" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.5.group" value="5" class="ss-q-radio" id="group_5_5" checked ></td>
				<td class="ss-gridrow" style="width: 6%;"></td>
			      </tr>
			    </div>
			    <div class="errorbox-good">
			      <tr class="ss-gridrow ss-grid-row-even">
				<td class="ss-gridrow ss-leftlabel ss-gridrow-leftlabel" style="width: 24%;">Notes</td>
				<td class="ss-gridrow" style="width: 6%;"></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.6.group" value="1" class="ss-q-radio" id="group_6_1" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.6.group" value="2" class="ss-q-radio" id="group_6_2" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.6.group" value="3" class="ss-q-radio" id="group_6_3" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.6.group" value="4" class="ss-q-radio" id="group_6_4" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.6.group" value="5" class="ss-q-radio" id="group_6_5" checked ></td>
				<td class="ss-gridrow" style="width: 6%;"></td>
			      </tr>
			    </div>
			    <div class="errorbox-good">
			      <tr class="ss-gridrow ss-grid-row-odd">
				<td class="ss-gridrow ss-leftlabel ss-gridrow-leftlabel" style="width: 24%;">Slides</td>
				<td class="ss-gridrow" style="width: 6%;"></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.7.group" value="1" class="ss-q-radio" id="group_7_1" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.7.group" value="2" class="ss-q-radio" id="group_7_2" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.7.group" value="3" class="ss-q-radio" id="group_7_3" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.7.group" value="4" class="ss-q-radio" id="group_7_4" ></td>
				<td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.7.group" value="5" class="ss-q-radio" id="group_7_5" checked ></td>
				<td class="ss-gridrow" style="width: 6%;"></td>
			      </tr>
			    </div>
			  </tbody>
			</table>
			<br>

        <h4>Recommend me courses like these (select up to 5 courses):</h4>
        <br>
        <div class="controls">
          <ol>
          <li/><select class="span5">
            <option/>
            <option selected="selected">ECE361H1 - Computer Networks I</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE461H1 - Internetworking</option>
            <option>ECE466H1 - Computer Networks II</option>
          </select>
          <li/><select class="span5">
            <option/>
            <option>ECE361H1 - Computer Networks I</option>
            <option selected="selected">ECE466H1 - Computer Networks II</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE461H1 - Internetworking</option>
            <option>ECE466H1 - Computer Networks II</option>
          </select>
          <li/><select class="span5">
            <option/>
            <option>ECE361H1 - Computer Networks I</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option selected="selected">ECE419H1 - Distributed Systems</option>
            <option>ECE461H1 - Internetworking</option>
            <option>ECE466H1 - Computer Networks II</option>
          </select>
          <li/><select class="span5">
            <option/>
            <option>ECE361H1 - Computer Networks I</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option selected="selected">ECE461H1 - Internetworking</option>
            <option>ECE466H1 - Computer Networks II</option>
          </select>
          <li/><select class="span5">
            <option/>
            <option>ECE361H1 - Computer Networks I</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE461H1 - Internetworking</option>
            <option selected="selected">ECE454H1 - Computer Systems Programming</option>
          </select>
          </ol>
        </div>


		      <a class="btn btn-info btn-large" href="./dashboard.php"> Update search settings &raquo; </a>
		</div>
		<div class="well span5">
			<h2>Past Courses Taken</h2>
			<br>
			<p>Here are the most recent courses that you have taken:</p>
			<table class="table table-striped table-bordered">
			<thead>
			  <tr>
			    <th>#</th>
			    <th>Course Code</th>
			    <th>Course Name</th>
			    <th>Mark Obtained</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
			    <td>1</td>
			    <td>ECE353H1</td>
			    <td>Systems Software</td>
			    <td>77</td>
			  </tr>
			  <tr>
			    <td>2</td>
			    <td>ECE159H1</td>
			    <td>Basic Circuit Analysis</td>
			    <td>90</td>
			  </tr>
			  <tr>
			    <td>3</td>
			    <td>ECE466H1</td>
			    <td>Computer Networks II</td>
			    <td>85</td>
			  </tr>
			  <tr>
			    <td>4</td>
			    <td>ECE461H1</td>
			    <td>Internetworking</td>
			    <td>74</td>
			  </tr>
			  <tr>
			    <td>5</td>
			    <td>CSC343H1</td>
			    <td>Introduction to Databases</td>
			    <td>87</td>
			  </tr>
			</tbody>
		      </table>
		      <p>Review courses in order to accumulate credits towards getting more course recommendations.</p>
		      <br>
		      <a class="btn btn-info btn-large" href="./course_review.php"> Review these courses now &raquo; </a>
		</div>
		<div class="well span5">
			<h2>Saved Course Recommendations</h2>
			<br>
			<p>Here are the most recently recommended courses that we have saved for you:</p>
			<table class="table table-striped table-bordered">
			<tbody>
			  <tr>
			    <td>1</td>
			    <td>CSC443H1</td>
			    <td>Database Systems</td>
			  </tr>
			  <tr>
			    <td>2</td>
			    <td>ECE466H1</td>
			    <td>Computer Networks II</td>
			  </tr>
			  <tr>
			    <td>3</td>
			    <td>ECE419H1</td>
			    <td>Distributed Systems</td>
			  </tr>
			  <tr>
			    <td>4</td>
			    <td>ECE461H1</td>
			    <td>Internetworking</td>
			  </tr>
			  <tr>
			    <td>5</td>
			    <td>CSC318H1</td>
			    <td>Interactive Computer Media Design</td>
			  </tr>
			</tbody>
		      </table>
		      <a class="btn btn-info btn-large" href="./feedback.php"> Rate these recommendations now &raquo; </a>
		</div>
		<a class="btn btn-success btn-large span5" href="./recommended_courses.php"> <h2>Get New Course Recommendations Now! </h2></a>
	</div>
	

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
