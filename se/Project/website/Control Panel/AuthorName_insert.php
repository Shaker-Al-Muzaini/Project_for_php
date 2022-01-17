<?php
include_once('includes.php');
include_once('../../includes/appStyle.php');
include_once('../../includes/appJS.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert author</title>
    <link rel="stylesheet" href="../../layout/Control Panel/cat-insert-style.css">
</head>
<body>

<h1 class="h1-title"><a href="Author_Name.php">AuthorName</a></h1>

<div id="login-div">

    <h2>Insert author</h2>

    <div class="row">
        <div class="col-12">

            <form action="AuthorName_insert_cod.php" method="POST" id="my-form" enctype="multipart/form-data">
                <input type="hidden" name="token2" value='<?php echo $_SESSION['token']?>'>
                <div class="form-group">
                    <label for="type">Name</label>
                        <input type="text" name="Name" id="name" class="form-control">
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit" id="save-btn">Save</button>

            </form>

        </div>
    </div>


</div>

</body>
</html>