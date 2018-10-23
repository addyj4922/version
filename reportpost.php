<?php
 include 'authorize.php';
?>
<?php
 include 'secureip.php';
?>

<html>
<head>
  <title>Post Report Generator</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BootStrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/js/uikit-icons.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <link rel="icon" type="image/png" href="icon.png">
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <style>
        #footer{
          background-color: #222222;
          padding: 20px;
        }
      </style>
</head>
      <body style="font-family: 'Raleway', sans-serif;" onload="browserDetect()">

      <nav class="navbar fixed-top navbar-light bg-light">
        <a class="btn btn-danger" href="geekboard.php" role="button">< Back</a>
      </nav>

<center>
      <div class="card mb-3" style="margin-top:80px; width: 80%;">
        <div class="card-header">
        <span uk-icon="bookmark"></span> Post Report Generator
        </div>
        <div class="card-body">
          <form action="report.php" method="post">
          </br>
          <input name="postid" style="width: 40%;" class="form-control" placeholder="postid" name="postid" type="text" maxlength="10">
          </br>
          <textarea name="reason" class="form-control" placeholder="Write your reason here!" name="reason" rows="3" maxlength="300"></textarea>
          </br></br>

          <button name="geekboardsubmit" name="version_login" class="btn btn-danger">Submit</button>

          </form>
        </div>
        <div class="card-footer text-muted">
        <?php include 'errors.php'; ?>
        </div>
      </div>
</center>
<!--  separation separation separation separation separation separation separation separation    -->

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
