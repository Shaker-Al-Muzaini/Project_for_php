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
    <title>Category_insert</title>
    <link rel="stylesheet" href="../../layout/Control Panel/cat-insert-style.css">
</head>
<body>

	<h1 class="h1-title"><a href="category-CP.php">Category</a></h1>

    <div id="login-div">
        <h2>Insert_Category</h2>

		<div class="row">
			<div class="col-12">

				<form action="category-insert-CP-cod.php" method="POST" id="my-form" enctype="multipart/form-data">
                    <input type="hidden" name="token2" value='<?php echo $_SESSION['token']?>'>
					<div class="form-group">
                        <label for="NEMA">NAME</label>
                        <label for="name"></label><select name="NEMA" id="name" class="form-control">
							<option value="-1"></option>
							<option value="1">computer section</option>
							<option value="2">Department of Media</option>
							<option value="3">Science Department</option>
							<option value="4">Languages Department</option>
						</select>
					</div>
					
					<div class="form-group">
						<label for="Description">Description</label>
						<input type="text" name="DESCRIPTION" id="Description" class="form-control">
					</div>
					<button class="btn btn-primary btn-lg btn-block" type="submit" id="save-btn">Save</button>
				</form>
			</div>
		</div>


    </div>

</body>
</html>