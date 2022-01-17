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


</head>
<body>

    <h1 class="h1-title"><a href="home.php">my library</a></h1>

    <hr>

        <nav id="nav-bar">
            <div class="nav-div">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="product.php" id="link-a"> library</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">CONTACT US</a></li>
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
                    <li><a href="computer section.php">  computer section</a></li>
                        <li><a href="Department of Media.php"> Department of Media</a></li>
                        <li><a href="Science Department.php">Science Department</a></li>
                        <li><a href="Languages Department.php">Languages Department</a></li>
                    </ul>
                </div>
                <?php
                $sql="select id,Book_name,Author_Name,DarAl_nasher,issue_number,book_rating,IMAGE from book_table where book_rating = 1";
                $reslt = mysqli_query($cone,$sql);
                if(mysqli_num_rows($reslt)>0 ){
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
                                 '<div><h4 class="title">'.$ros['Author_Name'].'</h4></div>'.
                                 '<div><h4 class="title">'.$ros['DarAl_nasher'].'</h4></div>'.
                                // '<div><h4 class="title">'.$ros['book_rating'].'</h4></div>'.
                                                  '<div><h4 class="title title2">'.$cat.'</h4></div>'.
                                               '</div>'.
                                           '</div>'.
                                        '</div>'.
                                    '</div>';
                        }
                    }
                ?>

                

            </div>
        </div>
    </div>



    <div class="div-form">
        <div class="inner-width">
            <form action="">
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

    <p class="footer-copyright">copyright©2020 Headphone</p>
   </footer>
</body>
</html>