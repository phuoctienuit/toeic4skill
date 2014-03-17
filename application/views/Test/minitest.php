<?php $this->load->view('layout/header');?>

			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_home');?>
						</div>

						<div id="content" class="col-xs-6 col-md-9">
							<?php 
							if($this->session->userdata('username'))
							{
							foreach($minitest_id as $a)
							{
						?>
							<div class="minitest_order">
								<a href="<?php echo base_url(); ?>index.php/main/show_minitest/<?php echo $a['id'];?>"><?php echo 'Đề luyện tập số '.$a['id']?></a>
							</div>

						<?php
								}
							}
							else
								{
									echo "<div class='noti'>Bạn cần đăng nhập để có thể làm bài test.</div>";
								}
						?>
						</div>
					</div>
				</div>
			</div><!--/main-->
			<?php $this->load->view('layout/footer');?>