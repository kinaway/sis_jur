<?php
require_once 'connection.php';
$sql = "SELECT * FROM users WHERE LOGIN = ? AND PASSWORD = ?";
$stm = $connection->prepare($sql);
$stm->bindValue(1, $_POST['LOGIN']);
$stm->bindValue(2, $_POST['PASSWORD']);
$stm->execute();
$obj = $stm->fetchAll();
if(isset($obj[0])){
    $obj = $obj[0];
    session_start();
    $_SESSION['LOGIN'] = $obj['LOGIN'];
    $_SESSION['CPF'] = $obj['CPF'];
    header("Location: http://".$_SERVER['SERVER_NAME']."/sis_jur/index.php");
    exit();
}
$ret = false;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

