<div class="container">
	<br /><br /><br />
</div>

<div class="container">
	<h1><small>Meeting At:</small> <?=$walk->{'walk-name'}?></h1>

	<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#results" data-toggle="tab" class="nav nav-tabs nav-justified">Walk Information</a></li>
  <li><a href="#contact" data-toggle="tab" class="nav nav-tabs nav-justified">Contact Information</a></li>
  <li><a href="#mashup" data-toggle="tab" class="nav nav-tabs nav-justified">While I'm There</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
	<div class="tab-pane active" id="results">
		<div class="row">
		  <div class="col-md-8">
		  	<h1><small><?=$walk->{'meet-point'}?>, <?=$walk->{'meet-address-1'};?></small></h1>
		  	<br />
		  	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?=$postcode->postcode?>&amp;aq=&amp;sll=<?=$postcode->lat?>,<?=$postcode->lng?>&amp;ie=UTF8&amp;hq=&amp;hnear=Glasgow+<?=$postcode->postcode?>,+United+Kingdom&amp;t=m&amp;z=14&amp;ll=<?=$postcode->lat?>,<?=$postcode->lng?>&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=g512sn&amp;aq=&amp;sll=53.800651,-4.064941&amp;sspn=6.89329,21.643066&amp;ie=UTF8&amp;hq=&amp;hnear=Glasgow+G51+2SN,+United+Kingdom&amp;t=m&amp;z=14&amp;ll=55.853356,-4.304134" style="color:#0000FF;text-align:left">View Larger Map</a></small>
		  </div>
		  <div class="col-md-4">
		  	<br />
		  	<h4><small>Week Day:</small> </strong><?=$walk->{'walk-day'}?></h4>
			<h4><small>Walk Time:</small> </strong><?=$walk->{'walk-time'}?></h4>
			<h4><small>How Often:</small> </strong><?=$walk->{'meeting-frequency'}?></h4>
		  </div>

		<br />
	    </div>
	</div>

  <div class="tab-pane" id="contact">
  	<h1><small>Contact Information</small></h1>
  	<h3>Coordinator Details</h3>
  	<h4>Name: <small><?=$walk->{'coordinator-name'}?></small></h4>
  	<h4>Phone: <small><a href="tel:<?=$walk->{'coordinator-phone'}?>"><?=$walk->{'coordinator-phone'}?></a></small></h4>
  	<h4>Email: <small><a href="mailto:<?=$walk->{'coordinator-email'}?>"><?=$walk->{'coordinator-email'}?></a></small></h4> 
<br /><br />
  	<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="">Your Email</label><br />
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="example@example.com">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="">Message Subject</label><br />
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="I'd like to meet up!">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="">Your Message</label><br />
    <div class="col-sm-10">
      <textarea type="textarea" class="form-control" id="inputEmail3" placeholder=""></textarea>
    </div>
  </div>

  <button class="btn">Send Message</button>
  
  
</form>
  </div>

  <div class="tab-pane" id="mashup">
  	<h2>What else is around?</h2>
  	<p>While you're on the walk - there might be a few things close by!</p>

  	<h3>Nearby Restaurants</h3>
  	<table class="table">
  		<tr>
  			<th>Business Name</th>
  			<th>Business Type</th>
  			<th>Address</th>
  			<th>Postcode</th>
  			<th>Distance</th>
  		</tr>
  		<?php foreach($nearby as $near) : ?>
  		<tr>
  			<td><?=$near['BusinessName']?></td>
  			<td><?=$near['BusinessType']?></td>
  			<td><?=$near['AddressLine2']?></td>
  			<td><?=$near['PostCode']?></td>
  			<td><?=round($near['distance'], 2)?>km</td>
  		</tr>
  		<?php endforeach; ?>
  	</table>
  </div>

  </div>

</div>
