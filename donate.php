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
  <link rel="stylesheet" href="css/donate.css">
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
    <div class="row">
      <div id="mainbody" class=" col-sm-offset-1 col-sm-10">
        <h1 id="paymentHeader" class="text-center">Online Payments</h1>
        <div class="col-md-6">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Sponserships</h3>
              <div class="pull-right">
                <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
<i class="glyphicon glyphicon-filter"></i>
</span>
              </div>
            </div>
            <div class="panel-body">
              <input type="text" class="form-control" id="task-table-filter" data-action="filter" data-filters="#task-table" placeholder="Filter Tasks" />
            </div>
            <table class="table table-hover" id="task-table">
              <thead>
                <tr>
                  <th>Sponsership Opportunities</th>
                  <th class="text-right">Cost</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Kiddush(sit down)</td>
                  <td class="text-right">$1899</td>
                </tr>
                <tr>
                  <td>Kiddush(stand up)</td>
                  <td class="text-right">$500</td>
                </tr>
                <tr>
                  <td>Shalosh Seudot</td>
                  <td class="text-right">$180</td>
                </tr>
                <tr>
                  <td>Night Of Learning</td>
                  <td class="text-right">$250</td>
                </tr>
                <tr>
                  <td>Dedicate Chumash</td>
                  <td class="text-right">$45</td>
                </tr>
                <tr>
                  <td>Dedicate Siddur</td>
                  <td class="text-right">$36</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Shul Dues</h3>
            </div>
            <table class="table table-hover" id="task-table">
              <thead>
                <tr>
                  <th>Dues and Fees</th>
                  <th class="text-right">Cost</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Family Membership</td>
                  <td class="text-right">$400</td>
                </tr>
                <tr>
                  <td>Single Membership</td>
                  <td class="text-right">$200</td>
                </tr>
                <tr>
                  <td>Associate Membership</td>
                  <td class="text-right">$100</td>
                </tr>
                <tr>
                  <td>Locker Fee</td>
                  <td class="text-right">$50</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
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
  <script src="js/donate.js "></script>
  <script src="js/clock.js"></script>
</body>

</html>