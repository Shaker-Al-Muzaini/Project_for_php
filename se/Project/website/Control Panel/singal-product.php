<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My store</title>
    <link rel="stylesheet" href="../../layout/Public web site/singal-pro.css" type="text/css">

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

    
    <main class="container">

        <div class="left-column">
            <img src="../../img/product1.jpg" alt="product1">
        </div>

        <div class="right-column">

            <div class="product-description">
                <span>Headphones</span>
                <h1>Luma Teal Green</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua.</p>
                <p id="total">total: <span id="total-prise">55.00$</span></p>
            </div>
          
            <div class="product-price">
                <label for="number">Quantity:</label>
                <input type="number" id="number" class="quantity-input" value="1" min="1" onchange="change();">
                <span id="dollar">55.00</span>
                <a href="#" class="cart-btn">Add to cart</a>
            </div>

        </div>
      </main>

      
    <div class="e-commerece-product">
        <div class="container">
            <div class="row">
                <hr>
                <h2 class="feature-items">May also know</h2>

                <div class="col-md-3">
                    <div class="product">
                        <div class="content">
                            <a href="#"><img src="../../img/product2.jpg" alt="product2"></a>
                        </div>
                        <div class="product-details">
                            <h4 class="title">Luma Ultra Violet</h4>
                            <div class="price"><ins>50.00$</ins></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product">
                        <div class="content">
                            <a href="#"><img src="../../img/product3.jpg" alt="product3"></a>
                        </div>
                        <div class="product-details">
                            <h4 class="title">Luma Dusty White</h4>
                            <div class="price"><ins>65.00$</ins></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product">
                        <div class="content">
                            <a href="#"><img src="../../img/product4.jpg" alt="product4"></a>
                        </div>
                        <div class="product-details">
                            <h4 class="title">Luma True Maroon</h4>
                            <div class="price"><ins>88.00$</ins></div>
                        </div>
                    </div>
                </div>

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

   <script src="../../js/single-product.js"></script>

</body>
</html>