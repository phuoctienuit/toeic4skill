<?php $this->load->view('layout/header');?>
<script src="<?php echo base_url(); ?>application/template/js/writing.js"></script>
			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_writing');?>
						</div>

						<div id="content" class="col-xs-6 col-md-9">
						<div class='request'>Viết 1 đoạn văn khoảng 300 từ theo yêu cầu sau:</div>
						<?php
							$i=0;
							foreach ($feed as $group) {
								if((++$i)%2)
									$t = "question even";
								else
									$t = "question odd";
								$cau=$group->cau;
								$request=$group->request;
								$key=$group->key;
								echo "<div id='' class='question'>";

									echo "<div class='w_request'>";
										echo $request;
									echo "</div>";
									?>
									<div class="timer">
										<span class="minute"><span id="mm">00</span> Minutes</span>
										<span class="second"><span id="ss">00</span> Seconds</span>
									</div>
									<?php
									echo "<div class='limitessay'>";
									echo "<div class='textarea'>";
										echo "<textarea rows='20' cols='63' id='output'></textarea>";
									echo "</div>";
									echo "<div class='essay_key'>";
										echo "<div class='hidden_key'>";
											echo $key;
										echo "</div>";
									echo "</div>";
									echo "<div class='wordcount'>300 words left</div>";
									echo "</div>";
								echo "</div>";
							}
								echo "<div class='same_question'>";
								echo "<div class='link_pag'>";	
								echo $this->pagination->create_links(); // tạo link phân trang 
								echo "</div>";	
						?>
						<button type="button" class="btn btn-primary" id="btnshow_es">SHOW ANSWER</button>
						<button type="button" class="btn btn-primary" id="btnagain_es" onclick="javascript:eraseText();">AGAIN</button>
						</div>
						</div>
				</div><!--end content-->
				</div>
			</div><!--/main-->
			<?php $this->load->view('layout/footer');?>