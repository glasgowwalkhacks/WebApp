<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <form id="postcode_data_gather" method="post" action="<?=base_url()?>search/">
			
			<br /><br />

			<?php if(isset($_GET['no_postcode'])) : ?>
				<center>
					<p class="bg-danger">Sorry, the postcode you entered cannot be found...</p>
				</center>
			<?php endif; ?>

			<label id="lbl_postcode" text="Postcode">Where are you now?:</label> <span class="hint">Please enter your postcode</span><br />
			<input class="form-control" id="txt_postcode" name="txt_postcode" placeholder="G51 2SN" />
			<br />
			<button type="submit" style="display:inline;" class="pull-right btn btn-default" id="use-geo">Find me...</button>
			<br />

			<br />
			<label id="lbl_range" text="range">How far do you want to walk to meet up:</label>
			<select class="form-control" name="slt_range" name="slt_range">
				<option value="<?=(ceil(5/12))?>">5 minutes</option>
				<option value="<?=(ceil(5/6))?>">10 minutes</option>
				<option value="<?=(ceil(5/3))?>">20 minutes</option>
				<option value="<?=(ceil(5/2))?>">30 minutes</option>
				<option value="5">1 Hour</option>
				<option value="15">I dont mind</option>
			</select>
			<br />

			<center>
				<button type="submit" class="btn btn-default">Take Me Somewhere!</button>
			</center>
		</form>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <h2>Glasgow Walks</h2>
      <p>Welcome to Glasgow walks, a site to plan walks within Glasgow city. Enter in your postcode in the top box and select how far you would like to walk. If you are already out and about hit the "Find me..." and you will be shown the closest walks to where you are.</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>About Glasgow Walks</h2>
      <p>Glasgow Walks was build in a weekend using open data published by the Glasgow Council. To view the data we have used and find ways to make it empower your life, go to <a href="http://data.glasgow.gov.uk/dataset/health-walks/resource/aa0c2e22-cad5-45fb-aeb7-350d0532344b"> Glasgow Health Walks.</a></p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
   </div>
    <div class="col-md-4">
      <h2>About Rewired State</h2>
      <p>To find much more open data released by Glasgow City Council, visit <a href="http://data.glasgow.gov.uk/">data.glasgow.gov.uk</a></p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
  </div>
</div>