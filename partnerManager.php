<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>
<?php include("javascript.php"); ?>

<head>
	<title>PPI | Partners Manager</title>
	<?php include("head.php"); ?>

</head>

<body class="goldNoBorder">
	<div class="container-fluid">
		<?php header2(); ?>
		<div class="container">
			<div class="leftSide">
				<p>Partners <span>Manager</span></p><br>

				<div class="preview">
                	<img id="partnerImagePreview">
                	<span class="btn btn-file">
                	Browse..<input type="file" name="partnerImage" id="uploadImagePartner" required onchange="PreviewImagePartner();" >
                	</span>
                </div>
			</div>
			
			<div class="rightSide">
				<div class="fieldName">
					<ul>
						<li>Partner Name :</li>
						<li>Contact Person :</li>
						<li>Contact Number :</li>
						<li>Address :</li>
						<li>Email :</li>
						<li>Website :</li>
						<li>Partnership Date :</li>
					</ul>
				</div>
				<div class="textBoxes">
					<input type="text" name="partnerName">
					<input type="text" name="contactPerson">
					<input type="text" name="contactNum">
					<input type="text" name="address">
					<input type="text" name="email">
					<input type="text" name="website">
					<input type="text" name="partnershipDate">
				</div>

				<div class="cmsButtons">
					<button type="button" class="btn-primary" onclick="location.href=''">SAVE</button>
					<button type="button" class="btn-warning" onclick="location.href=''">DELETE</button>
					<button type="button" class="btn-success" onclick="location.href=''">EDIT</button>
					<button type="submit" class="btn-info" onclick="location.href=''">ADD</button>
				</div>
			</div>

		</div>
		
	</div>	
	<?php floatButtonsPartnersManager() ?>
</body>

</html>