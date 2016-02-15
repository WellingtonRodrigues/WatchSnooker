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

      <div class="container-fluid well players-container">
      	<div class="row">
      		<div class="col-md-1"></div>
      		<div class="col-md-10 players-search">
	      		<form class="form-horizontal">
				  <div class="form-group">
				  	<div class="col-sm-10">
				    	<input type="text" class="form-control" id="player-search-box" placeholder="Type your search...">
				    </div>
				    <div class="col-sm-2">
				    	<button type="submit" class="btn btn-default">Search</button>
				    </div>
				  </div>
				</form>
			</div>
			<div class="col-md-1"></div>
      	</div>
      	
      	<div class="row">
      		<div class="col-md-3"></div>
      		<div class="col-md-6">
      			<table class="table table-striped">
					<tr>
						<th id="th-player-name">Player Name</th>
						<th>Nationality</th>
					</tr>
					<tr>
						<td>Ronnie O'Sullivan</td>
						<td>United Kingdom</td>
					</tr>
					<tr>
						<td>Judd Trump</td>
						<td>United Kingdom</td>
					</tr>
					<tr>
						<td>Marco Fu</td>
						<td>Hong Kong</td>
					</tr>
					<tr>
						<td>Igor Figueiredo</td>
						<td>Brazil</td>
					</tr>
					<tr>
						<td>Neil Robertson</td>
						<td>Australia</td>
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