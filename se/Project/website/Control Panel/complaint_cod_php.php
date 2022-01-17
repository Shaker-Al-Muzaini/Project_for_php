<?php
session_start();
include_once('../../includes/appStyle.php');
include_once('../../includes/appJS.php');
include_once ('Connect to the database.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['name_c']) &&!empty($_POST['email_c']) &!empty($_POST['tx'])){
        $Name =filter_var($_POST['name_c'],FILTER_SANITIZE_STRING);
        $email =filter_var($_POST['email_c'],FILTER_SANITIZE_EMAIL);
//        $t = $_SESSION['token'];
//        $t2 = $_POST['token2'];
    $TXT = filter_var($_POST['tx'],FILTER_SANITIZE_STRING);
  //  if ($_POST['token2'] == $_SESSION['token']) {
    $sql="INSERT INTO `complaint` (`id`, `name_c`, `email_c`, `tx`) VALUES (NULL, '$Name', '$email', '$TXT')";
            $reslt = mysqli_query($cone, $sql);//دالله الاادخال
            if ($reslt) {//التأكد\ من الادخال  اذا كان صحيح ام  لا
               echo '<div class="row"><div class="col-12"><div class="alert alert-success">تم الإرسال</div></div></div>';
          } else
                echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to create a new record</div></div></div>';
       // }else
       //    echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to token</div></div></div>';
    }
    else
        echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed</div></div></div>';

} else
   echo "<script> location.replace('complaint.php')</script>"; //التحويل الى صفحه الادخال