<?php
include_once ('includes.php');
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

            <li><a href="home-CP.php" class="cool-link">DASHBOARD</a></li>
            <li><a href="product-CP.php" class="cool-link">library</a></li>
            <li><a href="category-CP.php"  class="cool-link">CATEGORY</a></li>
            <li><a href="Author_Name.php" id="link-a" class="cool-link">Author-Name</a></li>
            <li><a href="Messages.php" class="cool-link">Messages</a></li>
        </ul>
    </div>
</nav>


<div class="container">
    <h3>hello <?php echo $_SESSION['NEMA']; ?></h3>

    <hr class="hr2">

    <div class="ri-le">
        <div class="item"><h3>manage category</h3></div>
        <div class="item2"><a href="AuthorName_insert.php"><button type="button" class="btn btn-primary">Add Author</button></a></div>
    </div>



    <div class="row">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
                <?php
                $sql="select Author_Name ,Name from authorname";
                $reslt = mysqli_query($cone,$sql);
                if(mysqli_num_rows($reslt)>0 ){
                    while ($ros=mysqli_fetch_assoc($reslt)){
                        echo
                            '<tr>'.'<td>'.$ros['Author_Name'].'</td>'
                            .'<td>'.$ros['Name'].'</td>'.
                            '<td>'.'<a href=edit_Author_Name.php?Author_Name='.$ros['Author_Name'].'>'.'<button type="button" class="btn btn-success">Edit</button>'.'</a>'.'</td>'.
                            '<td>'.'<form action="delat_AuthorName.php" method="post">'.
                            '<input type="hidden" name="Author_Name" value="'.$ros['Author_Name'].'">
                                               <button type="submit" class="btn btn-danger">DELETE</button>
                                     <input type="hidden" name="token2" value='.$_SESSION['token'].'>
                                                                                   
                                                            </form>'.'</td>'.
                            ' </tr>' ;
                    }
                }
                mysqli_close($cone);
                ?>
                </thead>
            </table>
        </div>
    </div>

</div>


<div class="div-form">
    <div class="inner-width">
        <form action="../login.php" method="POST">
            <h1>welcome <span class="user">SHAKER</span></h1>
            <a href="../login.php" class="link-button">log out</a>
        </form>
    </div>
</div>


<footer class="footer">
    <h1 class="footer-h1-title">HeadPhone</h1>

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