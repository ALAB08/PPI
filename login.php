<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>

<head>
	<title>PPI | LOGIN</title>
	<?php include("head.php"); ?>
</head>

<body class="gold">
	<div class="container-fluid">
		<div class="container">
			<div class="PPILogo2">
				<img src="img/PPI Logo2.png">
			</div>


			<div class="login_container">

				<div class="profile_pic">
					<img src="img/profile.png" width="100%">
				</div>
				<form action="" method="POST">
					<p>Username:</p>
					<input type="text" name="username" autofocus="autofocus" class="textbox" value="<?= !empty($_POST["username"]) ?$_POST["username"] : ''?>" required><br><br>
					<p>Password:</p>
					<input type="password" name="password" class="textbox" value="<?= !empty($_POST["password"]) ?$_POST["password"] : ''   ?>" required>

					<input type="submit" name="login" value="Login">

					<button onclick="window.location.href='register.php'">Create Account</button>
				</form>
			</div>

			<?php footer(); ?>
		</div>
	</div>	
</body>

</html>


<?php
	if(isset($_POST['login'])){
		$username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
		$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);

		$sql= "SELECT * FROM tbl_admin WHERE username = '".$username."' && password = '".$password."'";
		$query = mysqli_query($connection, $sql);

		if(mysqli_num_rows($query)==0){
        	echo("<script>alert('Wrong Username or password!');</script>");
      	}else{
			echo "<script>alert('Welcome '+'".$username."');</script>";
		 	echo "<script>window.location.href='home.php';</script>";  
     	}
	}

?>