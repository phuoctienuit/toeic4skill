<?php $this->load->view('layout/header');?>
			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_reading');?>
						</div>

						<div id="content" class="col-xs-6 col-md-9">
							<?php
								if($level==500) $ttt="Level 250-500";
								else  if($level==750) $ttt="Level 500-750";
								else $ttt="Level 750-900"
							?>
							<div class="level"><?php echo $ttt;?></div>
							<?php 
							foreach($text_complextion_id as $a)
							{
						?>
							<div class="text_complextion_test">								
								<a href="<?php echo base_url(); ?>index.php/main/show_text_complextion/<?php echo $a['id'];?>"><?php echo 'Đề luyện tập số '.$a['id']?></a>
							</div>

						<?php
							}
						?>
						</div>
					</div>
				</div>
			</div><!--/main-->
			<?php $this->load->view('layout/footer');?>