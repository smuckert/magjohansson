<?php
$conn = mysqli_connect('localhost', 'root', '', 'admindatabase');

if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM emailuser";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row['email'];
?>

