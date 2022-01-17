<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $p1 = $_POST['NEMA'];
    $p2 = $_POST['password'];
    $p3 = "";
    $_SESSION['NEMA'] = $p1;
    $_SESSION['password'] = $p2;
    $_SESSION['agree'] = $p3;
    $_SESSION['login'] = true;
    if (isset($_POST['agree'])) {
        $p3 = $_POST['agree'];
    } else
        echo "";
    if ($p3 ==1) {
        setcookie('loading', $p1, time() + 50, '/', 'localhost', true, true);
    } else
        echo "do not remind me<br>";

    echo "<a href='log out.php'> Exit</a>";
} else
    echo "<script> location.replace('../login.php')</script>";

