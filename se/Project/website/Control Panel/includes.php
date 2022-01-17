<?php
session_start();
//session_regenerate_id();
header('X-Frame-Options: DENY');
header('X-Frame-Options: SAMEORIGIN');
error_reporting(0)or die('noo');
include_once('../../includes/appStyle.php');
include_once('../../includes/appJS.php');
include_once ('Connect to the database.php');//تصال القاعده

if($_SESSION['NEMA']){
    echo "";

}else
    echo "<script> location.replace('log out.php')</script>";