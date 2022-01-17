<?php
//كود الاضافه
include_once('includes.php');
if($_SERVER['REQUEST_METHOD']=='POST') {
    if (!empty($_POST['Book_name']) && !empty($_POST['Author_Name']) && !empty($_POST['DarAl_nasher']) && !empty($_POST['issue_number']) && !empty($_POST['book_rating']) && !empty($_FILES['IMAGE'])) {

        $file_name = $_FILES['IMAGE']['name'];
        $file_tmp = $_FILES['IMAGE']['tmp_name'];
        $file_typ = $_FILES['IMAGE']['type'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $file_new_name = time() + rand(1, 1000000000) . ".$file_ext";
        $upload_path = 'Product_image/' . $file_new_name;
        move_uploaded_file($file_tmp, $upload_path);
        $file = str_replace('/.', '', $upload_path);
        $A = array('image/png', 'image/JPG', 'image/jpeg', 'image/jpg', 'image/gif');

        if (in_array($file_typ, $A)) {
            if (file_exists($upload_path)) {
                echo '<div class="row"><div class="col-12"><div class="alert alert-success">تم رفع الصوره</div></div></div>';

            } else
                echo '<div class="row"><div class="col-12"><div class="alert alert-danger"> لم يتم رفع الصوره</div></div></div>';
        } else
            echo '<div class="row"><div class="col-12"><div class="alert alert-danger">لا يمكن رافع هذا النوع من الملفات </div></div></div>';
        $Book_name = filter_var($_POST['Book_name'], FILTER_SANITIZE_STRING);
        $Author_Name = filter_var($_POST['Author_Name'], FILTER_SANITIZE_STRING);
        $DarAl_nasher = filter_var($_POST['DarAl_nasher'], FILTER_SANITIZE_STRING);
        $issue_number = filter_var($_POST['issue_number'], FILTER_SANITIZE_NUMBER_INT);
        $book_rating = filter_var($_POST['book_rating'], FILTER_SANITIZE_STRING);
        $id = $_SESSION['id'];
        $t = $_SESSION['token'];
        $t2 = $_POST['token2'];
        $check_name = " select Book_name  from book_table where Book_name='$Book_name'";
        $check_number = " select issue_number from book_table where issue_number='$issue_number' ";
        $reslt = mysqli_query($cone, $check_name);
        $reslt = mysqli_query($cone, $check_number);
        $count = mysqli_num_rows($reslt);//تقوم بارجع عدد الصفوف في المجموعه
        $count2 = mysqli_num_rows($reslt);//تقوم بارجع عدد الصفوف في المجموعه
        if ($count > 0 and $count2 > 0) {
            echo '<div class="row"><div class="col-12"><div class="alert alert-danger">لا يمكن اضافه الكتاب تأكد من الاسم اورقم الاصدار</div></div></div>';
            return false;
        }
        if ($_POST['token2'] == $_SESSION['token']) {

            $sql = "insert into book_table(Book_name,Author_Name,DarAl_nasher,issue_number,book_rating,IMAGE) VALUES
                  ('$Book_name','$Author_Name','$DarAl_nasher','$issue_number','$book_rating','$file')";//جمله ادخال بيانتا
            $reslt = mysqli_query($cone, $sql);//دالله الاادخال
            if ($reslt) {//التأكد\ من الادخال  اذا كان صحيح ام  لا
                echo '<div class="row"><div class="col-12"><div class="alert alert-success">New record created</div></div></div>';
            } else
                echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to create a new record</div></div></div>';
        }else
            echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to token</div></div></div>';
    }else
        echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed </div></div></div>';



    }else
    echo"<script> location.replace('log out.php')</script>"; //التحويل الى صفحه الادخال

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
        <a href="product-CP.php">View library</a>
    </div>
</body>
</html>
