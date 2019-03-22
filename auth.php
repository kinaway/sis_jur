<?php
if(!$_SESSION){
    header("Location: http://localhost/Jur/login.php");
    exit();
} else {
    var_dump($_SESSION);
}
?>
