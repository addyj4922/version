<?php
 include 'authorize.php';
?>
<html>
<head>
  <title>Settings</title>
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
      <body  style="font-family: 'Raleway', sans-serif;" onload="browserDetect()">
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
                <a href="settings.php" data-toggle="tooltip" title="Refresh" class="btn btn-danger" role="button"><font color="#ffffff"><span uk-icon="refresh"></span></font></a>
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
<div class="uk-card uk-card-secondary uk-card-body" style="margin-top:10px; width:97%">
    <h3 class="uk-card-title">< Settings ></h3>

</div>
</center>
</br>
<center>
<!--  separation separation separation separation separation separation separation separation    -->
<ul uk-tab>
    <li><a href="#">Tracking Details</a></li>
    <li><a href="#">Security Log</a></li>
    <li><a href="#">Login Protect</a></li>
</ul>

<ul class="uk-switcher uk-margin">
    <li>
      <div class="uk-card uk-card-default uk-card-body">
      Current Browser: <span id="demo"></span></br>
      <?php include 'ipdet.php'; ?>
    </div>
    </li>
    <li><?php include 'securitylog.php'; ?></li>
    <li>
      <div class="uk-card uk-card-default uk-card-body">
        Go to the Security Log tab and copy the IP address of the suspecious login, then paste it below to proceed the report.</br>
      </br>
      <?php include 'ipreport.php'; ?>
        <form action="ipreport.php" method="POST">
          <input name="reported" class="uk-input uk-form-blank uk-form-width-medium" type="text" placeholder="Enter IP Address Here">
          <button class="uk-button uk-button-secondary" name="reportbutton">REPORT</button>
        </form>
      </div>
    </br>
    </li>

</ul>
<!--  separation separation separation separation separation separation separation separation    -->
</br>
</br>
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
