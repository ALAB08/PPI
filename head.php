<link rel="icon" type="img/ico" href="img/PPI_Logo.ico">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


<?php
	function footer(){
?>	
		<p class="footer">Philippine Press Institute Database Beta. Copyright 2016</p>
<?php
	}
?>

<?php
	function headerr(){
?>
		<div class="header">
			<div class="profile">
				<img src="img/User.png" width="100%">
			</div>
			<p style="font-size: 16px">Aldwin B. Labrador</p>
			<p>Programs Assistant</p>	
		</div>
<?php
	}
?>

<?php
	function header2(){
?>
		<div style="float:left">
			<div class="header2">
				<img src="img/PPI Logo2.png" width="100%">
			</div>

			<div class="header">
				<div class="profile">
					<img src="img/User.png" width="100%">
				</div>
				<p style="font-size: 16px">Aldwin B. Labrador</p>
				<p>Programs Assistant</p>	
			</div>
		</div>
<?php
	}
?>

<?php
	function floatButtonsPartners(){
?>
    <div class="mini">
      <div class="btn-group-sm hidden" id="mini-fab">
        <a href="partnerManager.php" class="btn btn-warning btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Partner Manager"id="manager">
         	<img src = "img/Manager.png">	
        </a>
        <a href="home.php" class="btn btn-danger btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Home" id="home">
          	<img src = "img/Home.png">
        </a>
      </div>

      <div class="btn-group">
        <a href="javascript:void(0)" class="btn btn-primary btn-fab" id="main">
          	<img src = "img/Menu.png">
        </a>
      </div>

    </div>

	<script type="text/javascript" src="js/index.js"></script>

<?php
	}
?>


<?php
	function floatButtonsPartnersManager(){
?>
    <div class="mini">
      <div class="btn-group-sm hidden" id="mini-fab">
        <a href="partners.php" class="btn btn-info btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Back" title="" id="manager">
            <img src = "img/Back.png">
        </a>
        <a href="home.php" class="btn btn-danger btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Home" title="" id="home">
          	<img src = "img/Home.png">
        </a>
      </div>

      <div class="btn-group">
        <a href="javascript:void(0)" class="btn btn-primary btn-fab" id="main">
          	<img src = "img/Menu.png">
        </a>
      </div>

    </div>

	<script type="text/javascript" src="js/index.js"></script>

<?php
	}
?>


<?php
	function areas(){
?>
		<script type="text/javascript">
  
		  $('#areasCollection').on('change', function () {
		  var $option = $('option:selected', this);
		  var $luzonVenue = $('#luzonVenue');
		  var $visayasVenue = $('#visayasVenue');
		  var $mindanaoVenue = $('#mindanaoVenue');
		  
		  if ($option.is('#luzon')) {
		    $luzonVenue.prop('disabled', false);
		    $visayasVenue.prop('disabled', true);
		    $mindanaoVenue.prop('disabled', true);
		  }else if ($option.is('#visayas')) {
		    $luzonVenue.prop('disabled', true);
		    $visayasVenue.prop('disabled', false);
		    $mindanaoVenue.prop('disabled', true);
		  }else if ($option.is('#mindanao')) {
		    $luzonVenue.prop('disabled', true);
		    $visayasVenue.prop('disabled', true);
		    $mindanaoVenue.prop('disabled', false);
		  }else{
		    $luzonVenue.prop('disabled', false);
		    $visayasVenue.prop('disabled', false);
		    $mindanaoVenue.prop('disabled', false);
		  }
		}).change();
		</script>
<?php
	}

?>