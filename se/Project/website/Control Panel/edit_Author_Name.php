<?php
include_once('includes.php');
if (isset($_POST['Author_Name'])) {
    $Author_Name= $_GET['Author_Name'];
    $query = "select * from authorname where Author_Name=$Author_Name limit 1";
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
    <title>edit_author</title>
    <link rel="stylesheet" href="../../layout/Control Panel/cat-insert-style.css">
</head>
<body>


<h1 class="h1-title"><a href="Author_Name.php">edit_author</a></h1>


<div id="login-div">

    <h2>edit Author</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] =='POST') {
        $Author_Name = filter_var($_GET['Author_Name'],FILTER_SANITIZE_NUMBER_INT);
        $NEMA =filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
        $t = $_SESSION['token'];
        $t2 = $_POST['token2'];
            if (!empty($Author_Name)) {
                if ($_POST['token2'] == $_SESSION['token']){
                $query = "update authorname set Name = '$NEMA' where Author_Name= $Author_Name ";
                $result = mysqli_query($cone, $query);
                if ($result) {
                    echo '<div class="row"><div class="col-12"><div class="alert alert-success">تم تحديث الطالب بنجاح</div></div></div>';
                } else {
                    echo '<div class="row"><div class="col-12"><div class="alert alert-danger">فشل تحديث هذا الطالب</div></div></div>';
                }
            } else {
                    echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to token</div></div></div>';

            }
        }else
                echo '<div class="row"><div class="col-12"><div class="alert alert-danger">بعض الحقول مفقودة</div></div></div>';
    }
        else {
            if (isset($_GET['Author_Name'])) {
                $Author_Name = $_GET['Author_Name'];
                $query = "select * from authorname where Author_Name= $Author_Name limit 1";
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

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']).'?Author_Name='.$_GET['Author_Name'];?>" method="POST" id="my-form" enctype="multipart/form-data">
                <input type="hidden" name="token2" value='<?php echo $_SESSION['token']?>'>
                <div class="form-group">
                    <label for="type">Name</label>
                    <label for="name"></label><input type="text" name="Name" id="name" class="form-control" value="<?= ((isset($row)) ? $row["Name"] : "" )?>">
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit" id="save-btn">Save</button>
            </form>
        </div>
    </div>


</div>

</body>
</html>