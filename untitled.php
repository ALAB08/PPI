<form id="addToCollection">
  <select id="add_to_collection">
    <option value="1" class="highlight">1</option>
    <option value="2">1</option>
    <option value="3">3</option>
  </select>
  
  <input  id="add-object-to-collection" type="submit" value="Add" class="button" />
</form>

<script type="text/javascript">
	
	$('#add_to_collection').on('change', function () {
  var $option = $('option:selected', this);
  var $button = $('#add-object-to-collection');
  
  if ($option.hasClass('highlight')) {
    $button.prop('disabled', true).val('Added');
  } else {
    $button.prop('disabled', false).val('Add');
  }
}).change();
</script>

<script type="text/javascript">
  
  $('#areasCollection').on('change', function () {
  var $option = $('option:selected', this);
  var $luzonVenue = $('#luzonVenue');
  var $visayasVenue = $('#visayasVenue');
  var $mindanaoVenue = $('#mindanaoVenue');
  
  if ($option.is('#luzon')) {
    $visayasVenue.prop('disabled', true);
    $mindanaoVenue.prop('disabled', true);
  }else if ($option.is('#visayas')) {
    $luzonVenue.prop('disabled', true);
    $mindanaoVenue.prop('disabled', true);
  }else if ($option.is('#mindanao')) {
    $visayasVenue.prop('disabled', true);
    $luzonVenue.prop('disabled', true);
  }
}).change();
</script>

<script type="text/javascript">
  
  $('#areasCollection').on('change', function () {
  var $option = $('option:selected', this);
  var $luzon = $('#luzon');
  var $visayas = $('#visayas');
  var $mindanao = $('#mindanao');
  
  if ($option.is('#luzon')) {
    $visayas.prop('disabled', true);
    $mindanao.prop('disabled', true);
  }
}).change();
</script>

