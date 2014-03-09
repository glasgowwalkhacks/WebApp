<div class="container">
	<br /><br /><br />
</div>

<div class="container">
	<h1>Local Walks in your Area</h1>
	<div class="list-group">
	<?php foreach($results as $result) : ?>
		<div class="row search-row list-group-item">
		  <div class="col-md-8">
		  	<h2><?=$result['walk-name']?></h2>
		  	<h3><?=$result['walk-day']?> (<?=$result['meeting-frequency']?>) at <?=$result['walk-time']?></h3>
		  	<a href="<?=base_url()?>walks/<?=$result['id']?>-<?=preg_replace("/[^a-zA-Z0-9 ]/", "", str_replace(' ', '-', strtolower($result['meet-point'])))?>">More Information</a>
		  </div>
		  <div class="col-md-4">
		  	<h4><em><?=round($result['distance'], 2)?>km away from you just now.</em></h4>
		  	<p>Meeting at: <br /><strong><?=$result['meet-point']?>, <?=$result['meet-address-1'];?></strong></p>
		  	<!--<p><?=$result['lat']?>,<?=$result['lng']?></p>-->
		  </div>
		</div>
		<div class="row">
			&nbsp;
		</div>
	<?php endforeach; ?>
	</div>
</div>