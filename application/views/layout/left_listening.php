<ul class="nav nav-list">
								<li class=""><a href="<?php echo base_url(); ?>index.php/main/list_sharing_listening/500">Chia sẻ kinh nghiệm</a>
									<ul class="nav">
										<li><a href="<?php echo base_url(); ?>index.php/main/list_sharing_listening/500">Level 250-500</a></li>
										<li><a href="<?php echo base_url(); ?>index.php/main/list_sharing_listening/750">Level 500-750</a></li>
										<li><a href="<?php echo base_url(); ?>index.php/main/list_sharing_listening/900">Level 750-900</a></li>
									</ul>
								</li>
								<li><a href="<?php echo base_url(); ?>index.php/main/list_photo/500">Luyện tập</a>
									<ul class="nav">
										<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Photo<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="<?php echo base_url(); ?>index.php/main/list_photo/500">Level 250-500</a></li>
												<li><a href="<?php echo base_url(); ?>index.php/main/list_photo/750">Level 500-750</a></li>
												<li><a href="<?php echo base_url(); ?>index.php/main/list_photo/900">Level 750-900</a></li>
											</ul>
										</li>
										<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Questions and Responses<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="<?php echo base_url(); ?>index.php/main/list_qr/500">Level 250-500</a></li>
												<li><a href="<?php echo base_url(); ?>index.php/main/list_qr/750">Level 500-750</a></li>
												<li><a href="<?php echo base_url(); ?>index.php/main/list_qr/900">Level 750-900</a></li>
											</ul>
										</li>
										<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Short conversation<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="<?php echo base_url(); ?>index.php/main/list_short_con/500">Level 250-500</a></li>
												<li><a href="<?php echo base_url(); ?>index.php/main/list_short_con/750">Level 500-750</a></li>
												<li><a href="<?php echo base_url(); ?>index.php/main/list_short_con/900">Level 750-900</a></li>
											</ul>
										</li>
										<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Short talk<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="<?php echo base_url(); ?>index.php/main/list_short_talk/500">Level 250-500</a></li>
												<li><a href="<?php echo base_url(); ?>index.php/main/list_short_talk/750">Level 500-750</a></li>
												<li><a href="<?php echo base_url(); ?>index.php/main/list_short_talk/900">Level 750-900</a></li>
											</ul>
										</li>
									</ul>
								</li>
								
								</li>
							</ul>
							<div class="topuser">
	<p>Top exam takers:</p>
	<table class="table table-bordered">
		<tr id="title_table">
			<th>User</th>
			<th>Score</th>
		</tr>
		<?php
		foreach($topscore as $a)
		{
			echo "<tr>";
			echo "<td>".$a["user"]."</td>";
			echo "<td>".$a["score"]."</td>";
			echo "</tr>";
		
		}
		?>
	</table>
</div>

<div class="hotro1">
					<div class="yahoo1">
						<a href="ymsgr:sendim?noregret3103" /><img src="http://opi.yahoo.com/online?u=noregret3103!M&m=g&t=2&l" border=0  /><br>
					</div>
					<div class="skype1">
						<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
						<a href="skype:USERNAME?call">
						<img src="http://download.skype.com/share/skypebuttons/buttons/call_blue_white_124x52.png" style="border: none"; alt="Skype Me™!" /></a>
					</div>
				</div>

				<div class="hotro2">
					<div class="yahoo2">
						<a href="ymsgr:sendim?tuyetbinhminh_roi24h" /><img src="http://opi.yahoo.com/online?u=tuyetbinhminh_roi24h!M&m=g&t=2&l" border=0  /><br>
					</div>	
					<div class="skype2">
						<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
						<a href="skype:USERNAME?call">
						<img src="http://download.skype.com/share/skypebuttons/buttons/call_blue_white_124x52.png" style="border: none;"  alt="Skype Me™!" /></a>
					</div>
				</div>

