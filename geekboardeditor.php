<?php
include 'geekboardscript.php';
 ?>
<?php
 include 'authorize.php';
?>
<html>
<head>
  <title>GeekBoard Editor</title>
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
    #bodyb{
      background: url(bg13.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
      #footer{
        background-color: #222222;
        padding: 20px;
      }
    </style>

    <script type="text/javascript">

  function forceInputUppercase(e)
  {
    var start = e.target.selectionStart;
    var end = e.target.selectionEnd;
    e.target.value = e.target.value.toUpperCase();
    e.target.setSelectionRange(start, end);
  }

  document.getElementById("heading").addEventListener("keyup", forceInputUppercase, false);
  document.getElementById("post").addEventListener("keyup", forceInputUppercase, false);

</script>

      </head>
      <body id="bodyb" style="font-family: 'Raleway', sans-serif;">
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
                <a href="geekboardeditor.php" data-toggle="tooltip" title="Refresh" class="btn btn-danger" role="button"><font color="#ffffff"><span uk-icon="refresh"></span></font></a>
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
</br>
<table border="0px" width="100%" height="100%">
  <tr>
    <td>
<center>
  <div class="card mb-3" style="margin-top:80px; width: 80%;">
    <div class="card-header">
    <span uk-icon="pencil"></span> GeekBoard Editor
    </div>
    <div class="card-body">
      <form action="geekboardeditor.php" method="post">
      </br>
      <input name="heading" style="width: 70%;" class="form-control" placeholder="heading" name="heading" type="text" maxlength="100">
      </br>
      <textarea name="post" class="form-control" placeholder="Write your post here!" name="post" rows="5" maxlength="3000"></textarea>
      </br></br>

      <button name="geekboardsubmit" name="version_login" class="btn btn-danger">Submit</button>

      </form>
    </div>
    <div class="card-footer text-muted">
    <?php include 'errors.php'; ?>
    </div>
  </div>
</center>


</br>
</br>
</td>
</tr>
</table>

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
