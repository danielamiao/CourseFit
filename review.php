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
			<h3>ECE361H1 - Computer Networks I</h3>
			<br>

			<form class="well" method="link" action="request_recommendation.php">
        <h4>Which past courses you took were relevant to this course? Select up to 3 courses and the relevance rating for each:</h4>
        <br>
        <table border="0" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <td class="ss-gridnumbers" style="width: 24%;"></td>
              <td class="ss-gridnumbers" style="width: 6%;"></td>
              <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">Low</label></td>
              <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">Average</label></td>
              <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">High</label></td>
              <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">Very High</label></td>
              <td class="ss-gridnumbers" style="width: 6%;"></td>
            </tr>
          </thead>
          <tbody>
            <div class="errorbox-good">
              <tr class="ss-gridrow ss-grid-row-odd">
          <td class="ss-gridrow ss-leftlabel ss-gridrow-leftlabel" style="width: 24%;">
            <select class="span5">
            <option/>
            <option>ECE361H1 - Computer Networks I</option>
            <option>ECE419H1 - Distributed Systems</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE461H1 - Internetworking</option>
            <option>ECE454H1 - Computer Systems Programming</option>
            </select>
          </td>
          <td class="ss-gridrow" style="width: 6%;"></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.1.group" value="1" class="ss-q-radio" id="group_1_1" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.1.group" value="2" class="ss-q-radio" id="group_1_2" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.1.group" value="3" class="ss-q-radio" id="group_1_3" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.1.group" value="4" class="ss-q-radio" id="group_1_4" ></td>
          <td class="ss-gridrow" style="width: 6%;"></td>
              </tr>
            </div>
            <div class="errorbox-good">
              <tr class="ss-gridrow ss-grid-row-even">
          <td class="ss-gridrow ss-leftlabel ss-gridrow-leftlabel" style="width: 24%;">
            <select class="span5">
            <option/>
            <option>ECE361H1 - Computer Networks I</option>
            <option>ECE419H1 - Distributed Systems</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE461H1 - Internetworking</option>
            <option>ECE454H1 - Computer Systems Programming</option>
            </select>
          </td>
          <td class="ss-gridrow" style="width: 6%;"></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.2.group" value="1" class="ss-q-radio" id="group_2_1" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.2.group" value="2" class="ss-q-radio" id="group_2_2" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.2.group" value="3" class="ss-q-radio" id="group_2_3" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.2.group" value="4" class="ss-q-radio" id="group_2_4" ></td>
          <td class="ss-gridrow" style="width: 6%;"></td>
              </tr>
            </div>
            <div class="errorbox-good">
              <tr class="ss-gridrow ss-grid-row-odd">
          <td class="ss-gridrow ss-leftlabel ss-gridrow-leftlabel" style="width: 24%;">
            <select class="span5">
            <option/>
            <option>ECE361H1 - Computer Networks I</option>
            <option>ECE419H1 - Distributed Systems</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE461H1 - Internetworking</option>
            <option>ECE454H1 - Computer Systems Programming</option>
            </select>
          </td>
          <td class="ss-gridrow" style="width: 6%;"></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.3.group" value="1" class="ss-q-radio" id="group_3_1" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.3.group" value="2" class="ss-q-radio" id="group_3_2" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.3.group" value="3" class="ss-q-radio" id="group_3_3" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.3.group" value="4" class="ss-q-radio" id="group_3_4" ></td>
          <td class="ss-gridrow" style="width: 6%;"></td>
              </tr>
            </div>
          </tbody>
        </table>
        <br>

				<h4>What is the teaching style of this course?</h4>
				<br>
				<table border="0" cellpadding="5" cellspacing="0">
				  <thead>
				    <tr>
				      <td class="ss-gridnumbers" style="width: 24%;"></td>
				      <td class="ss-gridnumbers" style="width: 6%;"></td>
				      <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">Very Low</label></td>
				      <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">Low</label></td>
				      <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">Average</label></td>
				      <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">High</label></td>
				      <td class="ss-gridnumbers" style="width: 12%;"><label class="ss-gridnumber">Very High</label></td>
				      <td class="ss-gridnumbers" style="width: 6%;"></td>
				    </tr>
				  </thead>
				  <tbody>
				    <div class="errorbox-good">
				      <tr class="ss-gridrow ss-grid-row-odd">
					<td class="ss-gridrow ss-leftlabel ss-gridrow-leftlabel" style="width: 24%;">Textbook</td>
					<td class="ss-gridrow" style="width: 6%;"></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.4.group" value="1" class="ss-q-radio" id="group_4_1" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.4.group" value="2" class="ss-q-radio" id="group_4_2" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.4.group" value="3" class="ss-q-radio" id="group_4_3" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.4.group" value="4" class="ss-q-radio" id="group_4_4" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.4.group" value="5" class="ss-q-radio" id="group_4_5" ></td>
					<td class="ss-gridrow" style="width: 6%;"></td>
				      </tr>
				    </div>
				    <div class="errorbox-good">
				      <tr class="ss-gridrow ss-grid-row-even">
					<td class="ss-gridrow ss-leftlabel ss-gridrow-leftlabel" style="width: 24%;">Notes</td>
					<td class="ss-gridrow" style="width: 6%;"></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.5.group" value="1" class="ss-q-radio" id="group_5_1" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.5.group" value="2" class="ss-q-radio" id="group_5_2" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.5.group" value="3" class="ss-q-radio" id="group_5_3" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.5.group" value="4" class="ss-q-radio" id="group_5_4" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.5.group" value="5" class="ss-q-radio" id="group_5_5" ></td>
					<td class="ss-gridrow" style="width: 6%;"></td>
				      </tr>
				    </div>
				    <div class="errorbox-good">
				      <tr class="ss-gridrow ss-grid-row-odd">
					<td class="ss-gridrow ss-leftlabel ss-gridrow-leftlabel" style="width: 24%;">Slides</td>
					<td class="ss-gridrow" style="width: 6%;"></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.6.group" value="1" class="ss-q-radio" id="group_6_1" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.6.group" value="2" class="ss-q-radio" id="group_6_2" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.6.group" value="3" class="ss-q-radio" id="group_6_3" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.6.group" value="4" class="ss-q-radio" id="group_6_4" ></td>
          <td class="ss-gridrow" style="width: 12%;"><input type="radio" name="entry.6.group" value="5" class="ss-q-radio" id="group_6_5" ></td>
					<td class="ss-gridrow" style="width: 6%;"></td>
				      </tr>
				    </div>
				  </tbody>
				</table>
        <br>

        <!--
        <div class="controls">
          <ol>
          <li/><select class="span5">
            <option/>
            <option>ECE361H1 - Computer Networks I</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE461H1 - Internetworking</option>
            <option>ECE466H1 - Computer Networks II</option>
          </select>
          <li/><select class="span5">
            <option/>
            <option>ECE361H1 - Computer Networks I</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE461H1 - Internetworking</option>
            <option>ECE466H1 - Computer Networks II</option>
          </select>
          <li/><select class="span5">
            <option/>
            <option>ECE361H1 - Computer Networks I</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE461H1 - Internetworking</option>
            <option>ECE466H1 - Computer Networks II</option>
          </select>
          <li/><select class="span5">
            <option/>
            <option>ECE361H1 - Computer Networks I</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE461H1 - Internetworking</option>
            <option>ECE466H1 - Computer Networks II</option>
          </select>
          <li/><select class="span5">
            <option/>
            <option>ECE361H1 - Computer Networks I</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE466H1 - Computer Networks II</option>
            <option>ECE461H1 - Internetworking</option>
            <option>ECE466H1 - Computer Networks II</option>
          </select>
          </ol>
        </div>
        -->

				<h4>Do you recommend this course to other students?</h4>
		<br>
        <div class="controls">
          <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Yes
          </label>
          <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">No
          </label>
          <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">No opinion
          </label>
        </div>
        <br>
        <a class="btn btn-success btn-large" type="submit" href="./course_review.php"> Save </a>
        <a class="btn btn-large" type="submit" href="./course_review.php"> Cancel </a>
			</form>
	
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>
