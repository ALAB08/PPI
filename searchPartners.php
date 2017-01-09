<!DOCTYPE html>

<html>

<?php include("connection.php"); ?>

<head>
	<title>PPI | Search Partners</title>
	<?php include("head.php"); ?>
	<?php include("queries.php"); ?>
	<?php session("regular"); ?>
</head>

<body class="goldNoBorder">
	<div class="container-fluid">
		<?php header2(); ?>
		<div class="container">
			<center><h1>Partners</h1></center>

			<form action="" method="POST" enctype="multipart/form-data">

				<select name="orderBy" class="orderBy">
					<option value="all">All</option>
					<option value="partner_name" <?php if($_GET['order']=='partner_name') echo "selected"; ?>>Name</option>
					<option value="contact_person" <?php if($_GET['order']=='contact_person') echo "selected"; ?>>Contact Person</option>
					<option value="contact_number" <?php if($_GET['order']=='contact_number') echo "selected"; ?>>Contact Number</option>
					<option value="address" <?php if($_GET['order']=='address') echo "selected"; ?>>Address</option>
					<option value="email" <?php if($_GET['order']=='email') echo "selected"; ?>>Email</option>
					<option value="website" <?php if($_GET['order']=='website') echo "selected"; ?>>Website</option>
					<option value="partnership_date" <?php if($_GET['order']=='partnership_date') echo "selected"; ?>>Partnership Date</option>
					<option value="date_added" <?php if($_GET['order']=='date_added') echo "selected"; ?>>Date Aded</option>
				</select>
				
				<input type="text" class="search" placeholder="Search" name="looking" value="<?= !empty($_POST["looking"]) ?$_POST["looking"] : $_GET['search'];?>">

				<button type="submit" name="search" style="visibility: hidden;">Search</button>
			</form>
				
				<?php
					if(isset($_POST['search'])){
						$looking = $_POST['looking'];
						$orderBy = $_POST['orderBy'];
						echo "<script>window.location.href='searchPartners.php?search=$looking&&order=$orderBy'</script>";
					}

					$search = $_GET['search'];

				
					if($_GET['order']=='all'){
						$sql = "SELECT * FROM tbl_partner WHERE partner_name LIKE '%$search%' OR contact_person LIKE '%$search%' OR contact_number LIKE '%$search%' OR address LIKE '%$search%' OR email LIKE '%$search%' OR website LIKE '%$search%' OR partnership_date LIKE '%$search%' OR date_added LIKE '%$search%'";
					} else {
						$orderBy = $_GET['order'];
						$sql = "SELECT * FROM tbl_partner WHERE $orderBy LIKE '%$search%'";
					}
				
					
					//$sql = "SELECT * FROM tbl_partner WHERE partner_name LIKE '%$search%' OR contact_person LIKE '%$search%' OR contact_number LIKE '%$search%' OR address LIKE '%$search%' OR email LIKE '%$search%' OR website LIKE '%$search%' OR partnership_date LIKE '%$search%' OR date_added LIKE '%$search%'";

					$query = mysqli_query($connection, $sql);
					$number_results = mysqli_num_rows($query);
				?>

				<p class="searchResult"><span class="number"><?php echo $number_results; ?></span> Search Results</p>

			<form action="" method="POST" enctype="multipart/form-data">
			<?php 

				while($result = mysqli_fetch_assoc($query)){
					$id = $result['id'];
					$partnership_date = $result['partnership_date'];
	        		$partnership_date=date_format((date_create($partnership_date)), "F d, Y");

	        		$date_added = $result['date_added'];
	        		$date_added = date_format((date_create($date_added)), "F d, Y");
			?>
				<div class="row-grid">
					<div class="col-sm-12 col-md-12">
						<a href="partnerMenu.php?id=<?php echo $id; ?>">
							<img src="<?php echo $result['partner_logo']; ?>" width="50%" class="height boxShadow" style="height: 200px; margin-top: 3%;">
						</a>
							<div class="details">
								<div class="searchLeft">
									<p>Partner Name : </p>
									<p>Contact Person : </p>
									<p>Contact Number : </p>
									<p>Address : </p>
									<p>Email : </p>
									<p>Website : </p>
									<p>Partnership Date : </p>
									<p>Date Added : </p>
								</div>

								<div class="searchRight">
									<p><?php echo $result['partner_name']; ?></p>
									<p><?php echo $result['contact_person']; ?></p>
									<p><?php echo $result['contact_number']; ?></p>
									<p><?php echo $result['address']; ?></p>
									<a href="www.<?php echo $result['email']; ?>"><p><?php echo $result['email']; ?></a></p>
									<p><?php echo $result['website']; ?></p>
									<p><?php echo $partnership_date; ?> </p>
									<p><?php echo $date_added; ?> </p>
								</div>
							</div>
					</div>
				</div>
			<?php
				}
			?>

			</form>

		</div>
		<?php //footer(); ?>
	</div>	

	<?php floatButtonsDoneSearchPartners() ?>
</body>

</html>