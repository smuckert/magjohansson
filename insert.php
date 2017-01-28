<?php
  $con=mysqli_connect('mag-219437.mysql.binero.se', '219437_mn71845', 'apansson', '219437-mag');

  // Check connection
  if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect('mag-219437.mysql.binero.se', '219437_mn71845', 'apansson', '219437-mag');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_POST['firstname']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$message = mysqli_real_escape_string($link, $_POST['message']);
 
// attempt insert query execution
$sql = "INSERT INTO postform (firstname, email, message) VALUES ('$firstname', '$email', '$message')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header('location: contact.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
