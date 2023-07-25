<?php
session_start();
if(!isset($_SESSION['usuario'])){
//header("location: login.php");
$_SESSION['logged_in'] = true;
}
?>