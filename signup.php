<?php include 'server.php'; ?>
<html>
<head>
  <title>Login to VERSION</title>
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
      <link rel="icon" type="image/png" href="icon.png">
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <style>
        #footer{
          background-color: #222222;
          padding: 20px;
        }
      </style>
      <style>
      #bodyb{
        background: url(bg13.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      #divlogin{
        opacity: .85;
      }
      #finp{
        background-color: #ffffff;
      }
      </style>


      </head>
      <body id="bodyb" style="font-family: 'Raleway', sans-serif;">
        <table border="0px" width="100%" height="100%">
          <tr>
            <td width="100%" height="100%">
    <center>
      <div id="divlogin" class="card" style="width: 25rem;" id="particles-js">
        <div class="card-header">
          Register to Version
        </div>
        <div class="card-body">
          <form action="signup.php" method="post">
          </br>
          <input class="form-control" placeholder="roll no" name="rollno" type="text">
          </br>
          <input class="form-control" placeholder="name" name="name" type="text">
          </br>
          <input onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toLowerCase(); this.setSelectionRange(start, end);" class="form-control" placeholder="username" name="username" type="text">
          </br>
          <input class="form-control" placeholder="email" name="email" type="email">
          </br>
          <input class="form-control" placeholder="password" name="password" type="password">
          </br></br>

          <button name="version_signup" class="btn btn-danger">Sign Up</button>
          <a class="btn btn-dark" href="index.php" role="button">Already signed up?</a>
          </form>
        </div>
        <div class="card-footer text-muted">
        <?php include 'errors.php'; ?>
        </div>
      </div>
    </center>
  </td>
 </tr>
 </table>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
