<?php
$servername = "localhost";
$username = "root";
$password="";

$conn = new mysqli($servername,$username,$password);

if($conn -> connection_error)
{
    echo "failed";

}
echo "successful connection";

?>