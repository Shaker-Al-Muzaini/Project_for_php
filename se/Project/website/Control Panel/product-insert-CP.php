<?php
include_once('includes.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert library</title>
    <link rel="stylesheet" href="../../layout/Control Panel/pro-insert-style.css">
</head>
<body>
    <h1 class="h1-title"><a href="product-CP.php">library</a></h1>
    <div id="login-div">
        <h2>Insert library</h2>
		<div class="row">
			<div class="col-12">
				<form action="product-insert-CP_cod.php" method="POST" id="my-form" enctype="multipart/form-data">
					<div class="form-group">
						<label for="Book_name">Book_name</label>
						<input type="text" name="Book_name" id="name" class="form-control">
					</div>
                    <div class="form-group">
                        <label for="Author_Name">Author_Name</label>
                   <input type="text" name="Author_Name" id="name" class="form-control">
                    </div>
					<div class="form-group">
						<label for="prise">issue_number</label>
						<input type="text" name="issue_number" id="prise" class="form-control">
					</div>
                    <div class="form-group">
						<label for="book_rating">book_rating</label>
						<select name="book_rating" id="type" class="form-control">
							<option value="-1"></option>
							<option value="1">computer section</option>
							<option value="2">Department of Media</option>
							<option value="3">Science Department</option>
							<option value="4">Languages Department</option>
						</select>
					</div>

					<div class="form-group">
						<label for="personal_image">Image</label>
						<input type="file" name="IMAGE" class="form-control">
					</div>
                    <input type="hidden" name="token2" value='<?php echo $_SESSION['token']?>'>
					<div class="form-group">
						<label for="DarAl_nasher">DarAl_nasher</label>
						<input type="text" name="DarAl_nasher" id="discount" class="form-control">
					</div>
					<button class="btn btn-primary btn-lg btn-block" type="submit" id="save-btn">Save</button>

				</form>
			</div>
		</div>
    </div>
</body>
</html>