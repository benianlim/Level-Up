<?php

$universityName = $_POST['universityName'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sas";
$con = new mysqli($servername, $username, $password, $dbname);

if(!$con) {
  die("Connect failed!");
}
else{
  $sql = "INSERT INTO university (universityName)
  values ('$universityName')";

  if ($con->query($sql)){
    echo "New record is inserted successfully";
  }
  else{
    echo "Error: ". $sql ."<br>". $con->error;
  }
  $con->close();
}

?>
