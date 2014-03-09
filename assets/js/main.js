//make sure that a postcode is present when making a search!
$('#postcode_data_gather').submit(function() {
	
	if($('#txt_postcode').val().length === 0) {
		alert("Sorry, we didn't get your postcode just there...");
		return false;
	}

	return true;
});

$('#use-geo').click(function(event) {	
	event.preventDefault();
	getLocation();
});

$(document).ready(function() {
	getLocation();
});

function getLocation()
{
	$('#use-geo').html("Trying to get your location...");

	if (navigator.geolocation)
	{
		navigator.geolocation.getCurrentPosition(showPosition,showError);
	}
	else
	{
		alert("Sorry, I can't get that to work.");
	}
}

function showPosition(position)
{
	var lat = position.coords.latitude;
	var lng = position.coords.longitude;

	var url = baseurl + 'postcodes/?lat=' + lat + '&long=' + lng;
	
	$.ajax({
	  url: url,
	  async: false
	}).done(function(data) {
	  $('#txt_postcode').val(data.postcode);
	});

	$('#use-geo').html("Find me...");
}

function showError(error)
{
	alert("Sorry, I can't get that to work.");
	$('#use-geo').html("Sorry, I can't get that to work.");
}