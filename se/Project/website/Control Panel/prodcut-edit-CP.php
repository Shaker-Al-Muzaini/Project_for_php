<?php
include_once('includes.php');
if (isset($_POST['id'])) {

    $id =  filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
    $query = "select * from manage_product where id = $id limit 1";
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
    <title>edit Product</title>
    <link rel="stylesheet" href="../../layout/Control Panel/pro-insert-style.css">
</head>
<body>
    <h1 class="h1-title"><a href="product-CP.php"> library</a></h1>
    <div id="login-div">
        <h2>edit Product</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_GET['id'];
            $Book_name = filter_var($_POST['Book_name'], FILTER_SANITIZE_STRING);
            $Author_Name = filter_var($_POST['Author_Name'], FILTER_SANITIZE_STRING);
            $DarAl_nasher = filter_var($_POST['DarAl_nasher'], FILTER_SANITIZE_STRING);
            $issue_number = filter_var($_POST['issue_number'], FILTER_SANITIZE_NUMBER_INT);
            //$file=$_FILES['IMAGE']['name'];
            $book_rating = $_POST['book_rating'];
            $t = $_SESSION['token'];
            $t2 = $_POST['token2'];
            if ($_POST['token2'] == $_SESSION['token']) {
                if (!empty($id)) {

                    $query = "update book_table set Book_name ='$Book_name',Author_Name='$Author_Name',book_rating='book_rating' 
                         ,issue_number='issue_number' ,DarAl_nasher='$DarAl_nasher'where id= $id";
                    $result = mysqli_query($cone, $query);
                    if ($result) {
                        echo '<div class="row"><div class="col-12"><div class="alert alert-success">تم تحديث الطالب بنجاح</div></div></div>';
                    } else {
                        echo '<div class="row"><div class="col-12"><div class="alert alert-danger">فشل تحديث هذا الطالب</div></div></div>';
                    }
                } else {
                    echo '<div class="row"><div class="col-12"><div class="alert alert-danger">بعض الحقول مفقودة</div></div></div>';
                }
            }else
                echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to token</div></div></div>';
        }
        else {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = "select * from book_table where id= $id limit 1";
                $result = mysqli_query($cone, $query);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                } else
                    echo'<div class="row"><div class="col-12"><div class="alert alert-danger">لا  يوجد </div></div></div>';
            }else
                echo"";

        }
        ?>
		<div class="row">
			<div class="col-12">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) .'?id='.$_GET['id']; ?>" method="POST" id="my-form" enctype="multipart/form-data">
					<div class="form-group">
						<label for="Book_name">Book_name</label>
						<input type="text" name="Book_name" id="name" class="form-control" value="<?=((isset($row)) ? $row["Book_name"] : "" ) ?>">
					</div>
                    <div class="form-group">
						<label for="Author_Name">Author_Name</label>
                            <input type="text" name="Author_Name" id="type" class="form-control" value="<?= ((isset($row)) ? $row["Author_Name"] : "" ) ?>">
					</div>
					<div class="form-group">
						<label for="issue_number">issue_number</label>
						<input type="text" name="issue_number" id="prise" value="<?= ((isset($row)) ? $row["issue_number"] : "" ) ?>" class="form-control">
					</div>
                    <div class="form-group">
						<label for="type">book_rating</label>
						<select name="book_rating" id="type" class="form-control">
							<option value="-1"></option>
							<option value="1" <?php if(isset($row) &&$row["book_rating"]=='1')
                                echo "selected"; ?>>computer section</option>
							<option value="2" <?php if(isset($row) &&$row["book_rating"]=='2')
                                echo "selected"; ?>>Department of Media</option>
							<option value="3" <?php if(isset($row) &&$row["book_rating"]=='3')
                                echo "selected"; ?>>Science Department</option>
							<option value="4" <?php if(isset($row) &&$row["book_rating"]=='4')
                                echo "selected"; ?>>Languages Department</option>
						</select>
					<div class="form-group">
                        <input type="hidden" name="token2" value='<?php echo $_SESSION['token']?>'>
						<label for="DarAl_nasher">DarAl_nasher</label>
						<input type="text" name="DarAl_nasher" id="discount" value="<?= ((isset($row)) ? $row["DarAl_nasher"] : "" )?>" class="form-control">
					</div>
					<button class="btn btn-primary btn-lg btn-block" type="submit" id="save-btn">Save</button>
				</form>
			</div>
		</div>
    </div>
</body>
</html>