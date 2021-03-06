<?php $this->load->view('layout/header');?>


	<script src="<?php echo base_url(); ?>application/template/js/incom.js"></script>

	<div id="main">
		<div class="container">
			<div class="row">
				<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_reading');?>
				</div>

				<div id="content" class="col-xs-6 col-md-9">
					<div class="request">
						Choose the word that best completes the sentence:
					</div>
					<?php 
								$i = 0;
								foreach ($feed as $question) {
								if((++$i)%2)
									$t = "question even";
								else
									$t = "question odd";
								$cau=$question->cau;
								$content=$question->content;
								$optiona=$question->optiona;
								$optionb=$question->optionb;
								$optionc=$question->optionc;
								$optiond=$question->optiond;
								$answer = $question->key;
								echo "<div id='' class='$t'>";
									echo "<div class='content_question'>$cau. $content</div>";
					?>
									<div class='option' id="<?php echo $cau;?>">
										<div>
											<div class="status a"></div>
											<input type="radio" name="radioquestion<?php echo $cau;?>" value="a"/><span> A.<?php echo " ".$optiona;?></span>
										</div>
										<div>
											<div class="status b "></div>
											<input type="radio" name="radioquestion<?php echo $cau;?>" value="b"/><span> B.<?php echo " ".$optionb;?></span>
										</div>
										<div>
											<div class="status c"></div>
											<input type="radio" name="radioquestion<?php echo $cau;?>" value="c"/><span> C.<?php echo " ".$optionc;?></span>
										</div>
										<div>
											<div class="status d"></div>
											<input type="radio" name="radioquestion<?php echo $cau;?>" value="d"/><span> D.<?php echo " ".$optiond;?></span>
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