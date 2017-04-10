<?php
$rgen_config = $rgen;
include $rgen_config->layout_top;
?>

	<div class="row">
		<div class="col-sm-6">
			<div class="frm-wrp">
				<h3 class="frm-hd">Eximia HR77 解開751密碼</h3>
				<div class="font-promotion-methods">
					<p>只需7日、5個步驟、達到1個目標》》極速塑形</p>
					<p>塑形5合1：</p>
					<p>EXIMIA全方位智能纖體儀器，配合革命性減肥技術，以無創的方式，有效激活細胞、去除水腫、乳化並分解脂肪細胞、有助排走體內毒素、促進膠原蛋白細胞組織更生，達致極速塑形的功效。</p>
				</div>



				</p>
			</div>
			<div class="frm-wrp">
				<h3 class="frm-hd">安全可靠：</h3>
				<div class="font-promotion-methods">
					<p>通過醫療器械品質管理體系（ISO13485）及質量管理系統國際標準認證（ISO9001），能安全而且有效地溶解頑固脂肪。</p>
				</div>
			</div>
			<div class="frm-wrp">
				<h3 class="frm-hd">強效改善4大問題：</h3>
				<div class="font-promotion-methods">
					<ul class="ul-list-1 first">
						<li>✔幼嫩膚質/減淡妊娠紋</li>
						<li>✔去水腫</li>
						<li>✔溶解頑固脂肪</li>
						<li>✔收緊線條</li>
					</ul>
				</div>
			</div>

			<div class="frm-wrp">
				<h3 class="frm-hd"><?php echo $text_methods; ?></h3>
				<div class="font-promotion-methods">
					<ul class="ul-list-1 first">
						<li class="">
							<?php echo $text_method_1; ?>
						</li>
						<li class="">
							<?php echo $text_method_2; ?>
						</li>
						<li class="">
							<?php echo $text_method_3; ?>
						</li>
					</ul>
				</div>
				<h3 class="frm-hd"><?php echo $text_hotline_title; ?></h3>
				<div class="font-promotion-methods">
					<p class="">
						<?php echo $text_hotline; ?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<img class="img-responsive" src="/image/promotion/promotion10-04-17.jpeg">
		</div>
	</div>

	<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
		<div class="frm-wrp">
			<fieldset>
				<h3 class="frm-hd"><?php echo $text_booking; ?></h3>

				<!-- Products -->
				<div style="padding: 40px 40px;">
					<div class="form-group required">
						<label class="control-label"><h3><?php echo $entry_promotions; ?></h3></label>
						<div class="fields">
							<div id="input-promotion">
								<div class="checkbox">
									<label>
								<input type="checkbox" name="promotions[]" value="<?php echo $entry_promotion_1; ?>" checked>
								<?php echo $entry_promotion_1; ?>
							</label>
								</div>
								<div class="checkbox">
									<label>
								<input type="checkbox" name="promotions[]" value="<?php echo $entry_promotion_2; ?>">
								<?php echo $entry_promotion_2; ?>
							</label>
								</div>
								<div class="checkbox">
									<label>
								<input type="checkbox" name="promotions[]" value="<?php echo $entry_promotion_3; ?>">
								<?php echo $entry_promotion_3; ?>
							</label>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Name -->
				<div class="form-group required">
					<label class="col-sm-2 control-label" for="input-name"><?php echo $entry_name; ?></label>
					<div class="col-sm-10">
						<input type="text" name="name" value="<?php echo $name; ?>" id="input-name" class="form-control" />
						<?php if ($error_name) { ?>
						<div class="text-danger">
							<?php echo $error_name; ?>
						</div>
						<?php } ?>
					</div>
				</div>

				<!-- Telephone -->
				<div class="form-group required">
					<label class="col-sm-2 control-label" for="input-telephone"><?php echo $entry_telephone; ?></label>
					<div class="col-sm-10">
						<input type="text" name="telephone" value="<?php echo $telephone; ?>" id="input-telephone" class="form-control" />
						<?php if ($error_telephone) { ?>
						<div class="text-danger">
							<?php echo $error_telephone; ?>
						</div>
						<?php } ?>
					</div>
				</div>

				<!-- Email -->
				<div class="form-group required">
					<label class="col-sm-2 control-label" for="input-email"><?php echo $entry_email; ?></label>
					<div class="col-sm-10">
						<input type="text" name="email" value="<?php echo $email; ?>" id="input-email" class="form-control" />
						<?php if ($error_email) { ?>
						<div class="text-danger">
							<?php echo $error_email; ?>
						</div>
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
						<div class="text-danger">
							<?php echo $error_age; ?>
						</div>
						<?php } ?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="input-booking_date"><?php echo $entry_booking_date; ?></label>
					<div class="col-sm-10">
						<div class="input-group hasDatepicker">
							<input type="text" name="booking_date" value="<?php echo $booking_date; ?>" placeholder="YYYY-MM-DD" data-date-format="YYYY-MM-DD" id="input-booking_date" class="form-control" />
							<span class="input-group-btn">
							<button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
						</span>
						</div>
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
						<div class="text-danger">
							<?php echo $error_date_time; ?>
						</div>
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
	<div class="frm-wrp">
		<h3 class="frm-hd"><?php echo $text_statements_title; ?></h3>
		<div class="font-promotion-methods">
			<ul class="ul-list-1 first">
				<li class="">
					<?php echo $text_statements_1; ?>
				</li>
				<li class="">
					<?php echo $text_statements_2; ?>
				</li>
			</ul>
		</div>
	</div>

	<div class="policies">
		<ul class="ul-list-1 first">
			<li class="">
				<?php echo $text_policy_1; ?>
			</li>
			<li class="">
				<?php echo $text_policy_2; ?>
			</li>
			<li class="">
				<?php echo $text_policy_3; ?>
			</li>
			<li class="">
				<?php echo $text_policy_4; ?>
			</li>
			<li class="">
				<?php echo $text_policy_5; ?>
			</li>
			<li class="">
				<?php echo $text_policy_6; ?>
			</li>
			<li class="">
				<?php echo $text_policy_7; ?>
			</li>
		</ul>
	</div>
	</div>

	<script type="text/javascript" src="catalog/view/javascript/jquery/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript">
		<!--
		$(document).ready(function() {
			$('.hasDatepicker').datetimepicker({
				pickTime: false
			});
		});

		var tomorrow = new Date();
		tomorrow.setHours(23, 59, 59);

		var now = new Date();
		var diff = (tomorrow.getTime() / 1000) - (now.getTime() / 1000);

		var clock = $('.flip-clock').FlipClock(diff, {
			countdown: true,
		});
	</script>
	<?php
	include $rgen_config->layout_bottom;
	echo $footer;
?>
