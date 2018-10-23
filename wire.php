<?php
 include 'authorize.php';
?>
<html>
<head>
  <title>Version WIRE</title>
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
          <table width="100%">
            <tr>
              <td>

                  <div>
                  <a class="btn btn-danger" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <span uk-icon="menu"></span> <?php echo $_SESSION['username'] ?>
                  </a>
                </div>

              </td>
              <td>
                <div align="right">
                <a href="wire.php" data-toggle="tooltip" title="Refresh" class="btn btn-danger" role="button"><font color="#ffffff"><span uk-icon="refresh"></span></font></a>
              </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <p>
                <div class="collapse" id="collapseExample">
                    <a href="user.php" class="btn btn-default" style="background-color:#000000;" role="button"><font color="#ffffff"><span uk-icon="home"></span> Home</font></a>
                    <a href="versiontales.php" class="btn btn-default" style="background-color:#000000;" role="button"><font color="#ffffff"><span uk-icon="bookmark"></span> Version Tales</font></a>
                    <a href="geekboard.php" class="btn btn-default" style="background-color:#000000;" role="button"><font color="#ffffff"><span uk-icon="code"></span> GeekBoard</font></a>
                    <a href="geekboardeditor.php" class="btn btn-default" style="background-color:#000000;" role="button"><font color="#ffffff"><span uk-icon="pencil"></span> GeekBoard Editor</font></a>
                    <a href="wire.php" class="btn btn-default" style="background-color:#000000;" role="button"><font color="#ffffff"><span uk-icon="social"></span> Version Wire</font></a>
                    <a href="profile.php" class="btn btn-default" style="background-color:#000000;" role="button"><font color="#ffffff"><span uk-icon="users"></span> Profiles</font></a>
                    <a href="about.php" class="btn btn-default" style="background-color:#000000;" role="button"><font color="#ffffff"><span uk-icon="info"></span> About Us</font></a>
                    <a href="settings.php" class="btn btn-default" style="background-color:#000000;" role="button"><font color="#ffffff"><span uk-icon="cog"></span> Settings</font></a>
                    <a href="logout.php" class="btn btn-default" style="background-color:#000000;" role="button"><font color="#ffffff"><span uk-icon="close"></span> Logout</font></a>
                </div>
              </p>
              </td>
            </tr>
          </table>
        </nav>

<!--  separation separation separation separation separation separation separation separation    -->
<center>
<div class="uk-card uk-card-secondary uk-card-body " style="margin-top:10px; width:97%">
    <h3 class="uk-card-title"><span class="uk-margin-small-right" uk-icon="social"></span> Version WIRE</h3>
</div>
</center>

</br>


</br>
</br>
<footer id="footer">
  <center>
    All Rights Reserved © 2018
  </center>
</footer>

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
