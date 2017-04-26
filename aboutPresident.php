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
            <img class="bioImage" src="images/president.png" alt="...">
          </div>
          <h4 class="bioHeading">A Message From Our President</h4>
          <p class="message">The Avenue N Jewish Center is a Shul that has been serving the community since 1921.
            <br> Our membership is comprised of a unique blend of people who span both age levels and geographics. Our members hail from across the USA, Israel, Carpathia, Russia, Spain, Hungry, Poland, and other countries.
            <br> We of course have a sizable contingent who were born and raised here in the great state of Brooklyn, New York. This melting pot of people - at various ages, mean that we possess knowledge and skill sets that enhance our beautiful Shul.
            <br> Of course our main Shul is indeed quite stunning (BE"H). But our people - our members represent the real beauty of our Shul. In fact we refer to ourselves as a FAMILY. As a family - we share in simchas - and G-d forbid in unfortunate events.
            But whatever happens - our Shul family experiences it together. This warm feeling and SHALOM BAYIS are pervasive in our Shul and its character. The Officers of our Shul, as well as our Board of Trustees, are a dedicated group who bend over
            backwards to respond to any and all issues, questions, or concerns raised by our membership. Day in and day out they work tirelessly to better our Shul.
            <br> In the past few years we have completed some major projects in our Shul which only increased our ability to serve our members. Our Shul Sisterhood is always coming up with new events to entertain and better the lives of our members. Our Shabbos
            Mavorchim kiddushim allow us to get together right after Shul and enjoy great food and great company. And our Rabbi provides us with learning, insight into each parsha, and so much more. Always ensuring that whatever we do - we always remain
            on the right derech. All-in-all, the 'Avenue N Jewish Center' can be your center for Shabbos, Yomim Tovim, weekday davening and learning groups, Women's events, Kids events, special events, etc. Join us during the week or Shabbos to get a
            flavor of what we're all about. I think you'll be pleasantly surprised by what you find.
            <br> Kol Tov,
            <br> Stewart Essrog</p>
        </div>
        <div id="sidebar" class="col-md-4 ">
          <?php include_once 'components/sidebar.php' ?>
        </div>
      </div>
    </div>
    <div class="row rowFooter">
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