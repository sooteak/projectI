<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="pp1";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection Failure:" . $conn->connect_error);
}
?>