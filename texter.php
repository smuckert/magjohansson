<?php
session_start();
?>
<?php
$db = mysqli_connect('localhost', 'root', '', 'form');

if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
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