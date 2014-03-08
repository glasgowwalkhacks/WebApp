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
			<button type="submit" style="display:inline;" class="pull-right btn btn-default" id="use-geo">Try to use my browser...</button>
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
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
   </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
  </div>
</div>