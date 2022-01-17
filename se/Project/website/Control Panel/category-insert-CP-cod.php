<?php
include_once('includes.php');
include_once('../../includes/appStyle.php');
include_once('../../includes/appJS.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['NEMA']) && !empty($_POST['DESCRIPTION'])){
        $name =filter_var($_POST['NEMA'],FILTER_SANITIZE_STRING);
        $Description = filter_var($_POST['DESCRIPTION'],FILTER_SANITIZE_STRING);
        $id = $_SESSION['id'];
        $t = $_SESSION['token'];
        $t2 = $_POST['token2'];
        if ($_POST['token2'] == $_SESSION['token']) {
            $sql = "insert into book_rating (NEMA,DESCRIPTION) VALUES
                  ('$name','$Description')";//جمله ادخال بيانتا
            $reslt = mysqli_query($cone, $sql);//دالله الاادخال
            if ($reslt) {//التأكد\ من الادخال  اذا كان صحيح ام  لا
                echo '<div class="row"><div class="col-12"><div class="alert alert-success">New record created</div></div></div>';
            } else
                echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to create a new record</div></div></div>';
        }
         else
                 echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to token</div></div></div>';

             }
                else
                    echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed</div></div></div>';


}else
    echo"<script> location.replace('category-CP.php')</script>";

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>category_insert</title>
</head>
<body>
<div class="container">
    <div class="row">
        <a href="category-CP.php">View  library</a>
    </div>
</body>
</html>
