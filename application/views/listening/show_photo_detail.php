<?php $this->load->view('layout/header');?>
<script src="<?php echo base_url(); ?>application/template/js/photo.js"></script>
			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_listening');?>
						</div>

						<div id="content" class="col-xs-6 col-md-9">

						<div class="request">Look at the picture and listen to the sentences. Choose the sentence that best describes the picture:</div>
						<?php
								$i = 0;
								foreach ($feed as $question) {
								if((++$i)%2)
									$t = "question even";
								else
									$t = "question odd";
								$cau=$question->cau;
								$audio=$question->audio;
								$picture=$question->picture;
								$optiona=$question->optiona;
								$optionb=$question->optionb;
								$optionc=$question->optionc;
								$optiond=$question->optiond;
								$answer = $question->key;
									echo "<div id='' class='questionphoto'>";									
									echo "<div class='content_question'>$cau. </div>";
									echo "<div class='audio_question'>";
									echo "<audio controls>";
										echo "<source src=$link_audio$audio type='audio/mpeg'>";
									echo "</audio>";
									echo "</div>";
									echo "<div class='picture_question'><img src=$link_image$picture /></div>";
									echo "</br>";
									
					?>
									<div class='option' id="<?php echo $cau;?>">
										<div class="selection">
											<div class="status a"></div>
											<input type="radio" name="radioquestion<?php echo $cau;?>" value="a"/><span class="letter"> A.</span><?php echo "<p class='show_answer'>"." ".$optiona."</p>";?>
										</div>
										<div class="selection">
											<div class="status b "></div>
											<input type="radio" name="radioquestion<?php echo $cau;?>" value="b"/><span class="letter"> B.</span><?php echo "<p class='show_answer'>"." ".$optionb."</p>";?>
										</div>
										<div class="selection">
											<div class="status c"></div>
											<input type="radio" name="radioquestion<?php echo $cau;?>" value="c"/><span class="letter"> C.</span><?php echo "<p class='show_answer'>"." ".$optionc."</p>";?>
										</div>
										<div class="selection">
											<div class="status d"></div>
											<input type="radio" name="radioquestion<?php echo $cau;?>" value="d"/><span class="letter"> D.</span><?php echo "<p class='show_answer'>"." ".$optiond."</p>";?>
										</div>
										<input type="hidden" class="key" value="<?php echo $answer; ?>"/>
									</div>
								</div>
					<?php 
						}
						echo "<div class='link_pag'";	
						echo $this->pagination->create_links(); // tạo link phân trang 
						echo "</div>";
					?>
					<div class="btnans_sub">
						<button type="button" id="btnanswer" class="btn btn-primary">ANSWERS</button>
						<button type="button" id="btnsubmit" class="btn btn-primary">SUBMIT</button>
						<button type="button" class="btn btn-primary" id="btnagain">AGAIN</button>
					</div>

						</div>
					</div>
				</div>
			</div><!--/main-->
			<?php $this->load->view('layout/footer');?>		