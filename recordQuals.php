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

//if (isset($_POST['submitButton'])) {

$qualificationName = $_POST['qualificationName'];
$maximumScore = $_POST['maximumScore'];
$minimumScore = $_POST['minimumScore'];
$resultCalcDescription = $_POST['resultCalcDescription'];
$gradeList = $_POST['gradeList'];


$sql = "INSERT INTO qualification (qualificationName, maximumScore, minimumScore, resultCalcDescription, gradeList)
        VALUES ('$qualificationName', '$maximumScore', '$minimumScore', '$resultCalcDescription', '$gradeList')";
        if ($con->query($sql)) {
          echo "Qualification has been added successfully";
        }
        else {
          echo "Error: ".$sql."<br>".$con->error;
        }

//mysqli_query($con, $sql);
//}
mysqli_close($con);

//header("Location: maintainQuals.html");

?>
