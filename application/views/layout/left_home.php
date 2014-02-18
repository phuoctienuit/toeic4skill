							<ul class="nav nav-list">
								<li class="active"><a href="<?php echo base_url(); ?>index.php/main/index">INTRODUCE</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/main/listeningformat">TOEIC FORMAT TEST</a>
									<ul class="nav">
										<li><a href="<?php echo base_url(); ?>index.php/main/listeningformat">Listening and Reading</a></li>
										<li><a href="<?php echo base_url(); ?>index.php/main/speakingformat">Speaking and Writting</a></li>
									</ul>
								</li>
								<li><a href="<?php echo base_url(); ?>index.php/main/score">SCORE</a></li>
								<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">MATERIAL<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo base_url(); ?>index.php/main/list_book/500">Level 250-500</a></li>
										<li><a href="<?php echo base_url(); ?>index.php/main/list_book/750">Level 500-750</a></li>
										<li><a href="<?php echo base_url(); ?>index.php/main/list_book/900">Level 750-900</a></li>
									</ul>
								</li>
								<li><a href="<?php echo base_url(); ?>index.php/main/show_video">VIDEO</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/main/funny_english">FUNNY ENGLISH</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/main/contact">CONTACT</a></li>
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

