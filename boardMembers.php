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
    <link rel="stylesheet" href="css/boardMembers.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="row">
      <<?php require_once 'components/navbar.php' ?>
    </div>
    <div class="container boardContainer">
      <div class="row">
        <div id="mainbody" class="col-md-8">
          <h1 class="text-center">Shul Board</h1>
          <div class=" col-md-offset-2 col-md-8">
            <p class="text-center"><strong>Officers:</strong>
              <br>Stewart C. Essrog, President
              <br>Yossie Reinman, Co-Vice President
              <br>Layzer Saks, Co-Vice President
              <br>Shelly Traube, Co-Vice President
              <br>Franklin Saffra, Treasurer
              <br>Marty Kahan, Financial Secretary
              <br>Hon. Eric I Prus, Recording Secretary</p>
            <p class="text-center"><strong>Board of Trustees:</strong>
              <br><i>Sheldon Traube, Chairman</i>
              <br>Fran BenBaruch
              <br>Michael Flaks
              <br> Eric Frohmann
              <br>Dr. Lewis Genuth
              <br>Fred Goldberg
              <br>Helen Goldfinger
              <br>David Grunblatt
              <br>Hy Halper
              <br>Zacharyah Honikman
              <br>Solomon Kardysz
              <br>Robert Leinwand
              <br>Dr. Vadim Leybovich
              <br>Morton Levine
              <br>Dr. David Mandler
              <br>Israel Press
              <br>Chava Sholomon
              <br>David Shlomovich
              <br>Gary Schwartz
              <br>Jacob Solomon
              <br>Janie Weiss
              <br>David Yankovich </p>
          </div>
          <div class="col-md-12 text-center">
            <p>
              <br>
              <br> You can contact any of the board members through the shul office.</p>
          </div>
        </div>
        <div id="sidebar" class="col-md-4">
          <?php include_once 'components/sidebar.php' ?>
        </div>
      </div>
    </div>
    <div id="footer" class="row rowFooter">
      <?php require_once 'components/footer.php' ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js " integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa " crossorigin="anonymous "></script>
    <script src="js/clock.js"></script>
    <script src="js/sidebar.js"></script>

  </body>

  </html>