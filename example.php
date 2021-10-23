<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "database";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
$sqlquery = "INSERT INTO table VALUES ('Jill','Smith',50),"


?>