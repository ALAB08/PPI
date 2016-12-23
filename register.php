<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>
<?php include("javascript.php"); ?>

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
					</div>
				</div>
			</form>

		</div>

		<?php footer(); ?>
	</div>	
</body>

</html>



<?php
	if(isset($_POST['register'])){

		if (empty($_FILES["adminImage"]["name"])){
    		echo "";
		}else{
      		function GetImageExtension($imagetype){
       			if(empty($imagetype)) return false;
       				switch($imagetype){
			           case 'image/bmp': return '.bmp';
			           case 'image/gif': return '.gif';
			           case 'image/jpeg': return '.jpg';
			           case 'image/png': return '.png';
			           default: return false;
       				}
     		}

			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$position = $_POST['position'];
			$admin_type = $_POST['admin_type'];

			$file_name=$_FILES["adminImage"]["name"];
			$temp_name=$_FILES["adminImage"]["tmp_name"];
			$imgtype=$_FILES["adminImage"]["type"];
			$ext= GetImageExtension($imgtype);
			$imagename=$_FILES["adminImage"]["name"];
			

			$target_path = "ppi/user_images/".$imagename;
			$path="/Applications/XAMPP/xamppfiles/htdocs/";
			
    		//$path="C://xampp/htdocs/";
    		//$target_path = "ppi/images_data".$imagename;

  			if(move_uploaded_file($temp_name,$path.$target_path)) {

				$sql = "INSERT INTO tbl_admin (last_name, first_name, position, admin_type, username, password, photo) VALUES('".$last_name."', '".$first_name."', '".$position."', '".$admin_type."', '".$username."', '".$password."', '".$target_path."')";
				$query = mysqli_query($connection, $sql);

				if($query){
					echo "<script>alert('Congratulations! Your account is save on the system')</script>";
					echo "<script>window.location.href='login.php'</script>";
				}else{
					echo "<script>alert('Failed to create an account! Make sure that you choose your photo.')</script>";
					echo mysqli_error($connection);
				}
			}
     	}
	}

?>