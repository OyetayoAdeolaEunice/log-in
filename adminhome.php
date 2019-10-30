<?php
require 'core.php';
require 'connect.php';


if(loggedin()) {
echo 'you\'re logged in.';
}else{
    include 'adminlogin.php';
}

    

?>