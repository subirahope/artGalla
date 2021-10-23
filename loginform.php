<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "art_gallery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



if (isset ($_POST['username'])) {

    $uname = $_POST['username'];
    $pass = $_POST['password'];

    $sql="select * FROM customers where username='".$uname."' AND password = '".$pass."' ";

    $result=$conn->query($sql);

    if($result->num_rows>0){
     
        echo "<script>window.location.href='http://localhost/artgallery/index.php'</script>";
    }
    else{
      echo " you are not registered";
    }
}

?>