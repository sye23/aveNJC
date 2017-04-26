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
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="row">
      <?php require_once 'components/navbar.php' ?>
    </div>
    <div id="aboutContainer" class="container">
      <div class="row">
        <div id="mainbody" class="col-md-8">
          <div>
            <img class="bioImage" src="images/rabbiEisenbach.png" alt="...">
          </div>
          <h4 class="bioHeading">About Rabbi Eisenbach</h4>
          <p class="message">Rabbi Doniel Eisenbach became spiritual leader of the Center on December of 2013. Rabbi Eisenbach has served as the Assistant Rabbi at the Center for the past five years.
            <br> A graduate of Yeshiva of Flatbush, Rabbi Eisenbach received his rabbinic ordination at Yeshiva Ner Yisroel in Baltimore from the Rosh Yeshiva Rabbi Ruderman, z”l in 1986.
            <br> While at Ner Yisroel, Rabbi Eisenbach led a group of Kollel scholars in Mifal Hashas.
            <br> Rabbi Eisenbach has taught Halachic subjects both in Yeshiva of Flatbush middle school and in SKA High School for girls, where he is currently Mashgiach Ruchani. In addition to his Mashgiach duties, Rabbi Eisenbach delivers popular Torah
            lectures to adults in the Five Towns community.</p>
          <a href="contactRabbiView.php">
            <button class=" btn btn-block btn-info ">Contact Rabbi Eisenbach</button>
          </a>
        </div>
        <div id="sidebar" class="col-md-4 ">
          <?php include_once 'components/sidebar.php' ?>
        </div>
      </div>
    </div>
    <div class="row rowFooter ">
      <div id="footer">
        <?php require_once 'components/footer.php' ?>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js " integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa " crossorigin="anonymous "></script>
    <script src="js/clock.js"></script>
    <script src="js/sidebar.js"></script>

  </body>

  </html>