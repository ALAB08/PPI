<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>
<?php include("javascript.php"); ?>

<head>
	<title>PPI | Seminar Manager</title>
	<?php include("head.php"); ?>

</head>


<body class="goldNoBorder">
	<div class="container-fluid">
		<?php header2(); ?>
		<div class="container">
			<div class="leftSideSeminar">
				<p>Seminars <span>Manager</span></p><br>
				<div class="preview">
                	<img id="seminarImagePreview">
                	<span class="btn btn-file">
                	Browse..<input type="file" name="seminarImage" id="uploadImageSeminar" required onchange="PreviewImageSeminar();" >
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
					<input type="text" name="titleSeminar">
					<input type="date"> to <input type="date">

					<select name="areas" id="areasCollection">
						<option value="Luzon Only" id="luzon">Luzon Only</option>
						<option value="Visayas Only" id="visayas">Visayas Only</option>
						<option value="Mindanao Only" id="mindanao">Mindanao Only</option>
						<option value="Nationwide">Nationwide</option>
					</select>



					<select name="remarks">
						<option value="Complete">Complete</option>
						<option value="Incomplete">Inomplete</option>
					</select>

					<input type="text" name="luzonVenue" id="luzonVenue">
					<input type="text" name="visayasVenue" id="visayasVenue">
					<input type="text" disabledname="mindanaoVenue" id="mindanaoVenue">

					<?php areas(); ?>

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
</body>
		<?php floatButtonsSeminarManager(); ?>

</html>