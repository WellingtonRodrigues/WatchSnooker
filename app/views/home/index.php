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

      <div>
        <div class="row categories">
          <div class="col-md-6">
            <?php echo '<a href="' . BASE_URL . '/players">';?>
              <div class="well category category-players">
                <span class="category-title">Players</span>
              </div>
            </a>
          </div>
          <div class="col-md-6">
            <?php echo '<a href="' . BASE_URL . '/championships">';?>
              <div class="well category category-championships">
                <span class="category-title">Championships</span>
              </div>
            </a>
          </div>
          <div class="col-md-6">
            <?php echo '<a href="' . BASE_URL . '/shots">';?>
              <div class="well category category-shots">
                <span class="category-title">Incredible Shots</span>
              </div>
            </a>
          </div>
          <div class="col-md-6">
            <?php echo '<a href="' . BASE_URL . '/maximum">';?>
              <div class="well category category-maximum">
                <span class="category-title">Maximum Breaks</span>
              </div>
            </a>
          </div>
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