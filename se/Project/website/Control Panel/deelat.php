<?php
include_once('includes.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $t = $_SESSION['token'];
    $t2 = $_POST['token2'];
    if ($_POST['token2'] == $_SESSION['token']) {
        if (!empty($id)) {
            $query = "delete from book_table where id = $id ";
            $result = mysqli_query($cone, $query);
            $query = "delete from book_table where id= $id";
            $result = mysqli_query($cone, $query);
            if ($result) {
                echo '<div class="row"><div class="col-12"><div class="alert alert-success">تم حذف  الطالب بنجاح</div></div></div>';
            } else
                echo '<div class="row"><div class="col-12"><div class="alert alert-danger">فشل  حذف  الطالب</div></div></div>';
        } else
            echo '<div class="row"><div class="col-12"><div class="alert alert-danger"> رقم الطالب مفقود</div></div></div>';
    }else
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
        <a href="product-CP.php">View  library</a>
    </div>
</body>
</html>
