<?php $this->load->view('layout/header');?>
			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_writing');?>
						</div>

						<div id="content" class="col-xs-6 col-md-9">

						


						<?php
							$i=0;
							foreach ($feed as $group) {
								if((++$i)%2)
									$t = "question even";
								else
									$t = "question odd";
								$cau=$group->cau;
								$hint=$group->hint;
								$picture=$group->picture;
								$key=$group->key;
								echo "<div id='' class='$t'>";
									echo $cau.".";

									
									echo "<div class='w_picture'><img src=$link_image$picture /></div>";
									echo "<div class='hint'>";
										echo $hint;
									echo "</div>";
									echo "<textarea rows='2' cols='50'></textarea>";
									echo "<div class='w_key'>";
										echo $key;
									echo "</div>";
									
									
								echo "</div>";
								

							}

							
								echo "<div class='link_pag'";	
								echo $this->pagination->create_links(); // tạo link phân trang 
								echo "</div>";	
						?>			
						</div>
					</div>
				</div>
			</div><!--/main-->
			<?php $this->load->view('layout/footer');?>		