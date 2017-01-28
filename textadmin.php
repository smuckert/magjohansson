<?php
  $con=mysqli_connect("localhost","root","","form");

  // Check connection
  if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<?php
  if(isset($_POST['update1'])){ 
    $parag1 = $_POST['paragraf1'];
  $q = "UPDATE texter SET text = '$parag1' WHERE id = 1;";
  mysqli_query($db, $q);
    }
  
    $query = "SELECT * FROM texter WHERE ID = 1";
      $result = mysqli_query($db, $query);
      $ord = mysqli_fetch_assoc($result);
        echo 'Text: ';
      echo $ord['text'];  
      echo "<br />
          <p>Ändra:</p> 
          <form method='post'>
          <textarea rows='5' cols='50' name='paragraf1'></textarea>
          <input type='submit' value='Skicka' name='update1'>
          </form>";   
    ?>

    <?php 
              $query = "SELECT * FROM texter WHERE ID = 2";
                  $result = mysqli_query($db, $query);
                  $ord = mysqli_fetch_assoc($result);
              ?></h2>
              <p><?php 
                  echo $ord['text'];  
              ?>