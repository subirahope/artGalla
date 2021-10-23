<?php

$conn = new mysqli("localhost","root","","art_gallery");

if ($conn -> connect_error)
{
    echo "Failed to connect";
}

$username = $_POST["username"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$password = $_POST["password"];


$stmt = "INSERT INTO customers(`username`,`first_name`, `last_name`,`password`) VALUES ('".$username."','".$firstname."', '".$lastname."',('" .$password."'))";

if($conn -> query($stmt))
{
    echo "Inserted data to database";
}
else
{
    echo"Failed to insert data to the database table";
}

?>