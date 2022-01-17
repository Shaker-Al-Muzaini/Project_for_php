<?php
include_once('includes.php');
include_once('../../includes/appStyle.php');
include_once('../../includes/appJS.php');
if (isset($_POST['book_rating'])){
    $book_rating =filter_var($_POST['book_rating'],FILTER_SANITIZE_STRING);
    $query = "select * from book_rating where book_rating = $book_rating limit 1";
    $result = mysqli_query($cone, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit_Category</title>
    <link rel="stylesheet" href="../../layout/Control Panel/cat-insert-style.css">
</head>
<body>


	<h1 class="h1-title"><a href="category-CP.php">Category</a></h1>


    <div id="login-div">

        <h2>edit_Category</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] =='POST') {
            $book_rating =mysqli_real_escape_string($cone,filter_var($_GET['book_rating'],FILTER_SANITIZE_NUMBER_INT));
            $NEMA = mysqli_real_escape_string( $cone,filter_var($_POST['NEMA'],FILTER_SANITIZE_STRING));
            $DESCRIPTION = mysqli_real_escape_string($cone, filter_var($_POST['DESCRIPTION'],FILTER_SANITIZE_STRING));
        $t = $_SESSION['token'];
        $t2 = $_POST['token2'];
        if ($_POST['token2'] == $_SESSION['token']) {
            if (!empty($book_rating)) {
                $query = "update book_rating set NEMA ='$NEMA',DESCRIPTION='$DESCRIPTION' where book_rating= $book_rating ";
                $result = mysqli_query($cone, $query);
                if ($result) {
                    echo '<div class="row"><div class="col-12"><div class="alert alert-success">تم تحديث الطالب بنجاح</div></div></div>';
                } else {
                    echo '<div class="row"><div class="col-12"><div class="alert alert-danger">فشل تحديث هذا الطالب</div></div></div>';
                }
            } else {
                echo '<div class="row"><div class="col-12"><div class="alert alert-danger">بعض الحقول مفقودة</div></div></div>';
            }
        }
        else
            echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to token</div></div></div>';

        } else
            if (isset($_GET['book_rating'])){
                $book_rating = filter_var($_GET['book_rating'],FILTER_SANITIZE_NUMBER_INT);
                $query = "select * from book_rating where book_rating = $book_rating limit 1";
                $result = mysqli_query($cone, $query);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                }else

                    echo'<div class="row"><div class="col-12"><div class="alert alert-danger">لا  يوجد </div></div></div>';
            }else
                echo"";

        ?>

		<div class="row">
			<div class="col-12">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']).'?book_rating='.$_GET['book_rating'];?>" method="POST" id="my-form" enctype="multipart/form-data">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="NEMA" id="name" class="form-control" value="<?= ((isset($row)) ? $row["NEMA"] : "" ) ?>" required>
					</div>

					<div class="form-group">
						<label for="Description">Description</label>
						<input type="text" name="DESCRIPTION" id="Description" class="form-control" value="<?= ((isset($row)) ? $row["DESCRIPTION"] : "" ) ?>" required>
					</div>
                    <input type="hidden" name="token2" value='<?php echo $_SESSION['token']?>'>
					<button class="btn btn-primary btn-lg btn-block" type="submit" id="save-btn">Save</button>
				</form>
			</div>
		</div>


    </div>

</body>
</html>