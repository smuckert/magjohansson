  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <title>Magnus Johansson | Front End Developer</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="responsive.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous">
  </script>
</head>

  <?php
    include_once('includes/head.php');
    include_once('includes/header.php');
    include_once('includes/footer.php');
    

    $p = $_GET['page'];
    switch($p) {
    	case "home":
    	include_once('home.php');
    	break;
    	case "cv":
    	include_once('cv.php');
    	break;
    	case "aboutme":
    	include_once('aboutme.php');
    	break;
      case "contact":
      include_once('contact.php');
      break;
      case "portfolio":
      include_once('portfolio.php');
      break;
    	default;
    	include_once('home.php');
    	break;
    }

  ?>

  <script src="demo/jquery.js"></script>
    <script src="demo/jquery.easteregg.js"></script>
    <script>
      $(function () {
        $(document).easteregg({
          sequence : [38, 38, 40, 40]
        , callback : function () {
            window.location.replace('demo/hangman.php');
          }
        });
      });
    </script>

 