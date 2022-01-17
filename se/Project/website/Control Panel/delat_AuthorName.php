<?php

include_once('includes.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Author_Name = filter_var($_POST['Author_Name'], FILTER_SANITIZE_NUMBER_INT);
    $id = $_SESSION['id'];
    $t = $_SESSION['token'];
    $t2 = $_POST['token2'];
    if ($_POST['token2'] == $_SESSION['token']) {
        if (!empty($Author_Name)) {
            $query = "delete from authorname where Author_Name =$Author_Name ";
            $result = mysqli_query($cone, $query);
            if ($result) {
                echo '<div class="row"><div class="col-12"><div class="alert alert-success">تم حذف  الطالب بنجاح</div></div></div>';
            } else
                echo '<div class="row"><div class="col-12"><div class="alert alert-danger">فشل  حذف  الطالب</div></div></div>';
        } else
            echo '<div class="row"><div class="col-12"><div class="alert alert-danger"> رقم الطالب مفقود</div></div></div>';
    }
    else
        echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to token</div></div></div>';
}
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
