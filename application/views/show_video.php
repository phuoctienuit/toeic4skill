<?php $this->load->view('layout/header');?>

			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_home');?>
						</div>

						<div id="content" class="col-xs-6 col-md-9">
									
						<?php
							foreach($aaaa as $s)
							{
								?>
								<div class="title_video">
									<?php echo $s['title'];
									?>

								</div>
								<iframe width="420" height="315" src="<?php echo $s['link'];?>" frameborder="0" allowfullscreen></iframe>
								<?php
								
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
