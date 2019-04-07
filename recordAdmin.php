<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sas";
$con = new mysqli($servername, $username, $password, $dbname);

if(!$con) {
  die("Connect failed!");
}
echo "Connect success!" . "<br/><br/>";

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];

$query = "SELECT username FROM user WHERE username = '$username'";
$result = mysqli_query($con, $query);

if($result && mysqli_num_rows($result) > 0) {

  echo '<script language="javascript">';
  echo 'alert("Username already exists. Please enter a new username")';
  echo '</script>';
  mysqli_close($con);

  header("Location: add-admin.html");
  }
else{
  $sql = "INSERT INTO user (username, password, name, email, userType)
  values ('$username', '$password', '$name', '$email', 'University Admin')";

  echo '<script language="javascript">';
  echo 'alert("University admin is successfully added.")';
  echo '</script>';
  mysqli_query($con, $sql);
  }

mysqli_close($con);

header("Location: index.html");

?>
