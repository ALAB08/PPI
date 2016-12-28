
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

	        	<div class="rightDetails">
	        		<p><?php echo $result['partner_name']; ?></p>
	        		<p><?php echo $result['contact_person']; ?></p>
	        		<p><?php echo $result['contact_number']; ?></p>
	        		<p><?php echo $result['address']; ?></p>
	        		<p><?php echo $result['email']; ?></p>
	        		<p><?php echo $result['website']; ?></p>
	        		<p><?php echo $result['partnership_date']; ?></p>
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

<div class="modal fade" tabindex="-1" role="dialog" id="seminarDetails">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-header modalHeaderColor">
	        <button type="button" class="close modalCloseColor" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
	        <h4 class="modal-title" id="gridSystemModalLabel">Seminar Title Details</h4>
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

	        	<div class="rightDetails">
	        		<p>Seminar Title</p>
	        		<p>Period Cover</p>
	        		<p>Areas</p>
	        		<p>Remarks</p>
	        		<p>Luzon Venue</p>
	        		<p>Visayas Venue</p>
	        		<p>Mindanao Venu</p>
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

<div class="modal fade" tabindex="-1" role="dialog" id="seminarDelete">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-header modalHeaderColor">
	        <button type="button" class="close modalCloseColor" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
	        <h4 class="modal-title" id="gridSystemModalLabel">Delete Seminar</h4>
      	</div>

      	<div class="modal-body">
	        <form action="" method="POST" enctype="multipart/form-data">
	        	<p>Are you sure you want to delete this seminar? This cannot be undone!</p>
	    </div>
	    <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn customSave" name="verify" style="color: white;">YES</button>
	        </form>	
	     </div>
    </div>
  </div>
</div>

<!--============== END =====================-->