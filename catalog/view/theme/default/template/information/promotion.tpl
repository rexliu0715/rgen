<?php 
$rgen_config = $rgen;
include $rgen_config->layout_top; 
?>

<!-- <div class="frm-wrp contact-info">
	<h3 class="frm-hd"><?php echo $text_promotion; ?></h3>
	<div class="row">
	</div>
</div>
 -->

<div class="row">
	<div class="col-sm-4">
		<div class="frm-wrp">
		  <h3 class="frm-hd"><?php echo $text_methods; ?></h3>
		  <div class="font-promotion-methods">
			  <ul class="ul-list-1 first">
				  <li class=""><?php echo $text_method_1; ?></li>
				  <li class=""><?php echo $text_method_2; ?></li>
				  <li class=""><?php echo $text_method_3; ?></li>
		  	  </ul>
		  </div>
		</div>
	</div>
	<div class="col-sm-8">
		<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
			<div class="frm-wrp">
			<fieldset>
			  <h3 class="frm-hd"><?php echo $text_booking; ?></h3>

			  <!-- Name -->
			  <div class="form-group required">
				<label class="col-sm-2 control-label" for="input-name"><?php echo $entry_name; ?></label>
				<div class="col-sm-10">
				  <input type="text" name="name" value="<?php echo $name; ?>" id="input-name" class="form-control" />
				  <?php if ($error_name) { ?>
				  <div class="text-danger"><?php echo $error_name; ?></div>
				  <?php } ?>
				</div>
			  </div>

			  <!-- Identity card --> 
			  <div class="form-group required">
				<label class="col-sm-2 control-label" for="input-identity_card"><?php echo $entry_identity_card; ?></label>
				<div class="col-sm-10">
				  <input type="text" name="identity_card" value="<?php echo $identity_card; ?>" id="input-identity-card" class="form-control" />
				  <?php if ($error_identity_card) { ?>
				  <div class="text-danger"><?php echo $error_identity_card; ?></div>
				  <?php } ?>
				</div>
			  </div>

			  <!-- Telephone --> 
			  <div class="form-group required">
				<label class="col-sm-2 control-label" for="input-telephone"><?php echo $entry_telephone; ?></label>
				<div class="col-sm-10">
				  <input type="text" name="telephone" value="<?php echo $telephone; ?>" id="input-telephone" class="form-control" />
				  <?php if ($error_telephone) { ?>
				  <div class="text-danger"><?php echo $error_telephone; ?></div>
				  <?php } ?>
				</div>
			  </div>

			  <!-- Email -->
			  <div class="form-group required">
				<label class="col-sm-2 control-label" for="input-email"><?php echo $entry_email; ?></label>
				<div class="col-sm-10">
				  <input type="text" name="email" value="<?php echo $email; ?>" id="input-email" class="form-control" />
				  <?php if ($error_email) { ?>
				  <div class="text-danger"><?php echo $error_email; ?></div>
				  <?php } ?>
				</div>
			  </div>

			  <!-- Age -->
			  <div class="form-group">
				<label class="col-sm-2 control-label" for="input-age"><?php echo $entry_age; ?></label>
				<div class="col-sm-10">
				  <select name="age" rows="10" id="input-age" class="form-control">
						<option selected value="21-25">21-25</option>
						<option value="26-35">26-35</option>
						<option value="36-49">36-49</option>
						<option value="50over">50歲或以上</option>
				  </select>
				  <?php if ($error_age) { ?>
				  <div class="text-danger"><?php echo $error_age; ?></div>
				  <?php } ?>
				</div>
			  </div>

			    <!-- Date -->
			  <div class="form-group required">
				<label class="col-sm-2 control-label" for="input-date-month"><?php echo $entry_date; ?></label>
				<div class="col-sm-10">
					<div class="row">
						<div class="col-sm-4">
						  <select name="date_month" rows="10" id="input-date-month" class="form-control">
							<option value="-1" selected="selected">Month</option>
							<option value="1">Jan</option>
							<option value="2">Feb</option>
							<option value="3">Mar</option>
							<option value="4">Apr</option>
							<option value="5">May</option>
							<option value="6">Jun</option>
							<option value="7">Jul</option>
							<option value="8">Aug</option>
							<option value="9">Sep</option>
							<option value="10">Oct</option>
							<option value="11">Nov</option>
							<option value="12">Dec</option>
						  </select>
					    </div>
					  	<div class="col-sm-4">
						  <select name="date_day" rows="10" id="input-date-day" class="form-control">
							<option value="-1" selected="selected">Day</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						  </select>
						  </div>
					  	<div class="col-sm-4">
					  	  <select name="date_year" rows="10" id="input-date-year" class="form-control">
							<option value="-1" selected="selected">Year</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
						  </select>
						</div>
			  		</div>
				  <?php if ($error_date) { ?>
				  <div class="text-danger"><?php echo $error_date; ?></div>
				  <?php } ?>
				</div>
			  </div>

			  <!-- Time -->
			  <div class="form-group required">
				<label class="col-sm-2 control-label" for="input-date-time"><?php echo $entry_date_time; ?></label>
				<div class="col-sm-10">
				  <select name="date_time" rows="10" id="input-date-time" class="form-control">
					<option value="12:00">12:00</option>
					<option value="12:30">12:30</option>
					<option value="13:00">13:00</option>
					<option value="13:30">13:30</option>
					<option value="14:00">14:00</option>
					<option value="14:30">14:30</option>
					<option value="15:00">15:00</option>
					<option value="15:30">15:30</option>
					<option value="16:00">16:00</option>
					<option value="16:30">16:30</option>
					<option value="17:00">17:00</option>
					<option value="17:30">17:30</option>
					<option value="18:00">18:00</option>
					<option value="18:30">18:30</option>
					<option value="19:00">19:00</option>
					<option value="19:30">19:30</option>
					<option value="20:00">20:00</option>
				  </select>
				  <?php if ($error_date_time) { ?>
				  <div class="text-danger"><?php echo $error_date_time; ?></div>
				  <?php } ?>
				</div>
			  </div>

			</fieldset>
			</div>
			<div class="buttons">
			  <div class="pull-right">
				<input class="default-btn" type="submit" value="<?php echo $button_submit; ?>" />
			  </div>
			</div>
		</form>
		<div class="policies">
		  <ul class="ul-list-1 first">
			  <li class=""><?php echo $text_policy_1; ?></li>
			  <li class=""><?php echo $text_policy_2; ?></li>
			  <li class=""><?php echo $text_policy_3; ?></li>
			  <li class=""><?php echo $text_policy_4; ?></li>
			  <li class=""><?php echo $text_policy_5; ?></li>
			  <li class=""><?php echo $text_policy_6; ?></li>
			  <li class=""><?php echo $text_policy_7; ?></li>
	  	  </ul>
		<div>
	</div>
</div>

<?php 
	include $rgen_config->layout_bottom;
	echo $footer;
?>