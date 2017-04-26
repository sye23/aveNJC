<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="css/universal.css">
  <link rel="stylesheet" href="css/partUniversal.css">
  <link rel="stylesheet" href="css/gallery.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/sidebar.css">
  <link rel="stylesheet" href="css/footer.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="row">
    <?php require_once 'components/navbar.php' ?>
  </div>
  <div class="container">
    <div id="mainbody" class="row">
      <h1 class="text-center">Shul Photo Gallery</h1>
      <div id="gallery" class="col-md-offset-2 col-md-8">
        <div class="col-xs-6 col-sm-4">
          <div class="thumbnail">
            <div class="caption">
              <h4>Tuesday Night Kollel</h4>
              <a href="https://goo.gl/photos/5A9HYTvoa3R366LQ8" target="_blank" class="btn btn-default">View</a></p>
            </div>
            <img src="images/kollel.png" alt="...">
          </div>
        </div>
        <div class="col-xs-6 col-sm-4">
          <div class="thumbnail">
            <div class="caption">
              <h4>75th Shul Dinner</h4>
              <a href="https://goo.gl/photos/tZzt989gzaP453yD6" target="_blank" class="btn btn-default">View</a></p>
            </div>
            <img src="images/shulDinner.png" alt="...">
          </div>
        </div>
        <div class="col-xs-6 col-sm-4">
          <div class="thumbnail">
            <div class="caption">
              <h4>Sisterhood Events</h4>
              <a href="" target="_blank" target="_blank" class="btn btn-default">View</a></p>
            </div>
            <img src="http://lorempixel.com/400/300/sports/3/" alt="...">
          </div>
        </div>
        <div class="col-xs-6 col-sm-4">
          <div class="thumbnail">
            <div class="caption">
              <h4>Guest Speakers</h4>
              <a href="https://goo.gl/photos/xyGnQZGgPPoivEXy7" target="_blank" class="btn btn-default">View</a></p>
            </div>
            <img src="images/slide2.png" alt="...">
          </div>
        </div>
        <div class="col-xs-6 col-sm-4">
          <div class="thumbnail">
            <div class="caption">
              <h4>Miscellaneous</h4>
              <a href="" target="_blank" class="btn btn-default">View</a></p>
            </div>
            <img src="http://lorempixel.com/400/300/sports/4/" alt="...">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <h3 class="text-center">If you have photos you would like to contribute to this forum please contact the shul office.</h3>
    </div>
  </div>
  <div id="footer">
    <?php require_once 'components/footer.php' ?>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/gallery.js"></script>
  <script src="js/clock.js"></script>
</body>

</html>