<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>
<?php include("javascript.php"); ?>

<head>
	<title>PPI | Update Seminar</title>
	<?php include("head.php"); ?>
	<?php include("queries.php"); ?>
	<?php session("regular"); ?>

</head>


<body class="goldNoBorder">
	<div class="container-fluid">
		<?php header2(); ?>
		<div class="container">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="leftSideSeminar">
				<p>Update <span>Seminar</span></p><br>
				
				<?php 
					$sql = "SELECT * FROM tbl_seminars WHERE id = '".$_GET['id']."'";
					$query = mysqli_query($connection,$sql);
					$result = mysqli_fetch_assoc($query);
				?>
                <div class="preview">
					<div class="logoBox">
						<img id="seminarLogoImagePreview" class="logoPreview" src="<?php echo $result['seminar_logo']; ?>">
						<img id="seminarLogo2ImagePreview" class="logoPreview" src="<?php echo $result['seminar_logo']; ?>">
						<span class="btn btn-file two" style="color: white">Seminar Logo<input type="file" name="seminarLogoImage" id="uploadImageSeminarLogo" onchange="PreviewImageSeminarLogo();" ></span>
					</div>
                	
                	<img id="seminarBannerImagePreview" class="bannerPreview" src="<?php echo $result['seminar_banner']; ?>">
                	<span class="btn btn-file" style="color: white">
                	Seminar Banner<input type="file" name="seminarBannerImage" id="uploadImageSeminarBanner" onchange="PreviewImageSeminarBanner();" >
                	</span>
                </div>
			</div>
			
			<div class="rightSideSeminar">
				<div class="fieldName">
					<ul>
						<li>Title of Seminar :</li>
						<li>Period Covered :</li>
						<li>Areas :</li>
						<li>Remarks :</li>
						<li>Luzon Venue :</li>
						<li>Visayas Venue :</li>
						<li>Mindanao Venue :</li>
					</ul>
				</div>
				<div class="textBoxes">
					<input type="text" name="title_seminar" value="<?php echo $result['title_seminar']; ?>">
					<input type="date" name="period_to" value="<?php echo $result['period_to']; ?>"> to <input type="date" name="period_from" value="<?php echo $result['period_from']; ?>">

					<select name="areas" id="areasCollection">
						<option value="Luzon Only" id="luzon" <?php if($result['areas']=="Luzon Only") echo 'selected'; ?>>Luzon Only</option>
						<option value="Visayas Only" id="visayas" <?php if($result['areas']=="Visayas Only") echo 'selected'; ?>>Visayas Only</option>
						<option value="Mindanao Only" id="mindanao" <?php if($result['areas']=="Mindanao Only") echo 'selected'; ?>>Mindanao Only</option>
						<option value="Nationwide" <?php if($result['areas']=="Nationwide") echo 'selected'; ?>>Nationwide</option>
					</select>



					<select name="remarks">
						<option value="Complete" <?php if($result['remarks']=="Complete") echo 'selected'; ?>>Complete</option>
						<option value="Incomplete" <?php if($result['remarks']=="Incomplete") echo 'selected'; ?>>Inomplete</option>
					</select>

					<input type="text" name="luzon" id="luzonVenue" value="<?php echo $result['luzon']; ?>">
					<input type="text" name="visayas" id="visayasVenue" value="<?php echo $result['visayas']; ?>">
					<input type="text" name="mindanao" id="mindanaoVenue" value="<?php echo $result['mindanao']; ?>">

					<?php areas(); ?>

				</div>

				<div class="cmsButtons">
					<button type="submit" class="btn-success" name="seminarUpdate">SAVE</button>
					<button type="button" class="btn-warning" onclick="location.href='partnerSeminars.php'">CANCEL</button>
				</div>
			</div>
		</div>
		</form>
		
	</div>	
</body>
		<?php floatButtonsSeminarManager(); ?>

</html>