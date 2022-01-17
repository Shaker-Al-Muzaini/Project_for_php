<?php
include_once('includes.php');
include_once('../../includes/appStyle.php');
include_once('../../includes/appJS.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['old_password']) && isset($_POST['new_password']) && isset($_POST['Verify_password'])) {
       $old_password = filter_var($_POST['old_password'],FILTER_SANITIZE_STRING);
        $new_password = filter_var($_POST['new_password'],FILTER_SANITIZE_STRING);
        $Verify_password = filter_var($_POST['Verify_password'],FILTER_SANITIZE_STRING);
        $old_=md5($old_password);
        $new_=md5($new_password);
        $verify=md5($Verify_password);

        if (empty($old_)) {

            echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Please check the old password</div></div></div>';

        } else if (empty($new_)) {

            echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Please type the new password</div></div></div>';

        } else if ($new_ !== $verify) {

            echo '<div class="row"><div class="col-12"><div class="alert alert-danger">The password is different, please make sure that both words are applied</div></div></div>';

        }
        else
        {
            $id = $_SESSION['id'];
            $t= $_SESSION['token'];
            $t2=$_POST['token2'];

            $sql = "SELECT id,password FROM admin where id = $id AND password='$old_'";
            $result = mysqli_query($cone, $sql);

            if (mysqli_num_rows($result) > 0) {

                if ( $_POST['token2']== $_SESSION['token']) {
                    $query = "update admin set password ='$new_'where id= $id";
                    $result = mysqli_query($cone, $query);

                    if ($result) {
                        echo '<div class="row"><div class="col-12"><div class="alert alert-success">Password successfully changed</div></div></div>';
                        echo "<a href='home-CP.php'>view</a><br>";

                    }
                    else
                    {
                        echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to change password</div></div></div>';
                    }

                }
                else
                    echo 'to is filed token';

            }else
                echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Some fields entered are missing</div></div></div>';
        }
    }

}

$_POST['token2']=md5(uniqid());
//shaker almazini