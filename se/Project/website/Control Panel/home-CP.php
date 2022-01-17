<?php
include_once('includes.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Store</title>
    <link rel="stylesheet" href="../../layout/Control Panel/home-CP-Style.css" type="text/css">
</head>
<body>

<h1 class="h1-title"><a href="home-CP.php">my library</a></h1>

<hr>

<nav id="nav-bar">
    <div class="nav-div">
        <ul>
            <li><a href="home-CP.php" id="link-a" class="cool-link">DASHBOARD</a></li>
            <li><a href="product-CP.php" class="cool-link">library</a></li>
            <li><a href="category-CP.php" class="cool-link">CATEGORY</a></li>
            <li><a href="Author_Name.php" class="cool-link">AuthorName</a></li>
            <li><a href="Messages.php" class="cool-link">Messages</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <h3>hello <?php echo $_SESSION['NEMA']; ?></h3>
    <hr class="hr2">
    <h3>other admin</h3>
    <div class="row">
        <div class="col-12">
            <table class="table table-active">
                <thead>
                <tr>
                    <th>ID</th>
                    <th class="table-primary">NAME</th>
                    <th>change_password</th>
                </tr>
                <?php
                $sql="select id, NEMA from admin";
                $reslt = mysqli_query($cone,$sql);
                if(mysqli_num_rows($reslt)>0 ){
                    while ($ros=mysqli_fetch_assoc($reslt)){
                        echo
                            '<tr>'.'<td class="table-secondary">'.$ros['id'].'</td>'
                            .'<td>'.$ros['NEMA'].'</td>'.
                            '<td>'.'<a href="change_password.php">'.'<button type="button" class="btn btn-success">Edit</button>'.'</a>'.'</td>'.
                            ' </tr>' ;

                    }
                }
                mysqli_close($cone);
                ?>
            </table>
        </div>
    </div>
</div>
<div class="div-form">
    <div class="inner-width">
        <form action="" method="POST">
            <h1>welcome <span class="user"><?php echo "shaker";?></span></h1>
            <a href="log out.php" class="link-button">log out</a>
        </form>
    </div>
</div>
<footer class="footer">
    <h1 class="footer-h1-title">my library</h1>
    <nav id="footer-nav-bar">
        <div class="footer-nav-div">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HELP</a></li>
                <li><a href="#">PRIVACY POLICY</a></li>
                <li><a href="#">HOW IT WORK!</a></li>
                <li><a href="#">CONTACT US</a></li>
            </ul>
        </div>
    </nav>

    <hr class="footer-hr">
    <p class="footer-copyright">copyright©2021 Headphone</p>
</footer>
</body>
</html>