<?php
include_once('../includes/appStyle.php');
include_once('../includes/appJS.php');
include_once('Control Panel/Connect to the database.php');
session_start();
session_regenerate_id();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $NEMA =mysqli_real_escape_string ($cone,filter_var($_POST['NEMA'],FILTER_SANITIZE_STRING));
    $password =mysqli_real_escape_string($cone, filter_var($_POST['password'],FILTER_SANITIZE_STRING));
   $en_password=md5($password);;
    $p3 = "";
    $query = "select * from admin where NEMA='$NEMA' AND password='$en_password' ";
    $result = mysqli_query($cone, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($ros = mysqli_fetch_assoc($result)) {
            $_SESSION['id'] = $ros['id'];
            $_SESSION['NEMA'] = $NEMA;
            $_SESSION['password'] = $password;
            $_SESSION['agree'] = $p3;
            $_SESSION['login'] = true;
            $_SESSION['token'] = md5(uniqid(mt_rand(), true));
            if (isset($_POST['agree'])) {
                $p3 = $_POST['agree'];
            }
            if ($p3 == 1) {
                setcookie('loading', $NEMA, time() + 50, '/', 'localhost', true, true);
            }
            echo "<script> location.replace('Control Panel/home-CP.php')</script>";
        }
    }
    else
        echo '<div class="row"><div class="col-12"><div class="alert alert-danger">فشل الدخوال</div></div></div>';
    mysqli_close($cone);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../layout/login.css">
</head>
<body>

    <h1 class="h1-title"><a href="Control Panel/home.php" style="text-decoration: none;">my library</a></h1>
    <form action="" method="POST" id="login-form">
        <h2>Login</h2>
        <div class="txtb">
            <label>
                <input class="login-input" type="text" name="NEMA" placeholder="name" required>
            </label>
        </div>
        <div class="txtb">
            <label>
                <input class="login-input" type="password" name="password" placeholder="password" required>
            </label>
        </div>
        <div class="remember">
            <label>remember me:</label>
            <label>
                <input type="checkbox" name="agree" value = "1">
            </label>
        </div>
        <input class="login-submit" type="submit" name="submit" value="LOGIN">
    </form>

</body>
</html>