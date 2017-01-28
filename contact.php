<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <title>Magnus Johansson | Front End Developer</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="responsive.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    form {
      text-align: center;
    }
    #text {
      text-align: center;
      margin-bottom: 30px;
    }
  </style>
</head>
<?php
    include_once('includes/head.php');
    include_once('includes/header.php');
    include_once('includes/footer.php');
?>

<body>
  <h1 id="text">Contact me!</h1>
<form action="insert.php" method="post">
    <p>
        <label for="firstname">First Name:</label><br>
        <input type="text" name="firstname" id="firstName">
    </p>
    <p>
        <label for="email">Email Address:</label><br>
        <input type="text" name="email" id="emailAddress">
    </p>
    <p>
      <label for="message">Message: </label><br>
        <textarea type="text" name="message" id="message"></textarea>
    </p>
    <input type="submit" value="Submit">
    </form>

  
</body>