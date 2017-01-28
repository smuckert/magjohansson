<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hanging Man</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Custom -->
    <link href="hangman.css" rel="stylesheet">

  </head>
  <body class="navbar-inverse">
    <h1 class='text-center'>Hanging Man</h1>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8">
          <div class='hangContain'>
        <div class='postUp vanish'></div>
        <div class='postRight vanish'></div>
        <div class='rope vanish'></div>
        <div class='head vanish'></div>
        <div class='body vanish'></div>
        <div class='leftArm vanish'></div>
        <div class='rightArm vanish'></div>
        <div class='leftLeg vanish'></div>
        <div class='rightLeg vanish'></div>
        <div class='floor vanish'></div>
          </div>
      </div>
      <div class="col-sm-4">        
        <div class="gameLetters">
          <span>"Safe Word": </span>

        </div>
      </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2">
          <div class="counter">
            <p id='chances'>Chances Remaining: 10</p>
            <p id='correct'>Correct: 0</p>
            <p id='incorrect'>Incorrect: 0 </p>
          </div>
        </div>

        <div class="col-sm-10 text-center">
        <h2 class='letters'>A</h2>
        <h2 class='letters'>B</h2>
        <h2 class='letters'>C</h2>
        <h2 class='letters'>D</h2>
        <h2 class='letters'>E</h2>
        <h2 class='letters'>F</h2>
        <h2 class='letters'>G</h2>
        <h2 class='letters'>H</h2>
        <h2 class='letters'>I</h2>
        <h2 class='letters'>J</h2>
        <h2 class='letters'>K</h2>
        <h2 class='letters'>L</h2>
        <h2 class='letters'>M</h2>
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3 class='letters'>N</h3>
            <h3 class='letters'>O</h3>
            <h3 class='letters'>P</h3>
            <h3 class='letters'>Q</h3>
            <h3 class='letters'>R</h3>
            <h3 class='letters'>S</h3>
            <h3 class='letters'>T</h3>
            <h3 class='letters'>U</h3>
            <h3 class='letters'>V</h3>
            <h3 class='letters'>W</h3>
            <h3 class='letters'>X</h3>
            <h3 class='letters'>Y</h3>
            <h3 class='letters'>Z</h3>
          </div>

        </div>

      </div>
      </div>
    </div>

    <script src='https://code.jquery.com/jquery-2.2.1.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src='hangman.js'></script>
  </body>
</html>
