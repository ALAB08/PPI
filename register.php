<!DOCTYPE html>

<html>

<?php include("javascript.php"); ?>
<?php include("queries.php");?>
<?php session("register") ?>

<head>
	<title>PPI | CREATE ACCOUNT</title>
	<?php include("head.php"); ?>
</head>

<body class="gray">
	<div class="container-fluid">
		<div class="container">
			<div class="PPILogo2">
				<img src="img/PPI Logo2.png">

			</div>

			<div class="create_container">
				<p>CREATE ACCOUNT</p>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="right_container">
						<table border="0" width="100%">
							<tr>
								<td>Lastname:</td>
								<td><input type="text" name="last_name" class="textbox" value="<?= !empty($_POST["last_name"]) ?$_POST["last_name"] : ''?>" required ></td>
							</tr>

							<tr>
								<td>Firstname:</td>
								<td><input type="text" name="first_name" class="textbox" value="<?= !empty($_POST["first_name"]) ?$_POST["first_name"] : ''?>" required></td>
							</tr>

							<tr>
								<td>Position:</td>
								<td><select name="position">
									<option value="position1">position 1</option>
									<option value="position2">position 2</option>
									<option value="position3">position 3</option>
									</select>
								</td>
							</tr>

							<tr>
								<td>Admin Type:</td>
								<td><select name="admin_type">
										<option value="Super Admin">Super Admin</option>
										<option value="Administrator">Administrator</option>
										<option value="Staff">Staff</option>
									</select>
								</td>
							</tr>

							<tr>
								<td>Username:</td>
								<td><input type="text" name="username" class="textbox" value="<?= !empty($_POST["username"]) ?$_POST["username"] : ''?>" required></td>
							</tr>

							<tr>
								<td>Password:</td>
								<td><input type="password" name="password" class="textbox" value="<?= !empty($_POST["password"]) ?$_POST["username"] : ''?>" required></td>
							</tr>
						</table>
					</div>

					<div class="left_container">
						<img id="adminImagePreview">
						<input type="file" name="adminImage" id="uploadImage" required onchange="PreviewImage();" >
					</div>	

					<div class="register_buttons">
						<button type="submit" class="right" name="register">Save Registration</button>
						<button type="submit" class="right" name="register" style="background-color:transparent; color: #4a442a; border: 1px solid #4a442a; ?>" onclick="location.href='index.php'">Cancel</button>

					</div>
				</div>
			</form>

		</div>

		<?php footer(); ?>
	</div>	
</body>

</html>