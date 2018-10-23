<?php
header("refresh:2; url=geekboard.php");
 ?>
<html>
<head>
  <title>Post result!</title>

  <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.8/js/uikit-icons.min.js"></script>


      <link rel="icon" type="image/png" href="icon.png">

</head>
<body>
<center>

<div style="width:50%; margin-top:50px" class="uk-card uk-card-default uk-width-1-2@m">
    <div class="uk-card-header">
      <h3>Post submited!</h3>
    </div>
    <div class="uk-card-body">
        <p><div uk-spinner="ratio:1" ></div> Redirecting...</p>
    </div>
    <div class="uk-card-footer">
      <p>  If the page is not automaticaly redirected within 2 sec, then <a href="geekboard.php">Click Here!</a></p>
    </div>
</div>
</center>

</body>
</html>
