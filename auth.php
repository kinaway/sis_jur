<?php
session_start();
if(!isset($_SESSION['LOGIN'])){
    header("Location: http://".$_SERVER['SERVER_NAME']."/sis_jur/login.php");
    exit();
}
?>
