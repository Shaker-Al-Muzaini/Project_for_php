<?php
include_once('../../includes/appStyle.php');
include_once('../../includes/appJS.php');
include_once ('Connect to the database.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My store</title>
    <link rel="stylesheet" href="../../layout/Public web site/product-style.css" type="text/css">
    <link rel="stylesheet" href="../../layout/Public web site/project.css"/>
    <link rel="stylesheet" href="../../layout/Public web site/font-awesome.css"/>
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>

</head>
<body>
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
                <form action="serch.php" method="post">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                               aria-describedby="search-addon" />
                        <button type="submit" name="b" class="btn btn-outline-primary">search</button>
                    </div>
                </form>
            </li>
        </ul>
    </div>
</nav>

<hr class="hr-header">

<div class="e-commerece-product">
    <div class="container">
        <div class="row">
            <div  class="feature-items"><h2>Featur items</h2></div>
            <div class="feature-items">
                <ul>
                    <li><a href="computer section.php">computer section</a></li>
                    <li><a href="Department of Media.php">Department of Media</a></li>
                    <li><a href="Science Department.php">Science Department</a></li>
                    <li><a href="Languages Department.php">Languages Department</a></li>
                </ul>
            </div>
            <?php
            error_reporting(0)or die('noo');
            $limit =6;
            $page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
            $offset = ($page - 1) * $limit;
            $sql="select id,Book_name,Author_Name,DarAl_nasher,issue_number,book_rating,IMAGE from book_table limit $limit offset $offset";
            $reslt = mysqli_query($cone,$sql);
            if(mysqli_num_rows($reslt)>0 ){
                while ($ros=mysqli_fetch_assoc($reslt)){
                    while ($ros=mysqli_fetch_assoc($reslt)){
                        switch ($ros['book_rating']) {
                            case 1:
                                $cat = "computer section";
                                break;
                            case 2:
                                $cat = "Department of Media";
                                break;
                            case 3:
                                $cat = "Science Department";
                                break;

                            default:
                                $cat ="Languages Department";
                                break;
                        }
                    echo
                        '<div class="col-md-3">'.
                        '<div class="product">'.
                        '<div class="content">'.
                        '<img height="300px" width="300px" src="'.$ros['IMAGE'].'">'.
                        '</div>'.
                        '<div class="product-details">'.
                        '<div class="grid-container">'.
                        '<div><h4 class="title">'.$ros['Book_name'].'</h4></div>'.
                        '<div><h4 class="title title2">'.$cat.'</h4></div>'.
                        '</div>'.
                        '<div><h4 class="title">'.$ros['Author_Name'].'</h4></div>'.
                        '<div><h4 class="title">'.$ros['DarAl_nasher'].'</h4></div>'.
                        // '<div class="price"><ins id="total">'. (1 - $ros['DISCOUNT'] / 100) * $ros['PRISE'].'$'.'</ins><del id="real-price" class="price-small">'.$ros['PRISE'].'$'.'</del></div>'.
                        '</div>'.
                        '</div>'.
                        '</div>';
                }
            }
            ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                $limit = 6;
                $count_query = "select count(id) as rows_no from book_table";
                $count_result = mysqli_query($cone, $count_query);
                $count_row = mysqli_fetch_assoc($count_result);
                $rows_no = $count_row['rows_no'];
                $pages = ceil($rows_no / $limit);
                echo '<nav aria-label="Page navigation example">'.
                    '<ul class="pagination">';
                for ($i = 1 ; $i <= $pages ; $i++) {
                    echo '<li class="page-item"><a href="?page='. $i .'" class="page-link">'. $i .'</a></li>';
                }
                //echo'<li class="page-item"><a class="page-link" href="#">Next</a></li>';
                echo '</ul>' .'</nav>';
                }
                mysqli_close($cone);
                ?>
            </div>
        </div>
    </div>
</div>



<div class="div-form">
    <div class="inner-width">
        <form action="product-CP.php">
            <h1>Get in touch with us</h1>
            <a href="../login.php" class="link-button">Get in touch</a>
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
    <div class="our-team text-center" style="text-align: center;">
        <div class="container">
            <div class="the-team">
                <div class="person">
                    <img src="ss.jpg"  width="200" height="200"/>
                    <h3 class="upper">shaker almuzaini</h3>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/profile.php?id=100009428056364"><i class="fa fa-facebook fa-lg"></i></a>
                        <i class="fa fa-twitter fa-lg"></i>
                        <i class="fa fa-google-plus fa-lg"></i>
                    </div>
                </div>
            </div>
        </div>
</footer>
</body>
</html>