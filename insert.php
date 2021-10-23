<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "art_gallery";

$conn = new mysqli($servername,$username,$password,$db_name);
if($conn->connect_error)
{
    die("Connection failed".$conn->connect_error);
}
sql = "INSERT INTO customers (firstname,lastname,age)VALUES 
        ('Jill','Smith',50),
        ('Eve','Jackson',94)
        ";
if($conn->query($sql)==TRUE)
{
    echo "Data inserted successfully";
}
else
{
    echo "Failed to insert data".$conn->error;
}
$conn->close();


?>