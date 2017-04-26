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
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/footer.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="row">
    <?php require_once 'components/navbar.php' ?>
  </div>
  <div class="container">
    <div class="row">
      <div id="mainbody" class="col-sm-offset-2 col-sm-8">
        <form role="form" method="post" action="contact/contactRabbi.php">
          <br style="clear:both">
          <h3 style="margin-bottom: 25px; text-align: center;">Contact The Shul</h3>
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="mobile" name="phone" placeholder="Phone Number" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" type="textarea" name="message" placeholder="Message" maxlength="1000" rows="7"></textarea>
          </div>
          <button type="submit" id="submit" name="submit" class="btn btn-info pull-right">Submit Message</button>
        </form>
      </div>
    </div>
  </div>
  <div class="row">
    <div id="footer">
      <?php require_once 'components/footer.php' ?>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/clock.js"></script>
</body>

</html>