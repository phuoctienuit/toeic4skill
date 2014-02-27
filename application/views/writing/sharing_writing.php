<?php $this->load->view('layout/header');?>
			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_writing');?>
						</div>

						<div id="content" class="col-xs-6 col-md-9">

							<?php 
							foreach($sharing_id as $a)
							{
						?>

						
							<div class="share_ex">
								<a href="<?php echo base_url(); ?>index.php/main/show_detail_sharing_writing/<?php echo $a['id'];?>"><?php echo $a['name'];?></a>
							
							</div>

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