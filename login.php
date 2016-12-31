<!DOCTYPE html>

<html>

<head>
	<title>PPI | Log In</title>
	<?php include("head.php"); ?>
</head>

	<?php include("queries.php"); ?>
	<?php include("modals.php"); ?>
	<?php //unset($_SESSION['super_id']); ?>

	
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

					<button type="button" data-toggle="modal" data-target="#verifyAccess">Create Account</button>
				</form>
			</div>

			<?php footer(); ?>
		</div>
	</div>	
</body>

</html>