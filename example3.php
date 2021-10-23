<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password);
if($conn ->connect_error)
{
    die("Connection failed.".$conn->connect_error);
}
$sql = "CREATE DATABASE wanyama";
if($conn->query($sql)== TRUE)
{
    echo "Database created successfully";
}
else
{
    echo "Database not created".$conn->error;
}
$conn->close();

?>












