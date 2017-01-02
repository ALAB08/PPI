
<!-- ACCESS VERIFICATION -->

<div class="modal fade" tabindex="-1" role="dialog" id="verifyAccess">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header modalHeaderColor">
	        <button type="button" class="close modalCloseColor" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
	        <h4 class="modal-title" id="gridSystemModalLabel">Access Verification | Super Admin</h4>
      	</div>

      	<div class="modal-body">
	        <form action="" method="POST" enctype="multipart/form-data">
	          <div class="form-group">
	            <label for="recipient-name" class="control-label">Username:</label>
	            <input type="text" class="form-control" name="usernameVerify" required>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="control-label">Password: </label>
	            <input type="password" class="form-control" name="passwordVerify" required>
	          </div>
	        
	    </div>
	    <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn customSave" name="verify" style="color: white;">Continue</button>
	        </form>	
	     </div>
    </div>
  </div>
</div>

<!--============== END =====================-->


<!-- PARTNER DETAILS -->

<div class="modal fade" tabindex="-1" role="dialog" id="partnerDetails<?php echo $id;?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header modalHeaderColor">
	        <button type="button" class="close modalCloseColor" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
	        <h4 class="modal-title" id="gridSystemModalLabel">Partner Name Details</h4>
      	</div>

      	<div class="modal-body">
	        <form action="" method="POST" enctype="multipart/form-data">
	        	<div class="laman">
	        	<div class="leftDetails">
	        		<p>Partner Name :</p>
	        		<p>Contact Person :</p>
	        		<p>Contact Number: </p>
	        		<p>Address :</p>
	        		<p>Email :</p>
	        		<p>Website :</p>
	        		<p>Partnership Date :</p>
	        	</div>

	        	<?php
	        		$partnership_date = $result['pertnership_date'];

	        		$partnership_date=date_format((date_create($partnership_date)), "F d, Y");
	        	?>

	        	<div class="rightDetails">
	        		<p><?php echo $result['partner_name']; ?></p>
	        		<p><?php echo $result['contact_person']; ?></p>
	        		<p><?php echo $result['contact_number']; ?></p>
	        		<p><?php echo $result['address']; ?></p>
	        		<p><?php echo $result['email']; ?></p>
	        		<p><?php echo $result['website']; ?></p>
	        		<p><?php echo $partnership_date; ?></p>
	        	</div>
	        	</div>
	    </div>
	    <div>
	        <button type="button" class="btn btn-default" data-dismiss="modal" style="visibility: hidden;">Close</button>
	        </form>	
	     </div>
    </div>
  </div>
</div>

<!--============== END =====================-->

<!-- PARTNER DELETE -->

<div class="modal fade" tabindex="-1" role="dialog" id="partnerDelete<?php echo $id;?>">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-header modalHeaderColor">
	        <button type="button" class="close modalCloseColor" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
	        <h4 class="modal-title" id="gridSystemModalLabel">Delete Partner</h4>
      	</div>

      	<div class="modal-body">
	        <form action="" method="POST" enctype="multipart/form-data">
	        	<p>Are you sure you want to delete this partner? This cannot be undone!</p>
	        	<input type="hidden" name="id" value="<?php echo $id; ?>">
	    </div>
	    <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn customSave" name="deletePartner" style="color: white;">YES</button>
	        </form>	
	     </div>
    </div>
  </div>
</div>

<!--============== END =====================-->

<!-- SEMINAR DETAILS -->

<div class="modal fade" tabindex="-1" role="dialog" id="seminarDetails<?php echo $id; ?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header modalHeaderColor">
	        <button type="button" class="close modalCloseColor" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
	        <h4 class="modal-title" id="gridSystemModalLabel">Seminar Details</h4>
      	</div>

      	<div class="modal-body">
	        <form action="" method="POST" enctype="multipart/form-data">
	        	<div class="laman">
	        	<div class="leftDetails">
	        		<p>Seminar Title :</p>
	        		<p>Period Cover :</p>
	        		<p>Areas: </p>
	        		<p>Remarks :</p>
	        		<p>Luzon Venue :</p>
	        		<p>Visayas Venue :</p>
	        		<p>Mindanao Venu :</p>
	        	</div>

	        	<?php 

	        		$period_to = $result['period_to'];
	        		$period_from = $result['period_from'];

	        		$period_to=date_format((date_create($period_to)), "F d, Y");
	        		$period_from=date_format((date_create($period_from)), "F d, Y");
	        	?>

	        	<div class="rightDetails">
	        		<p><?php echo $result['title_seminar']; ?></p>
	        		<p><?php echo $period_to; ?> to <?php echo $period_from; ?></p>
	        		<p><?php echo $result['areas']; ?></p>
	        		<p><?php echo $result['remarks']; ?></p>
	        		<p><?php echo $result['luzon']; ?></p>
	        		<p><?php echo $result['visayas']; ?></p>
	        		<p><?php echo $result['mindanao']; ?></p>
	        	</div>
	        	</div>
	    </div>
	    <div>
	        <button type="button" class="btn btn-default" data-dismiss="modal" style="visibility: hidden;">Close</button>
	        </form>	
	     </div>
    </div>
  </div>
</div>

<!--============== END =====================-->

<!-- SEMINAR DELETE -->

<div class="modal fade" tabindex="-1" role="dialog" id="seminarDelete<?php echo $id; ?>">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-header modalHeaderColor">
	        <button type="button" class="close modalCloseColor" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
	        <h4 class="modal-title" id="gridSystemModalLabel">Delete Seminar</h4>
      	</div>

      	<div class="modal-body">
	        <form action="" method="POST" enctype="multipart/form-data">
	        	<p>Are you sure you want to delete this seminar? This cannot be undone!</p>
	        	<input type="hidden" name="id" value="<?php echo $id; ?>">
	    </div>
	    <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn customSave" name="deleteSeminar" style="color: white;">YES</button>
	        </form>	
	     </div>
    </div>
  </div>
</div>

<!--============== END =====================-->


<!-- PROFILE DETAILS -->

<div class="modal fade" tabindex="-1" role="dialog" id="profileDetails">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-header modalHeaderColor">
	        <button type="button" class="close modalCloseColor" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
	        <h4 class="modal-title" id="gridSystemModalLabel"><?php adminInfo("full_name"); ?>'s Profile</h4>
      	</div>

      	<div class="modal-body">
	        <form action="" method="POST" enctype="multipart/form-data">

	       	 <img src="<?php adminInfo('photo'); ?>" class="profileDetailsPhoto">
	        	<div class="laman">	

	        	<div class="leftDetails" style="width: 40%">
	        		<p>Last Name :</p>
	        		<p>First Name :</p>
	        		<p>Position :</p>
	        		<p>Admin Type :</p>
	        		<p>Username :</p>
	        	</div>

	        	<div class="rightDetails" style="width: 50%">
	        		<p><?php adminInfo("last_name"); ?></p>
	        		<p><?php adminInfo("first_name"); ?></p>
	        		<p><?php adminInfo("position"); ?></p>
	        		<p><?php adminInfo("admin_type"); ?></p>
	        		<p><?php adminInfo("username"); ?></p>
	        	</div>
	        	</div>
	    </div>
	    <div>
	        <button type="button" class="btn btn-default" data-dismiss="modal" style="visibility: hidden;">Close</button>
	        </form>
	        <div class="alert alert-info" style="margin: -20px 10px 10px 10px">
  				<strong>Hello!</strong> Ask the Super Admin if you want to change this account details. Thank you!
			</div>	
	     </div>
    </div>
  </div>
</div>

<!--============== END =====================-->
