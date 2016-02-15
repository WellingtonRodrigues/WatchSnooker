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
	  
  	  <div class="container">
  	  	<div class="row">
  	  		<div class="col-md-5 well" id="googleMap"></div>
  	  		<div class="col-md-6 well text-center" id="about-info">
  	  			<p><b>Company: </b>WR Web Solutions</p>
  	  			<p><b>Address: </b>840 Wood Street, Clarion PA</p>
  	  			<p><b>Developer: </b>Wellington Rodrigues</p>
  	  			<p><b>Contact info: </b>w.rodriguespereira@eagle.clarion.edu</p>
  	  		</div>
  	  	</div>
  	  </div>
    </div>
    <div class="container">
      <?php include '../app/views/common/footer.php' ?>
    </div>
    
    <script src="http://maps.googleapis.com/maps/api/js"></script>
	  <script src="js/map.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>