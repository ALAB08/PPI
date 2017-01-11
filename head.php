<link rel="icon" type="img/ico" href="img/PPI_Logo.ico">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


<?php
	function footer(){
?>	
		<div class="footer"><p>Philippine Press Institute Database Beta. Copyright 2016</p></div>
<?php
	}
?>

<?php
	function headerr(){
?>
		<div class="header">
        <div class="dropdown profile">

          <img src="<?php adminInfo("photo"); ?>" class="dropdown-toggle" data-toggle="dropdown">
  
          <ul class="dropdown-menu arrow arrow-right" role="menu" style="top: 0px; left: -180px">
            <li role="presentation"><a role="menuitem" tabindex="-1">Profile</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php" style="border-bottom: none">Logout</a></li>
          </ul>

        </div>

        <p style="font-size: 16px"><?php adminInfo("full_name") ?></p>
        <p><?php adminInfo("admin_type"); ?></p>  
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
        <div class="dropdown profile">

  				<img src="<?php adminInfo("photo"); ?>" class="dropdown-toggle" data-toggle="dropdown">
  
          <ul class="dropdown-menu arrow arrow-right" role="menu" style="top: 0px; left: -180px">
            <li role="presentation"><a role="menuitem" tabindex="-1" data-toggle="modal" data-target="#profileDetails">Profile</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php" style="border-bottom: none">Logout</a></li>
          </ul>

        </div>

				<p style="font-size: 16px"><?php adminInfo("full_name") ?></p>
				<p><?php adminInfo("admin_type"); ?></p>	
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
        <a href="partnerAdd.php" class="btn btn-warning btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Append Partner" id="third">
         	<img src = "img/Add.png">	
        </a>
        <a href="home.php" class="btn btn-danger btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Home" id="second">
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
        <a href="partners.php" class="btn btn-info btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Partners" title="" id="third">
            <img src = "img/Manager.png">
        </a>
        <a href="home.php" class="btn btn-danger btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Home" title="" id="second">
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
	function floatButtonsPartnerMenu(){
?>
    <div class="mini">
      <div class="btn-group-sm hidden" id="mini-fab">
        <a href="partners.php" class="btn btn-info btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Partners" title="" id="third">
            <img src = "img/Manager.png">
        </a>
        <a href="home.php" class="btn btn-danger btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Home" title="" id="second">
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
  function floatButtonsDocumentation(){
?>
    <div class="mini">
      <div class="btn-group-sm hidden" id="mini-fab">
        <a href="partnerSeminars.php" class="btn btn-success btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="<?php echo $_SESSION['partner_name']; ?> Seminars" title="" id="fourth">
            <img src = "img/Seminars.png">
        </a>
        <a href="partners.php" class="btn btn-info btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Partners" title="" id="third">
            <img src = "img/Manager.png">
        </a>
        <a href="home.php" class="btn btn-danger btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Home" title="" id="second">
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
	function floatButtonsPartnerSeminars(){
?>
    <div class="mini">
      <div class="btn-group-sm hidden" id="mini-fab">
       <a href="partnerMenu.php?id=<?php echo $_SESSION['partner_id']; ?>" class="btn btn-success btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="<?php echo $_SESSION['partner_name']; ?>" id="fourth">
         	<img src = "img/Manager.png">	
        </a>
        <a href="seminarAdd.php" class="btn btn-warning btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Create Seminar" id="third">
         	<img src = "img/Add.png">	
        </a>
        <a href="home.php" class="btn btn-danger btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Home" id="second">
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
	function floatButtonsSeminarManager(){
?>
    <div class="mini">
      <div class="btn-group-sm hidden" id="mini-fab">
       <a href="partners.php" class="btn btn-success btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Partners" id="fourth">
         	<img src = "img/Manager.png">	
        </a>
        <a href="partnerSeminars.php?id=<?php echo $_SESSION['partner_id']; ?>" class="btn btn-warning btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Seminars" id="third">
         	<img src = "img/Seminars.png">	
        </a>
        <a href="home.php" class="btn btn-danger btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Home" id="second">
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
  function floatButtonsDocu(){
?>
    <div class="mini">
      <div class="btn-group-sm hidden" id="mini-fab">
      <?php $id = $_SESSION['seminar_id']; ?>
       <a href="documentation.php?id=<?php echo $id ?>" class="btn btn-success btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Documentation" id="fourth">
          <img src = "img/Manager.png"> 
        </a>
        <a data-toggle="modal" data-target="#addDocu" class="btn btn-warning btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Add Programme" id="third">
          <img src = "img/Add.png">  
        </a>
        <a href="home.php" class="btn btn-danger btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Home" id="second">
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
  function floatButtonsDoneSearchPartners(){
?>
    <div class="mini">
      <div class="btn-group-sm hidden" id="mini-fab">
        <a href="partners.php" class="btn btn-warning btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Done Search" id="third">
          <img src = "img/Back.png"> 
        </a>
        <a href="home.php" class="btn btn-danger btn-fab" data-toggle="tooltip" data-placement="left" data-original-title="Home" id="second">
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
