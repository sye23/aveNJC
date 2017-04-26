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
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="row">
      <?php require_once 'components/navbar.php' ?>
    </div>
    <div id="carousel-bigScreen" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="carouselImg" src="images/slide1.png" alt="...">
          <img class="carouselImg" src="images/slide2.png" alt="...">
          <img class="carouselImg" src="images/slide3.png" alt="...">
        </div>
        <div class="item">
          <img class="carouselImg" src="images/kollel.png" alt="...">
          <img class="carouselImg" src="images/kollel2.png" alt="...">
          <img class="carouselImg" src="images/kollel3.png" alt="...">
        </div>
        <div class="item">
          <img class="carouselImg" src="images/dinner1.png" alt="...">
          <img class="carouselImg" src="images/dinner2.png" alt="...">
          <img class="carouselImg" src="images/dinner3.png" alt="..."> </div>
      </div>
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>
    <div id="carousel-smallScreen" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="carouselImg" src="images/slide1.png" alt="...">

        </div>
        <div class="item">
          <img class="carouselImg" src="images/kollel.png" alt="...">

        </div>
        <div class="item">
          <img class="carouselImg" src="images/dinner1.png" alt="...">
        </div>
      </div>
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>
    <div id="indexContainer" class="container">
      <div class="row">
        <div id="mainbody" class="col-md-8">
          <p id="mainText"><span>Welcome to The Avenue N Jewish Center</span>
            <br> We are an exciting Modern Orthodox Synagogue celebrating Jewish life in all its richness and diversity in an inclusive and warm community.
            <br> We strive to provide a support and respectful environment that encourages religious growth. You will find that it is large enough to provide a broad range of services, learning and volunteer opportunities for all age groups, yet small and
            intimate enough to make each individual’s contribution count.</p>
          <div id="mainSub" class="row">
            <div class="col-md-offset-1 col-md-5 text-center">
              <div class="thumbnail">
                <img src="images/membership.png" alt="...">
                <div class="caption">
                  <h3>Membership</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni aspernatur minima nulla. Nulla dolorem rem eveniet consequatur blanditiis cumque, tempore soluta dolor eos, quaerat adipisci? Dolor, illum modi, voluptate eum iusto quas
                    suscipit rerum veniam dolores aspernatur placeat at sapiente beatae et totam blanditiis.</p>
                  <p><a href="membership.html" class="btn btn-primary" role="button">Become A Member</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-5 text-center">
              <div class="thumbnail">
                <img src="images/donate.png" alt="...">
                <div class="caption">
                  <h3>Sponsorships</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni aspernatur minima nulla. Nulla dolorem rem eveniet consequatur blanditiis cumque, tempore soluta dolor eos, quaerat adipisci? Dolor, illum modi, voluptate eum iusto quas
                    suscipit rerum veniam dolores aspernatur placeat at sapiente beatae et totam blanditiis.</p>
                  <p><a href="donate.html" class="btn btn-primary" role="button">Donate</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="sidebar" class="col-md-4">
          <?php include_once 'components/sidebar.php' ?>
        </div>
      </div>
    </div>
    <div class="row rowFooter">
      <div id="footer">
        <?php require_once 'components/footer.php' ?>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script src="js/clock.js"></script>
    <script src="js/sidebar.js"></script>

  </body>

  </html>