
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SmartHome</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>

  <body>
    <?php
  
	$whitelist = array('main', 'appletv', 'tv', 'light', 'alarm', 'sensors');
        $pageParam = $_GET['page'];
        if(!in_array($pageParam, $whitelist)) {
            $pageParam = 'error';
        }
	if(!isset($_GET['page'])) {
            $pageParam = 'main';
        }

    ?>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="?page=main">SmartHome</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if($pageParam == 'main') {echo 'class="active"';} ?>><a href="?page=main">Übersicht</a></li>
            <li <?php if($pageParam == 'appletv') {echo 'class="active"';} ?>><a href="?page=appletv">Apple TV</a></li>
            <li <?php if($pageParam == 'tv') {echo 'class="active"';} ?>><a href="?page=tv">Fernseher</a></li>
            <li <?php if($pageParam == 'light') {echo 'class="active"';} ?>><a href="?page=light">Licht</a></li>
            <li <?php if($pageParam == 'alarm') {echo 'class="active"';} ?>><a href="?page=alarm">Wecker</a></li>
            <li <?php if($pageParam == 'sensors') {echo 'class="active"';} ?>><a href="?page=sensors">Sensoren</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

        <?php include($pageParam.'.php'); ?>

    </div> <!-- /container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
