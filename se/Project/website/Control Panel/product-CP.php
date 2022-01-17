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
                <li><a href="product-CP.php" id="link-a" class="cool-link">library</a></li>
                <li><a href="category-CP.php" class="cool-link">CATEGORY</a></li>
                <li><a href="Author_Name.php" class="cool-link">AuthorName</a></li>
                <li><a href="Messages.php" class="cool-link">Messages</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h3>hello <?php echo $_SESSION['NEMA']; ?></h3>

        <hr class="hr2">

        <div class="ri-le">
            <div class="item"><h3>manage product</h3></div>
            <div class="item2"><a href="product-insert-CP.php"><button type="button" class="btn btn-primary">Add library</button></a></div>
        </div>

            <div class="row">
                <div class="col-12">
                    <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Book_name</th>
                                <th>Author_Name</th>
                                <th>issue_number</th>
                                <th>book_rating</th>
                                <th>DarAl_nasher</th>
                                <th>IMAGE</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                            <?php
                            $limit = 4;
                            $page = filter_var((!empty($_GET['page'])) ? $_GET['page'] : 1,FILTER_SANITIZE_NUMBER_INT);
                            $offset = ($page - 1) * $limit;
                            $sql="select id,Book_name,Author_Name,DarAl_nasher,issue_number,book_rating,IMAGE from book_table limit $limit offset $offset ";
                            $reslt = mysqli_query($cone,$sql);
                            if(mysqli_num_rows($reslt)>0 ){
                                while ($ros=mysqli_fetch_assoc($reslt)){
                                    echo
                                        '<tr>'.'<td>'.$ros['id'].'</td>'
                                        .'<td>'.$ros['Book_name'].'</td>'
                                        .'<td>'.$ros['Author_Name'].'</td>'
                                        .'<td>'.$ros['issue_number'].'</td>'
                                        .'<td>'.$ros['book_rating'].'</td>'
                                        .'<td>'.$ros['DarAl_nasher'].'</td>'.
                                        '<td>'.'<img width="100px" height="80px" class="img-thumbnail" src="'.$ros['IMAGE'].'">'.'</td>'.
                                        '<td>'.'<a href="prodcut-edit-CP.php?id='.$ros['id'].'">'.'<button type="button" class="btn btn-success">Edit</button>'.'</a>'.'</td>'.
                                        '<td>'.'<form action="deelat.php" method="post">'.
                                        '<input type="hidden" name="id" value="'.$ros['id'].'">
                                               <button type="submit" class="btn btn-danger">DELETE</button>  
                                               <input type="hidden" name="token2" value='.$_SESSION['token'].'>
                                                            </form>'.'</td>'.
                                        ' </tr>' ;

                                }
                            }
                            ?>
                    </table>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?php
                            $limit = 4;
                            $count_query = "select count(id) as rows_no from book_table";
                            $count_result = mysqli_query($cone, $count_query);
                            $count_row = mysqli_fetch_assoc($count_result);
                            $rows_no = $count_row['rows_no'];
                            $pages = ceil($rows_no / $limit);
                            echo '<nav aria-label="Page navigation example">'.
                            '<ul class="pagination">';
                            for ($i = 1 ; $i <= $pages ; $i++) {
                                echo '<li class="page-item"><a href="?page='. $i .'" class="page-link">' . $i .  '</a></li>';
                            }
                            echo'<li class="page-item"><a class="page-link" href="?page=1">Next</a></li>';
                            echo '</ul>' .'</nav>';

                            mysqli_close($cone);
                            ?>
                        </div>
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