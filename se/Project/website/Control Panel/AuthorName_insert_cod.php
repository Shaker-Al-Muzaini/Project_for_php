<?php
include_once('includes.php');
include_once('../../includes/appStyle.php');
include_once('../../includes/appJS.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['Name'])){
        $Name = filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
        $id = $_SESSION['id'];
        $t = $_SESSION['token'];
        $t2 = $_POST['token2'];
        if ($_POST['token2'] == $_SESSION['token']) {
            $sql = "insert into authorname (Name) VALUES
                  ('$Name')";//
            $reslt = mysqli_query($cone, $sql);//
            if ($reslt) {//التأكد\ من الادخال  اذا كان صحيح ام  لا
                echo '<div class="row"><div class="col-12"><div class="alert alert-success">New record created</div></div></div>';
            } else
                echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to create a new record</div></div></div>';
        }else
            echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to token</div></div></div>';
    }
    else
        echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed</div></div></div>';

} else
    echo "<script> location.replace('Author_Name.php')</script>"; //التحويل الى صفحه الادخال

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <a href="Author_Name.php">View library</a>
    </div>
</body>
</html>
