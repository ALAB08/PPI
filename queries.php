<?php include("connection.php"); ?>
<?php session_start(); ?>

<?php
	if(isset($_POST['login'])){
		$username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
		$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);

		$sql= "SELECT * FROM tbl_admin WHERE username = '".$username."' AND password = '".$password."'";
		$query = mysqli_query($connection, $sql);

		if(mysqli_num_rows($query)==0){
        	echo("<script>alert('Wrong Username or password!');</script>");
      	}else{
      		while($result = mysqli_fetch_assoc($query)){
      			$_SESSION['id'] = $result['id'];
      			$_SESSION['username'] = $result['username'];
      		}
      		echo "<script>window.location.href='home.php';</script>"; 
			echo "<script>alert('Welcome '+'".$username."');</script>";
		 	 
     	}
	}
?>

<?php 

	function adminInfo($detail){
		include("connection.php");

		$sql= "SELECT * FROM tbl_admin WHERE id = '".$_SESSION['id']."'";
			$query = mysqli_query($connection, $sql);

			$result = mysqli_fetch_assoc($query);

			$photo = $result['photo'];
			$username = $result['username'];
			$last_name = $result['last_name'];
			$first_name = $result['first_name'];
			$full_name = $first_name.' '.$last_name;
			$position = $result['position'];
			$admin_type = $result['admin_type'];

			if($detail=="photo"){
				echo $photo;
			}else if($detail=="username"){
				echo $username;
			}else if($detail=="position"){
				echo $position;
			}else if($detail=="last_name"){
				echo $last_name;
			}else if($detail=="first_name"){
				echo $first_name;
			}else if($detail=="full_name"){
				echo $full_name;
			}else if($detail=="admin_type"){
				echo $admin_type;
			}
	}

?>

<?php
	function session($session){
		if($session=="register"){
			if(isset($_SESSION['id'])){
				header('location:home.php');
			}

			if(!isset($_SESSION['super_id'])){
				header('location:login.php');
			}
		}else if($session=="regular"){
			if(!isset($_SESSION['id'])){
				header("location:index.php");
			}
		}
	}
?>


<?php
	if(isset($_POST['verify'])){
		$username = filter_var($_POST['usernameVerify'],FILTER_SANITIZE_STRING);
		$password = filter_var($_POST['passwordVerify'],FILTER_SANITIZE_STRING);

		$sql= "SELECT * FROM tbl_admin WHERE username = '".$username."' AND password = '".$password."' AND admin_type = 'Super Admin'";
		$query = mysqli_query($connection, $sql);

		if(mysqli_num_rows($query)==0){
        	echo("<script>alert('Sorry! You are not a super admin');</script>");
      	}else{
      		while($result = mysqli_fetch_assoc($query)){
      			$_SESSION['super_id'] = $result['id'];
      		}
      		echo "<script>window.location.href='register.php';</script>"; 
			echo "<script>alert('Access verified '+'".$username."');</script>";
		 	 
     	}
	}
?>

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
			

			$target_path = "user_images/".$imagename;
			$path="/Applications/XAMPP/xamppfiles/htdocs/ppi/";
			
    		//$path="C://xampp/htdocs/";
    		//$target_path = "ppi/images_data".$imagename;

  			if(move_uploaded_file($temp_name,$path.$target_path)) {

				$sql = "INSERT INTO tbl_admin (last_name, first_name, position, admin_type, username, password, photo) VALUES('".$last_name."', '".$first_name."', '".$position."', '".$admin_type."', '".$username."', '".$password."', '".$target_path."')";
				$query = mysqli_query($connection, $sql);

				if($query){
					unset($_SESSION['super_id']);
					//session_destroy($_SESSION['super_id']);
					echo "<script>alert('Congratulations! Your account is save on the system')</script>";
					//echo "<script>window.location.href='login.php';</script>";
					echo "<script>window.location.href='login.php';</script>";  
				}else{
					echo "<script>alert('Failed to create an account! Make sure that you choose your photo.')</script>";
					echo mysqli_error($connection);
				}
			}
     	}
	}
?>


<?php 
	if(isset($_POST['partnerAdd'])){

		if (empty($_FILES["partnerBannerImage"]["name"]) && empty($_FILES["partnerLogoImage"]["name"])){
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

			$partner_name = $_POST['partner_name'];
			$contact_person = $_POST['contact_person'];
			$contact_number = $_POST['contact_number'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$website = $_POST['website'];
			$partnership_date = $_POST['partnership_date'];

			//Logo Image
			$file_nameLogo=$_FILES["partnerLogoImage"]["name"];
			$temp_nameLogo=$_FILES["partnerLogoImage"]["tmp_name"];
			$imgtypeLogo=$_FILES["partnerLogoImage"]["type"];
			$extLogo= GetImageExtension($imgtypeLogo);
			$imagenameLogo=$_FILES["partnerLogoImage"]["name"];

			$target_pathLogo = "partner_images/".$imagenameLogo;
			$pathLogo ="/Applications/XAMPP/xamppfiles/htdocs/ppi/";
			//End of Logo Image

			//Banner Image
			$file_nameBanner=$_FILES["partnerBannerImage"]["name"];
			$temp_nameBanner=$_FILES["partnerBannerImage"]["tmp_name"];
			$imgtypeBanner=$_FILES["partnerBannerImage"]["type"];
			$extBanner= GetImageExtension($imgtypeBanner);
			$imagenameBanner=$_FILES["partnerBannerImage"]["name"];

			$target_pathBanner = "partner_images/".$imagenameBanner;
			$pathBanner="/Applications/XAMPP/xamppfiles/htdocs/ppi/";
			//End of Banner Image
			
    		//$path="C://xampp/htdocs/";
    		//$target_path = "ppi/images_data".$imagename;

  			if(move_uploaded_file($temp_nameBanner,$pathBanner.$target_pathBanner) && move_uploaded_file($temp_nameLogo, $pathLogo.$target_pathLogo)){

				$sql = "INSERT INTO tbl_partner (partner_name, contact_person, contact_number, address, email, website, partnership_date, partner_logo, partner_banner) VALUES('".$partner_name."', '".$contact_person."', '".$contact_number."', '".$address."', '".$email."', '".$website."', '".$partnership_date."', '".$target_pathLogo."', '".$target_pathBanner."')";
				$query = mysqli_query($connection, $sql);

				if($query){
					echo "<script>alert('Congratulations! You added a partner')</script>";
					//echo "<script>window.location.href='login.php';</script>";
					echo "<script>window.location.href='partnerAdd.php';</script>";  
				}else{
					echo "<script>alert('Failed to add a partner.')</script>";
					echo mysqli_error($connection);
				}
			}
     	}
	}
?>

<?php 
	if(isset($_POST['seminarAdd'])){

		if (empty($_FILES["seminarBannerImage"]["name"]) && empty($_FILES["seminarLogoImage"]["name"])){
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

			$title_seminar = $_POST['title_seminar'];
			$period_from = $_POST['period_from'];
			$period_to = $_POST['period_to'];
			$areas = $_POST['areas'];
			$remarks = $_POST['remarks'];

			if($areas=="Luzon Only"){
				$luzon = $_POST['luzon'];
				$visayas = "None";
				$mindanao = "None";
			}else if($areas=="Visayas Only"){
				$luzon = "None";
				$visayas = $_POST['visayas'];
				$mindanao = "None";
			}else if($areas=="Mindanao Only"){
				$luzon = "None";
				$visayas = "None";
				$mindanao = $_POST['mindanao'];
			}else{
				$luzon = $_POST['luzon'];
				$visayas = $_POST['visayas'];
				$mindanao = $_POST['mindanao'];
			}

			//Logo Image
			$file_nameLogo=$_FILES["seminarLogoImage"]["name"];
			$temp_nameLogo=$_FILES["seminarLogoImage"]["tmp_name"];
			$imgtypeLogo=$_FILES["seminarLogoImage"]["type"];
			$extLogo= GetImageExtension($imgtypeLogo);
			$imagenameLogo=$_FILES["seminarLogoImage"]["name"];

			$target_pathLogo = "partner_images/".$imagenameLogo;
			$pathLogo ="/Applications/XAMPP/xamppfiles/htdocs/ppi/";
			//End of Logo Image

			//Banner Image
			$file_nameBanner=$_FILES["seminarBannerImage"]["name"];
			$temp_nameBanner=$_FILES["seminarBannerImage"]["tmp_name"];
			$imgtypeBanner=$_FILES["seminarBannerImage"]["type"];
			$extBanner= GetImageExtension($imgtypeBanner);
			$imagenameBanner=$_FILES["seminarBannerImage"]["name"];

			$target_pathBanner = "partner_images/".$imagenameBanner;
			$pathBanner="/Applications/XAMPP/xamppfiles/htdocs/ppi/";
			//End of Banner Image
			
    		//$path="C://xampp/htdocs/";
    		//$target_path = "ppi/images_data".$imagename;

  			if(move_uploaded_file($temp_nameBanner,$pathBanner.$target_pathBanner) && move_uploaded_file($temp_nameLogo, $pathLogo.$target_pathLogo)){

  				//$date_added = now();

				$sql = "INSERT INTO tbl_seminars (partner_id, title_seminar, period_to, period_from, areas, remarks, luzon, visayas, mindanao, seminar_logo, seminar_banner, date_added, deleted) VALUES('".$_SESSION['partner_id']."', '".$title_seminar."', '".$period_to."', '".$period_from."', '".$areas."', '".$remarks."', '".$luzon."', '".$visayas."', '".$mindanao."', '".$target_pathLogo."', '".$target_pathBanner."', now(), 'NO')";
				$query = mysqli_query($connection, $sql);

				$partner_name = $_SESSION['partner_name'];

				if($query){
					echo "<script>alert('Congratulations! You added a seminar to '.$partner_name)</script>";
					//echo "<script>window.location.href='login.php';</script>";
					echo "<script>window.location.href='seminarAdd.php';</script>";  
				}else{
					echo "<script>alert('Failed to add a partner.')</script>";
					echo mysqli_error($connection);
				}
			}
     	}
	}
?>


<?php

	if(isset($_POST['deletePartner'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM tbl_partner WHERE id = '".$id."'";
		$query = mysqli_query($connection, $sql);

		if($query){
			echo "<script>alert('Successfully deleted a partner')</script>";
			echo "<script>window.location.href='partners.php';</script>";  
		}else{
			echo "<script>alert('Failed to delete a partner.')</script>";
			echo mysqli_error($connection);
		}
	}

?>

<?php
	if(isset($_POST['deleteSeminar'])){
		$id = $_POST['id'];
		$sql = "UPDATE tbl_seminars SET deleted = 'YES' WHERE id = '".$id."'";
		$query = mysqli_query($connection, $sql);

		if($query){
			echo "<script>alert('Successfully deleted a seminar')</script>";  
		}else{
			echo "<script>alert('Failed to delete a seminar.')</script>";
			echo mysqli_error($connection);
		}
	}
?>


<?php 
	if(isset($_POST['updatePartner'])){
		if (empty($_FILES["partnerBannerImage"]["name"]) && empty($_FILES["partnerLogoImage"]["name"])){

			$partner_name = $_POST['partner_name'];
			$contact_person = $_POST['contact_person'];
			$contact_number = $_POST['contact_number'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$website = $_POST['website'];
			$partnership_date = $_POST['partnership_date'];
    		
    		$sql = "UPDATE tbl_partner SET partner_name = '$partner_name', contact_person = '$contact_person', contact_number = '$contact_number', address = '$address', email = '$email', website = '$website', partnership_date = '$partnership_date' WHERE id = '".$_GET['id']."'";
				$query = mysqli_query($connection, $sql);

				if($query){
					$id = $_GET['id'];
					//echo "<script>alert('Partner details successfully updated.')</script>";
					//echo "<script>window.location.href='login.php';</script>";
					//echo "<script>window.location.href='partnerUpdate.php?id=$id';</script>";  
				}else{
					echo "<script>alert('Failed to update partner details.')</script>";
					echo mysqli_error($connection);
				}


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

			$partner_name = $_POST['partner_name'];
			$contact_person = $_POST['contact_person'];
			$contact_number = $_POST['contact_number'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$website = $_POST['website'];
			$partnership_date = $_POST['partnership_date'];

			//Logo Image
			$file_nameLogo=$_FILES["partnerLogoImage"]["name"];
			$temp_nameLogo=$_FILES["partnerLogoImage"]["tmp_name"];
			$imgtypeLogo=$_FILES["partnerLogoImage"]["type"];
			$extLogo= GetImageExtension($imgtypeLogo);
			$imagenameLogo=$_FILES["partnerLogoImage"]["name"];

			$target_pathLogo = "partner_images/".$imagenameLogo;
			$pathLogo ="/Applications/XAMPP/xamppfiles/htdocs/ppi/";
			//End of Logo Image

			//Banner Image
			$file_nameBanner=$_FILES["partnerBannerImage"]["name"];
			$temp_nameBanner=$_FILES["partnerBannerImage"]["tmp_name"];
			$imgtypeBanner=$_FILES["partnerBannerImage"]["type"];
			$extBanner= GetImageExtension($imgtypeBanner);
			$imagenameBanner=$_FILES["partnerBannerImage"]["name"];

			$target_pathBanner = "partner_images/".$imagenameBanner;
			$pathBanner="/Applications/XAMPP/xamppfiles/htdocs/ppi/";
			//End of Banner Image
			
    		//$path="C://xampp/htdocs/";
    		//$target_path = "ppi/images_data".$imagename;

  			if(move_uploaded_file($temp_nameBanner,$pathBanner.$target_pathBanner) && move_uploaded_file($temp_nameLogo, $pathLogo.$target_pathLogo)){

				$sql = "UPDATE tbl_partner SET partner_name = '$partner_name', contact_person = '$contact_person', contact_number = '$contact_number', address = '$address', email = '$email', website = '$website', partnership_date = '$partnership_date', partner_logo = '$target_pathLogo', partner_banner = '$target_pathBanner' WHERE id = '".$_GET['id']."'";
				$query = mysqli_query($connection, $sql);

				if($query){
					$id = $_GET['id'];
					echo "<script>alert('Partner details successfully updated.')</script>";
					//echo "<script>window.location.href='login.php';</script>";
					echo "<script>window.location.href='partnerUpdate.php?id=$id';</script>";  
				}else{
					echo "<script>alert('Failed to update partner details.')</script>";
					echo mysqli_error($connection);
				}
			}
     	}
	}

?>

<?php 
	if(isset($_POST['seminarUpdate'])){
		if (empty($_FILES["seminarBannerImage"]["name"]) && empty($_FILES["seminarLogoImage"]["name"])){
    		
    		$title_seminar = $_POST['title_seminar'];
			$period_from = $_POST['period_from'];
			$period_to = $_POST['period_to'];
			$areas = $_POST['areas'];
			$remarks = $_POST['remarks'];
			$luzon = $_POST['luzon'];
			$visayas = $_POST['visayas'];
			$mindanao = $_POST['mindanao'];

			$sql = "UPDATE tbl_seminars SET title_seminar='$title_seminar', period_to='$period_to', period_from='$period_from', areas='$areas', remarks='$remarks', luzon='$luzon', visayas='$visayas', mindanao='$mindanao' WHERE id='".$_GET['id']."'";
			$query = mysqli_query($connection, $sql);

			$partner_name = $_SESSION['partner_name'];

			if($query){
				echo "<script>alert('Congratulations! You updated a seminar to '.$partner_name)</script>";
				//echo "<script>window.location.href='login.php';</script>";
				//echo "<script>window.location.href='partnerSeminars.php';</script>";  
			}else{
				echo "<script>alert('Failed to update seminar.')</script>";
				echo mysqli_error($connection);
			}

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

			$title_seminar = $_POST['title_seminar'];
			$period_from = $_POST['period_from'];
			$period_to = $_POST['period_to'];
			$areas = $_POST['areas'];
			$remarks = $_POST['remarks'];
			$luzon = $_POST['luzon'];
			$visayas = $_POST['visayas'];
			$mindanao = $_POST['mindanao'];

			//Logo Image
			$file_nameLogo=$_FILES["seminarLogoImage"]["name"];
			$temp_nameLogo=$_FILES["seminarLogoImage"]["tmp_name"];
			$imgtypeLogo=$_FILES["seminarLogoImage"]["type"];
			$extLogo= GetImageExtension($imgtypeLogo);
			$imagenameLogo=$_FILES["seminarLogoImage"]["name"];

			$target_pathLogo = "partner_images/".$imagenameLogo;
			$pathLogo ="/Applications/XAMPP/xamppfiles/htdocs/ppi/";
			//End of Logo Image

			//Banner Image
			$file_nameBanner=$_FILES["seminarBannerImage"]["name"];
			$temp_nameBanner=$_FILES["seminarBannerImage"]["tmp_name"];
			$imgtypeBanner=$_FILES["seminarBannerImage"]["type"];
			$extBanner= GetImageExtension($imgtypeBanner);
			$imagenameBanner=$_FILES["seminarBannerImage"]["name"];

			$target_pathBanner = "partner_images/".$imagenameBanner;
			$pathBanner="/Applications/XAMPP/xamppfiles/htdocs/ppi/";
			//End of Banner Image
			
    		//$path="C://xampp/htdocs/";
    		//$target_path = "ppi/images_data".$imagename;

  			if(move_uploaded_file($temp_nameBanner,$pathBanner.$target_pathBanner) && move_uploaded_file($temp_nameLogo, $pathLogo.$target_pathLogo)){

  				//$date_added = now();

				$sql = "UPDATE tbl_seminars SET title_seminar='$title_seminar', period_to='$period_to', period_from='$period_from', areas='$areas', remarks='$remarks', luzon='$luzon', visayas='$visayas', mindanao='$mindanao', seminar_logo='$target_pathLogo', seminar_banner='$target_pathBanner' WHERE id='".$_GET['id']."'";
				$query = mysqli_query($connection, $sql);

				$partner_name = $_SESSION['partner_name'];

				if($query){
					echo "<script>alert('Congratulations! You updated a seminar to '.$partner_name)</script>";
					//echo "<script>window.location.href='login.php';</script>";
					//echo "<script>window.location.href='partnerSeminars.php';</script>";  
				}else{
					echo "<script>alert('Failed to update seminar.')</script>";
					echo mysqli_error($connection);
				}
			}
     	}
	}
?>



<?php 
	if(isset($_POST['addDocumentation'])){

		if (empty($_FILES["otherFile"]["name"]) && empty($_FILES["pdfFile"]["name"])){
    		echo "";
		}else{
      		function GetImageExtension($imagetype){
       			if(empty($imagetype)) return false;
       				switch($imagetype){
			           case 'image/bmp': return '.bmp';
			           case 'image/gif': return '.gif';
			           case 'image/jpeg': return '.jpg';
			           case 'image/png': return '.png';
			           case 'application/pdf': return '.pdf';
			           case 'application/Microsoft Word': return '.docx';

			           default: return false;
       				}
     		}

			$docu_type = $_GET['docu'];
			$partner_id = $_SESSION['partner_id'];
			$seminar_id = $_SESSION['seminar_id'];

			//Other File
			$file_nameOther=$_FILES["otherFile"]["name"];
			$temp_nameOther=$_FILES["otherFile"]["tmp_name"];
			$typeOther=$_FILES["otherFile"]["type"];
			$extOther= GetImageExtension($typeOther);
			$nameOther=$_FILES["otherFile"]["name"];

			$target_pathOther = "documentation_upload/".$nameOther;
			$pathOther ="/Applications/XAMPP/xamppfiles/htdocs/ppi/";
			//End of Other File

			//Pdf File
			$file_namePdf=$_FILES["pdfFile"]["name"];
			$temp_namePdf=$_FILES["pdfFile"]["tmp_name"];
			$typePdf=$_FILES["pdfFile"]["type"];
			$extPdf= GetImageExtension($typePdf);
			$namePdf=$_FILES["pdfFile"]["name"];

			$target_pathPdf = "documentation_upload/".$namePdf;
			$pathPdf="/Applications/XAMPP/xamppfiles/htdocs/ppi/";
			//End of Pdf File
			
    		//$path="C://xampp/htdocs/";
    		//$target_path = "ppi/images_data".$imagename;

  			if(move_uploaded_file($temp_nameOther,$pathOther.$target_pathOther) && move_uploaded_file($temp_namePdf, $pathPdf.$target_pathPdf)){

				$sql = "INSERT INTO tbl_documentation (partner_id, seminar_id, docu_type, other_file, other_name, other_ext, pdf_file, pdf_name, pdf_ext) VALUES('".$partner_id."', '".$seminar_id."', '".$docu_type."', '".$target_pathOther."', '".$nameOther."','".$extOther."', '".$target_pathPdf."', '".$namePdf."', '".$extPdf."')";
				$query = mysqli_query($connection, $sql);

				if($query){
					echo "<script>alert('File successfully uploaded.')</script>";
					//echo "<script>window.location.href='login.php';</script>";
					echo "<script>window.location.href=''</script>";  
				}else{
					echo "<script>alert('Failed to add a partner.')</script>";
					echo mysqli_error($connection);
				}
			}
     	}
	}
?>