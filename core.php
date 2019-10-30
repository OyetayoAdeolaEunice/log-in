<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];

function loggedin(){
    if(isset($_SESSION['admin_id']) &&!empty($_SESSION['admin_id'])) {
        return true;
    }else {
        return false;
    }
}


?>