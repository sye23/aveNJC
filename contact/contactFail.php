<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="">
</head>

<body>
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <div class="panel panel-danger">
            <div class="panel-heading">
            <h3 class="text-center">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Oops:
            <small><b>Message failed</b></small>
            </h3>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <?php foreach ($errors as $error): ?>
                        <li class='list-group-item text-center'><?= $error ?></li>
                    <?php endforeach; ?>
                    <a href="../index.html"><b>back to website.</b></a></li>
                </ul>
            </div>
            </div>
        </div>
        
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
<script src=""></script>
</body>

</html>