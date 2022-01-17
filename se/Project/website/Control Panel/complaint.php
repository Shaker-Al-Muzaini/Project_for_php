<?php
session_start();
include_once('../../includes/appStyle.php');
include_once('../../includes/appJS.php');
include_once ('Connect to the database.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My store</title>
    <link rel="stylesheet" href="../../layout/Public web site/product-style.css" type="text/css">
    <link rel="stylesheet" href="../../layout/Public web site/project.css"/>
    <link rel="stylesheet" href="../../layout/Public web site/font-awesome.css"/>
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>complaint</title>
</head>
<body>
<form method="POST" action="complaint_cod_php.php">
    <input type="hidden" name="token2" value='<?php echo $_SESSION['token']?>'>
<h1 class="h1-title"><a href="home.php">my library</a></h1>

<hr>

<nav id="nav-bar">
    <div class="nav-div">
        <ul>
            <li><a href="home.php" id="link-a" class="cool-link">HOME</a></li>
            <li><a href="product.php" class="cool-link"> library</a></li>
            <li><a href="complaint.php" class="cool-link">complaint</a></li>
            <li><a href="#" class="cool-link">CONTACT US</a></li>
            <li>
            </li>
        </ul>
    </div>
</nav>

<br>
<table>
<H2 style='color:rebeccapurple ;text-align:center'>Write what you want in the complaint</H2>
<label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">NAME</span>
        <input style='color:#143a80' type="text" class="form-control" placeholder="username" name="name_c" >
</div>
    </label>
<label>
<div class="input-group mb-3">
    <span class="input-group-text" style='color:#143a80' id="inputGroup-sizing-sm">EMAIL</span>
    <input type="email" class="form-control"  placeholder="name@example.com"  name="email_c">
</div>
    </label>
<br><br>
<label>

    <div class="form-floating mb-3">
        <label style="color:royalblue" >Comments</label>
        <textarea class="form-control" style='color:#000000' rows="10" cols="61" placeholder="Leave a comment here" name="tx"></textarea>

    </div>
    </label>
<br>
<label>
<button class="btn btn-primary btn-lg btn-block" type="submit" id="save-btn">submit</button>
</label>
</form>
</body>
</html>