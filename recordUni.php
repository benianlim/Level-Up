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

$universityName = $_POST['universityName'];

$query = "SELECT universityName FROM university WHERE universityName = '$universityName'";
$result = mysqli_query($con, $query);

if($result && mysqli_num_rows($result) > 0) {

  echo '<script language="javascript">';
  echo 'alert("University name already exists. Please enter a new qualification name")';
  echo '</script>';
  mysqli_close($con);

  header('Location: addUni.html');
  }
else{
  $sql = "INSERT INTO university (universityName)
  values ('$universityName')";

  echo '<script language="javascript">';
  echo 'alert("University is successfully added.")';
  echo '</script>';
  mysqli_query($con, $sql);
  }

mysqli_close($con);

header("Location: index.html");

?>
