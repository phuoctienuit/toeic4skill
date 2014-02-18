<?php $this->load->view('layout/header');?>
			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_reading');?>
						</div>

						<div id="content" class="col-xs-6 col-md-9">
							
						<?php
							foreach ($sharing_content as $a) {
								echo $a['content'];
							}
						 ?>
						</div>
					</div>
				</div>
			</div><!--/main-->
			<?php $this->load->view('layout/footer');?>	