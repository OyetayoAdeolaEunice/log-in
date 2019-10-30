<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'salon';

$conn = new mysqli ($servername, $username, $password, $dbname);
if($conn)
{
    echo 'connection ok';
}else{
die("connection failed because".mysqli_connect_error());
}

?>