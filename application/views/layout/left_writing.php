<ul class="nav nav-list">
								<li class="active"><a href="#">Chia sẻ kinh nghiệm</a>
									<ul class="nav">
										<li><a href="<?php echo base_url()?>index.php/main/sharing_writing/1">Cách mô tả tranh</a></li>
										<li><a href="<?php echo base_url()?>index.php/main/sharing_writing/2">Các viết một bài essay</a></li>
										<li><a href="<?php echo base_url()?>index.php/main/sharing_writing/3">Khác</a></li>
									</ul>
								</li>
								<li><a href="#">Luyện tập</a>
									<ul class="nav">
										<li><a href="<?php echo base_url()?>index.php/main/list_w_sentence">Write a sentence based on a picture</a></li>
										<li><a href="<?php echo base_url()?>index.php/main/w_response">Response a written request</a></li>
										<li><a href="<?php echo base_url()?>index.php/main/list_w_essay">Write an oppion essay</a></li>						
									</ul>
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

