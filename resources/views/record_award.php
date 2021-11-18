<?php
include("server_conn.php");

$award_name=$_POST['award_name'];
$award_date=$_POST['award_date'];
$award_details=$_POST['award_details'];

$sql=("INSERT INTO award(award_name,award_date,award_details) VALUES('$award_name','$award_date','$award_details')");

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $sql=("DELETE FROM award WHERE award_name=''");
  header("location:recordaward");
?>