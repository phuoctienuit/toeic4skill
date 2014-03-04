<?php $this->load->view('layout/header');?>
<script src="<?php echo base_url(); ?>application/template/js/writing.js"></script>
			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_writing');?>
						</div>

						<div id="content" class="col-xs-6 col-md-9">
						<div class='request'>Viết lại câu sử dụng từ cho trước</div>
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
								echo "<div id='' class='question'>";
									echo $cau.".";
									echo "<div class='w_picture'><img src=$link_image$picture /></div>";
									echo "<div class='hint'>";
										echo $hint;
									echo "</div>";
									echo "<textarea rows='2' cols='50' id='output'></textarea>";
									echo "<div class='w_key'>";
										echo $key;
									echo "</div>";
								echo "</div>";
							}
								echo "<div class='same_question'>";
								echo "<div class='link_pag'>";	
								echo $this->pagination->create_links(); // tạo link phân trang 
								echo "</div>";	
						?>
						<button type="button" class="btn btn-primary" id="btnshow">SHOW ANSWER</button>
						<button type="button" class="btn btn-primary" id="btnagain" onclick="javascript:eraseText();">AGAIN</button>
						</div>
						</div>
					</div>
				</div>
			</div><!--/main-->
			<?php $this->load->view('layout/footer');?>