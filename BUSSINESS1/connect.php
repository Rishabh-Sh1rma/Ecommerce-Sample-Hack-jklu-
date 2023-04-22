<?php

// Create connection
$con =mysqli_connect('localhost', 'root', '','site');
if(isset($_POST['sb']))
{
  $email = $_POST['email'];
  $sql = "INSERT INTO  register(email) VALUE('$email');";
  $run = mysqli_query($con, $sql);
}
?>
 