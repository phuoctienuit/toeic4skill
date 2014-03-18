<?php $this->load->view('layout/header');?>
			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_speaking');?>
						</div>

						<div id="content" class="col-xs-6 col-md-9">
							<div class="level">Describle a picture</div>
							<?php 
							foreach($descri_pic_id as $a)
							{
						?>
							<div class="descri_pic_test">
								<a href="<?php echo base_url(); ?>index.php/main/show_descri_pic_detail/<?php echo $a['id'];?>"><?php echo 'Đề luyện tập số '.$a['id']?></a>
							</div>
						<?php
							}
						?>
						</div>
					</div>
				</div>
			</div><!--/main-->
			<?php $this->load->view('layout/footer');?>