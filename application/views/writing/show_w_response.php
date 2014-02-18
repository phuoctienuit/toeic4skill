<?php $this->load->view('layout/header');?>
			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_writing');?>
						</div>

						<div id="content" class="col-xs-6 col-md-9">

						<?php
							foreach($resp as $s)
							{
								?>
								<div id='test_answer' class='show_content'>
									<div class='request_content'><?php echo $s['content'];?></div>
								
									
									<div class='answer_writing'>
										<textarea rows="2" cols="50"></textarea>
										<div class='display_answer'>
												<?php echo $s['key']; ?>
										</div> 

									</div>
										
								</div><br>
								
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