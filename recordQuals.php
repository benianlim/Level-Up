<?php

//session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sas";
$con = new mysqli($servername, $username, $password, $dbname);

if(!$con) {
  die("Connect failed!");
}
echo "Connect success!" . "<br/><br/>";


$qualificationName = $_POST['qualificationName'];
$maximumScore = $_POST['maximumScore'];
$minimumScore = $_POST['minimumScore'];
$resultCalcDescription = $_POST['resultCalcDescription'];
$gradeList = $_POST['gradeList'];


$query = "SELECT * FROM qualification WHERE qualificationName = '$qualificationName'";
$result = mysqli_query($con, $query);
if($result && mysqli_num_rows($result) > 0) {

  echo "Qualification name already exists. Please enter a new qualification name.";
  //echo '<script language="javascript">';
  //echo 'alert("Qualification name already exists. Please enter a new qualification name")';
  //echo '</script>';

  mysqli_close($con);

  header('Location: add-qualification.html');
  }
else {
  $sql = "INSERT INTO qualification (qualificationName, maximumScore, minimumScore, resultCalcDescription, gradeList)
          VALUES ('$qualificationName', '$maximumScore', '$minimumScore', '$resultCalcDescription', '$gradeList')";

  echo '<script language="javascript">';
  echo 'alert("Qualification is successfully added.")';
  echo '</script>';
  mysqli_query($con, $sql);
  }

mysqli_close($con);

header("Location: maintainQuals.php");

?>
