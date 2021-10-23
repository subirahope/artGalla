
<form action="" method = "POST">
    <label for="uid">User-Id</label>
    <input type="text" id = "uid" name = "uid">

    <br><br>
    <label for="pwd">Password</label>
    <input type="text" id = "pwd" name = "pwd">

    <br><br>
    <input type=Submit name ="Submit">
    <input type=Reset name ="Reset">
</form>
<?php
if(isset($_POST['submit']))
{
    $a = $_POST['uid'];
    echo "The userid is: ".$a;
}

?>

