<?php
$db=mysqli_connect("mag-219437.mysql.binero.se","219437_mn71845","apansson","219437-mag");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_query($db, "SET NAMES utf8");
?>

<head>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $( function() {
      $( "#accordion" ).accordion();
    } );
  </script>
  <style>
    .expandh2 {
      outline:none;
    }
  </style>
</head>

<body>
  <div id="wrapper">
    <article>
      <div id="accordion">
        <h2 class="expandh2">Studier</h2>
        <div>
          <p>
            <?php 
            $query = "SELECT * FROM texter WHERE ID = 1";
            $result = mysqli_query($db, $query);
            $ord = mysqli_fetch_assoc($result);
            ?></h2>
            <p><?php 
              echo $ord['text'];  
              ?>
            </p>
          </div>
          <h2 class="expandh2">Arbetslivserfarenheter</h2>
          <div>
            <p>
              <?php 
              $query = "SELECT * FROM texter WHERE ID = 2";
              $result = mysqli_query($db, $query);
              $ord = mysqli_fetch_assoc($result);
              ?></h2>
              <p><?php 
                echo $ord['text'];  
                ?>
              </p>
            </div>
          </article>
        </div>
      </body>
        
