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
      
	<div class="container ideas-container">
		<div class="row">
			<div class="col-md-3"></div>
      		<div class="col-md-6 well">
      			<h1 class="text-center">Ideas</h1>
      			<table class="table table-striped text-center">
					<tr>
						<td><a href="http://www.worldsnooker.com" target="_blank">WorldSnooker</a></td>
					</tr>
					<tr>
						<td><a href="http://watchwrestling.to/" target="_blank">WatchWrestling</a></td>
					</tr>
					<tr>
						<td><a href="http://www.footballtube.com/" target="_blank">FootballTube</a></td>
					</tr>
				</table>
      		</div>
      		<div class="col-md-3"></div>
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