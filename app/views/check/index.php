<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="img/icon.png"/>
    <title>Watch Snooker</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/watchsnooker.css" rel="stylesheet">
  </head>
  <body>
    <div class="container content">
      <?php include '../app/views/common/top.php' ?>
      
	<div class="container check-container">
		<div class="row">
			<div class="col-md-1"></div>
      		<div class="col-md-10 well">
      			<h1 class="text-center">Check Sheet</h1>
      			<table class="table table-striped">
					<tr><th>Specific Requirement</th><th>Works Completely(Yes/No)<br />How to Test?</th></tr>
					<tr><td>1.	Come up with a theme for a site that you will continue throughout the semester.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent1">a.	It should look like a completely mature (developed) site from the home page.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td>2.  Follow the basic principles of good web site design.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td>3.  Create a basic template, color scheme, and CSS for your site and use them consistently.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent1">a.	Limit any duplication of code to the extent possible (modularize your code).</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent1">b.	Use external files for CSS and JavaScript.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td>4.	Organize the files for your site into appropriate folders.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent1">a.	Include separate subfolders for CSS, images, JavaScript, etc...</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent1">b.	Use relative addresses to refer to all local links and files.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td>5.	Include an index.html page in your http://cisprod.clarion.edu/~s_account/ folder to redirect to home page.</td><td class="td-completed">Not yet when uploaded to D2L</td></tr>
					<tr><td>6.	Include a site Navigation system (menu, links, etc)</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent1">a.	Include Major and Minor items in navigation system.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent1">b.	Include major groups for Home, Admin, Help, and at least two others that make sense to your site.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent2">i.	Under the Help menu, include an About page that lists your name as the developer and perhaps a date and make your name an e-mail link to yourself.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent2">ii.	On your About page, include a fictitious company name and address and include an interactive Google Map centered on your address.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent2">iii. Also under the Help menu include an Ideas page that includes links to at least 3 sites that you used to borrow ideas for functionality, layout, content, etc...</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent2">iv.	Home Page should look like a completed site.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent2">v.	Include at least one other page with static (hard-coded for now) data that will later be replaced by database data.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"> Home > Players</span></td></tr>
					<tr><td class="indent1">c.	Navigation Links that are not yet implemented should show an under construction message.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent1">d.	Include a footer with an e-mail link for comments.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td>7.	Include at least three image files and use CSS/JavaScript to randomly choose one to show.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent1">a.	Every time the Home Page (first page) is reloaded there should be the potential for a different image to show.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent1">b.	Make sure the images show in a similar height/width footprint.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td>8.	Include an icon or menu item available from the Home Page to see a Newsletter or similar.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent1">a.	This icon or menu item should show a believable example of that content.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td>9.	Include an icon for your site that shows on the browser tab when any page of your site is visited.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td>10.	Implement a Responsive Web Design technique so your site is reformatted automatically for at least two different screen resolutions.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td>11.	Make sure all pages on your site pass the HTML5 conformance checker and the CSS validator from W3Schools.</td><td class="td-completed">I don't think that will work when using Bootstrap</td></tr>
					<tr><td>12.	Link in a Check Sheet page under your Help menu.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent1">a.	I will provide you with the layout for this page and you will fill in the table entries for whether or not each specific requirement was met and how to test them (unless it is obvious).</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent1">b.	Style this page to be consistent with the rest of your site (color, font, heading, navigation, etc).</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent1">c.	An additional penalty will be levied for any item that you say was tested successfully but does not work.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td>13.	Publish your site to cisprod.clarion.edu in your public_html folder.</td><td class="td-completed">Not yet when uploaded to D2L</td></tr>
					<tr><td class="indent1">a.	Don't forget to include a redirection page in your public_html folder to send me to your home page.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td class="indent1">b.	Create a .zip file of your whole site and turn it in to the appropriate folder on D2L.</td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><th colspan="2">Extra Credit</th></tr>
					<tr><td>14.	Use the Bootstrap framework to develop your site including their styles for buttons, navigations, etc. </td><td class="td-completed"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
					<tr><td>15.	Integrate a Google Calendar if it makes sense on your site. </td><td class="td-completed"></td></tr>
					<tr><td>16.	Integrate a chart using the javascript library from <a href="http://www.highcharts.com/">highcharts</a>. </td><td class="td-completed"></td></tr>
				</table>
      		</div>
      		<div class="col-md-1"></div>
		</div>
	</div>
	
    </div>
    <div class="container">
      <?php include '../app/views/common/footer.php' ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>