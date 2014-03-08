//make sure that a postcode is present when making a search!
$('#postcode_data_gather').submit(function() {
	
	if($('#txt_postcode').val().length === 0) {
		alert("Sorry, we didn't get your postcode just there...");
		return false;
	}

	return true;
})