<!doctype html>
<html>

	<head>
		<title>Luyen thi TOEIC 4 ki nang</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" charset="UTF-8">
		<script src="<?php echo base_url(); ?>application/template/js/jquery-1.10.2.min.js"></script>
		<script src="<?php echo base_url(); ?>application/template/js/fulltest.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/template/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/template/css/main.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/template/css/fulltest.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/template/css/reading.css">
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			var base_url = "<?php echo base_url(); ?>";
		</script>
		<!--login-->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/template/css/login/animate.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/template/css/login/styles.css">
		<script src="<?php echo base_url(); ?>application/template/js/main.js"></script>
		<script>
			$(document).ready(function(){
				var base_url = "<?php echo base_url(); ?>";
				var h = document.getElementById("content").offsetHeight;
				 document.getElementById("sidebar").style.height = h + "px";
			});
		</script>
		
	</head>

	<body>
		<div class="container">
			<div class="col-md-12" id="header">
				
					<img src="<?php echo base_url(); ?>application/template/image/header.png" alt="">
				
			</div><!--/header-->
			<div id="menu">
				
					<nav class="navbar navbar-inverse navbar-static-top" role="navigation"}>
						<div class="navbar-header">
						    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							      <span class="sr-only">Toggle navigation</span>
							      <span class="icon-bar"></span>
							      <span class="icon-bar"></span>
							      <span class="icon-bar"></span>
						    </button>
		    				<a class="navbar-brand" href="#">ToeicChallenge</a>
	 					</div>
	 					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active">
									<a href="<?php echo base_url(); ?>index.php/main/index">Home</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/main/listening">Listening</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/main/reading">Reading</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/main/speaking">Speaking</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/main/writting">Writting</a>
								</li>
								<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Test<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo base_url(); ?>index.php/main/list_minitest">Mini Test</a></li>
										<li><a href="<?php echo base_url(); ?>index.php/main/list_fulltest">Full Test</a></li>
									</ul>
								</li>
							</ul>
							<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn-default">Search</button>
							</form>
							<ul class="nav navbar-nav navbar-right">
									<?php 
										$username = $this->session->userdata('username');
										if($username)
										{
									?>
										<li><a href="#" id='currentuser'>Hello, <?php echo $username;?></a></li>
										<li>
										<a href='#' id='logout'>Log Out</a>
										</li>
									<?php
										}
										else
										{
									?>
										<li><a href="#" id='signup'>Sign Up</a></li>
										<li>
											<a href='#' id='login'>Log In</a>
										</li>
									<?php
										}
									?>
							</ul>
						</div>
					</nav>
			</div>

<div class="popup">
	<img class="btnclose" src="<?php echo base_url(); ?>application/template/image/close-icon.png" width="32" height="32"alt="">
	<div id="container_login">
		<form action="process_login" method="post" id="form">
			<label for="username">Username:</label>
			<input type="name" id="username" />
			<label for="password">Password:</label>
			<p><a href="#">Forgot your password?</a>
			<input type="password" id="password" />
			<div id="lower">
				<input type="checkbox"><label class="check" for="checkbox" />Keep me logged in</label>
				<input type="submit" value="Login" id="btnlogin" />
			</div>
		</form>
	</div>
</div>

<div class="signup">
	<img class="btnclose" src="<?php echo base_url(); ?>application/template/image/close-icon.png" width="32" height="32"alt="">
	<div id="container_signup">
		<form action="" method="post" id="form">
			<label for="fullname">Fullname:</label>
			<input type="name" id="fullname" />
			<label for="username">Username:</label>
			<input type="name" id="username1" />			
			<label for="password">Password:</label>
			<input type="name" id="password1" />			
			<label for="email">Email:</label>
			<input type="name" id="email" />			
			<div id="lower">
				<input type="submit" value="Register" id="btnsignup" />
			</div>
		</form>
	</div>
</div>
			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_home');?>
						</div>

						<div id="content" class="col-xs-6 col-md-9">
							<div class="timer">
								<span class="hour"><span id="hh">02</span> Hours</span>
								<span class="minute"><span id="mm">00</span> Minutes</span>
								<span class="second"><span id="ss">00</span> Seconds</span>
							</div>
							<div class="fulltest">
								<div class="test_content">
									<div class='part' id="part1">
										<?php
											$i=0;
											$xml=simplexml_load_file($fulltest_path);
											foreach ($xml->xpath('picture/question') as $question) 
											{
												$i++;
												$cau=$question->cau;
												$audio=$question->audio;
												$picture=$question->picture;
												$optiona=$question->optiona;
												$optionb=$question->optionb;
												$optionc=$question->optionc;
												$optiond=$question->optiond;
												$answer = $question->key;											
												echo "<div class='content_question $i aaa'><b><p>Look at the picture and listen to the sentences. Choose the sentence that best describes the picture:</p>$cau.</b>";

													echo "<div class='audio_question'>";
														echo "<audio controls>";
															echo "<source src=$link_audio$audio type='audio/mpeg'>";
														echo "</audio>";
													echo "</div>";
													echo "<div class='picture_question'><img src=$link_image$picture /></div>";
													echo "</br>";
													echo "<input type='hidden' class='key' value=$answer>";
													?>
													<div class="ans_full12" style="display:none;">
														<p>A. <?php echo $optiona;?></p>
														<p>B. <?php echo $optionb;?></p>
														<p>C. <?php echo $optionc;?></p>
														<p>D. <?php echo $optiond;?></p>
													</div>
													<?php
												echo "</div>";

											}
											
										?>
									</div>
									<div class='part' id="part2">
										<?php
											foreach ($xml->xpath('QR/question') as $question) {
												$i++;
												$cau=$question->cau;
												$audio=$question->audio;
												$optiona=$question->optiona;
												$optionb=$question->optionb;
												$optionc=$question->optionc;
												$optiond=$question->optiond;
												$answer = $question->key;											
												echo "<div class='content_question $i aaa'><b><p>Listen to the question and the three responses. Choose the response that best answers the question:</p>$cau.</b>";
													echo "<div class='audio_question'>";
														echo "<audio controls>";
															echo "<source src=$link_audio$audio type='audio/mpeg'>";
														echo "</audio>";
													echo "</div>";
													echo "<input type='hidden' class='key' value=$answer>";
													?>
													<div class="ans_full12" style="display:none;">
														<p>A. <?php echo $optiona;?></p>
														<p>B. <?php echo $optionb;?></p>
														<p>C. <?php echo $optionc;?></p>
													</div>
													<?php
												echo "</div>";
											}
										?>
									</div>
									<div class='part' id="part3">
										<?php
										foreach ($xml->xpath('short_con/group') as $group) 
										{
											$i++;
											$group_id=$group->id;
											$group_content=$group->group_content;
											$audio=$group->audio;
										?>
										<div class='group <?php echo $i;?> aaa'>
											<b><p>Listen to the dialogue. Then read each question and choose the best answer:</p></b>
											<div class='audio_question'>
												<audio controls>
													<source src="<?php echo $link_audio.$audio; ?>" type='audio/mpeg'>
												</audio>
											</div>
											<div class='group_content ans_full34' style="display:none;">
												<?php echo $group_content; ?>
											</div>
											<?php
												foreach ($group->question as $question) 
												{
													$cau=$question->cau;
													$content=$question->content;
													$optiona=$question->optiona;
													$optionb=$question->optionb;
													$optionc=$question->optionc;
													$optiond=$question->optiond;
													$answer = $question->key;
												
													echo "<div class='question_sen'>";
													echo "<div class='content_question'><b>$cau. $content</b></div>";
											?>
											<div class='option' id="<?php echo $cau;?>">
												<div>
													<input type="radio" name="radioquestion<?php echo $cau;?>" value="a"/><span> A.<?php echo " ".$optiona;?></span>
												</div>
												<div>
													<input type="radio" name="radioquestion<?php echo $cau;?>" value="b"/><span> B.<?php echo " ".$optionb;?></span>
												</div>
												<div>
													<input type="radio" name="radioquestion<?php echo $cau;?>" value="c"/><span> C.<?php echo " ".$optionc;?></span>
												</div>
												<div>
													<input type="radio" name="radioquestion<?php echo $cau;?>" value="d"/><span> D.<?php echo " ".$optiond;?></span>
												</div>
												<input type="hidden" class="key" value="<?php echo $answer; ?>"/>
											</div>
											</div>
											<?php
											}
										echo "</div>";
										}
									?>
									</div>
									<div class='part' id="part4">
										<?php
										foreach ($xml->xpath('short_talk/group') as $group) 
										{
											$i++;
											$group_id=$group->id;
											$group_content=$group->group_content;
											$audio=$group->audio;
										?>
										<div class='group <?php echo $i;?> aaa'>
											<b><p>Listen to the talk. Then read each question and choose the best answer:</p></b>
											<div class='audio_question'>
												<audio controls>
													<source src="<?php echo $link_audio.$audio; ?>" type='audio/mpeg'>
												</audio>
											</div>
											<div class='group_content ans_full34' style="display:none;">
												<?php echo $group_content; ?>
											</div>
											<?php
												foreach ($group->question as $question) 
												{
													$cau=$question->cau;
													$content=$question->content;
													$optiona=$question->optiona;
													$optionb=$question->optionb;
													$optionc=$question->optionc;
													$optiond=$question->optiond;
													$answer = $question->key;
												
													echo "<div class='question_sen'>";
													echo "<div class='content_question'><b>$cau. $content</b></div>";
											?>
											<div class='option' id="<?php echo $cau;?>">
												<div>
													<input type="radio" name="radioquestion<?php echo $cau;?>" value="a"/><span> A.<?php echo " ".$optiona;?></span>
												</div>
												<div>
													<input type="radio" name="radioquestion<?php echo $cau;?>" value="b"/><span> B.<?php echo " ".$optionb;?></span>
												</div>
												<div>
													<input type="radio" name="radioquestion<?php echo $cau;?>" value="c"/><span> C.<?php echo " ".$optionc;?></span>
												</div>
												<div>
													<input type="radio" name="radioquestion<?php echo $cau;?>" value="d"/><span> D.<?php echo " ".$optiond;?></span>
												</div>
												<input type="hidden" class="key" value="<?php echo $answer; ?>"/>
											</div>
											</div>
											<?php
											}
										echo "</div>";
										}
									?>
									</div>
									<div class='part' id="part5">
											<?php
												foreach ($xml->xpath('incom/question') as $question) {
													$i++;
													$cau=$question->cau;
													$content=$question->content;
													$optiona=$question->optiona;
													$optionb=$question->optionb;
													$optionc=$question->optionc;
													$optiond=$question->optiond;
													$answer = $question->key;
													echo "<div id='' class='question_sen $i aaa'>";
														echo "<div class='content_question $cau'><b><p>Choose the word that best completes the sentence:</p>$cau.</b> $content</div>";
										?>
											<div class='option' id="<?php echo $cau;?>">
												<div>
													<input type="radio" name="radioquestion<?php echo $cau;?>" value="a"/><span> A.<?php echo " ".$optiona;?></span>
												</div>
												<div>
													<input type="radio" name="radioquestion<?php echo $cau;?>" value="b"/><span> B.<?php echo " ".$optionb;?></span>
												</div>
												<div>
													<input type="radio" name="radioquestion<?php echo $cau;?>" value="c"/><span> C.<?php echo " ".$optionc;?></span>
												</div>
												<div>
													<input type="radio" name="radioquestion<?php echo $cau;?>" value="d"/><span> D.<?php echo " ".$optiond;?></span>
												</div>
												<input type="hidden" class="key" value="<?php echo $answer; ?>"/>

											</div>
										<?php
											echo "</div>";
											}
										?>
									</div>
									<div class='part' id="part6">
										
										<?php
											$showpart6 = array();
											foreach ($xml->xpath('text_complextion/group') as $group){
												$showpart6["$group->id"] = $group->id + $group->count()-3;
												$i++;
												$group_id=$group->id;
												$group_content=$group->group_content;
												echo "<div class='group $i aaa'>";
												echo "<b><p>Choose the word or phrase that best completes the blanks:</p></b>";
												echo "<div class='group_content'>";
													echo $group_content;
												echo "</div>";
												foreach ($group->question as $question) 
												{
													$cau=$question->cau;
													$content=$question->content;
													$optiona=$question->optiona;
													$optionb=$question->optionb;
													$optionc=$question->optionc;
													$optiond=$question->optiond;
													$answer = $question->key;
													echo "<div id='' class='question_sen'>";
													echo "<div class='content_question'><b>$cau.</b> $content</div>";
												?>
														<div class='option' id="<?php echo $cau;?>">
																<div>
																	<input type="radio" name="radioquestion<?php echo $cau;?>" value="a"/><span> A.<?php echo " ".$optiona;?></span>
																</div>
																<div>
																	<input type="radio" name="radioquestion<?php echo $cau;?>" value="b"/><span> B.<?php echo " ".$optionb;?></span>
																</div>
																<div>
																	<input type="radio" name="radioquestion<?php echo $cau;?>" value="c"/><span> C.<?php echo " ".$optionc;?></span>
																</div>
																<div>
																	<input type="radio" name="radioquestion<?php echo $cau;?>" value="d"/><span> D.<?php echo " ".$optiond;?></span>
																</div>
																<input type="hidden" class="key" value="<?php echo $answer; ?>"/>
														</div>
											<?php
													echo "</div>";
												}
												echo "</div>";
											}
										?>
									</div>	
									<div class='part' id="part7">
										
										<?php
											$showpart7 = array();
											$x = 153;
											foreach ($xml->xpath('reading_comprehen/group') as $group){
											$showpart7["$group->id"] = $group->id + $group->count()-3;
											$i++;
											$group_id=$group->id;
											$group_content=$group->group_content;
											echo "<div class='group $i aaa'>";
											echo "<b><p>Read the passage and choose the correct answer:</p></b>";
											echo "<div class='group_content'>";
												echo $group_content;
											echo "</div>";
											foreach ($group->question as $question) {
												$cau=$question->cau;
												$content=$question->content;
												$optiona=$question->optiona;
												$optionb=$question->optionb;
												$optionc=$question->optionc;
												$optiond=$question->optiond;
												$answer = $question->key;
												echo "<div id='' class='question_sen'>";
												echo "<div class='content_question'><b>$cau. $content</b></div>";
											?>
									<div class='option' id="<?php echo $cau;?>">
											<div>
												<input type="radio" name="radioquestion<?php echo $cau;?>" value="a"/><span> A.<?php echo " ".$optiona;?></span>
											</div>
											<div>
												<input type="radio" name="radioquestion<?php echo $cau;?>" value="b"/><span> B.<?php echo " ".$optionb;?></span>
											</div>
											<div>
												<input type="radio" name="radioquestion<?php echo $cau;?>" value="c"/><span> C.<?php echo " ".$optionc;?></span>
											</div>
											<div>
												<input type="radio" name="radioquestion<?php echo $cau;?>" value="d"/><span> D.<?php echo " ".$optiond;?></span>
											</div>
											<input type="hidden" class="key" value="<?php echo $answer; ?>"/>
										</div>
									</div>
										<?php
												}
												echo "</div>";
											}
										?>
									</div>
									
								</div>
								<div class="test_answer">
									<?php
									$tc = 0;
									for($i=1; $i<=10; $i++)
									{
										$tc ++;
									?>
										<div id='show<?php echo $tc; ?>'>
											<div class="question <?php echo $i?>">
												<div class="order"><?php echo $i;?>.</div>
												<div class="option_ans" id="<?php echo $i;?>">
													<div>
														<div class="status a"></div>
														<input type="radio" name="radioquestion<?php echo $i;?>" value="a"/><span> A </span>
													</div>
													<div>
														<div class="status b"></div>
														<input type="radio" name="radioquestion<?php echo $i;?>" value="b"/><span> B </span>
													</div>
													<div>
														<div class="status c"></div>
														<input type="radio" name="radioquestion<?php echo $i;?>" value="c"/><span> C </span>
													</div>
													<div>
														<div class="status d"></div>
														<input type="radio" name="radioquestion<?php echo $i;?>" value="d"/><span> D </span>
													</div>
												</div>
											</div>
										</div>
									<?php	
									}
									?>
									<?php
									for($i=11; $i<=40; $i++)
									{
										$tc++;
									?>
										<div id='show<?php echo $tc; ?>'>
											<div class="question <?php echo $i?>">
												<div class="order"><?php echo $i;?>.</div>
												<div class="option_ans" id="<?php echo $i;?>">
													<div>
														<div class="status a"></div>
														<input type="radio" name="radioquestion<?php echo $i;?>" value="a"/><span> A </span>
													</div>
													<div>
														<div class="status b"></div>
														<input type="radio" name="radioquestion<?php echo $i;?>" value="b"/><span> B </span>
													</div>
													<div>
														<div class="status c"></div>
														<input type="radio" name="radioquestion<?php echo $i;?>" value="c"/><span> C </span>
													</div>
												</div>
											</div>
										</div>
									<?php	
									}
									?>
									<?php
									for($i=41; $i<=100; $i++)
									{
										if($i%3 == 2)
										{
											$tc++;
											echo "<div id='show".$tc."'>";
										}
									?>
										<div class="question <?php echo $i?>">
											<div class="order"><?php echo $i;?>.</div>
											<div class="option_ans" id="<?php echo $i;?>">
												<div>
													<div class="status a"></div>
													<input type="radio" name="radioquestion<?php echo $i;?>" value="a"/><span> A </span>
												</div>
												<div>
													<div class="status b"></div>
													<input type="radio" name="radioquestion<?php echo $i;?>" value="b"/><span> B </span>
												</div>
												<div>
													<div class="status c"></div>
													<input type="radio" name="radioquestion<?php echo $i;?>" value="c"/><span> C </span>
												</div>
												<div>
													<div class="status d"></div>
													<input type="radio" name="radioquestion<?php echo $i;?>" value="d"/><span> D </span>
												</div>

											</div>
										</div>
									<?php	
										if($i%3 == 1)
											echo "</div>";
									}
									for($i=101; $i<=140; $i++)
									{
										$tc++;
									?>
										<div id='show<?php echo $tc; ?>'>
											<div class="question <?php echo $i?>">
												<div class="order"><?php echo $i;?>.</div>
												<div class="option_ans" id="<?php echo $i;?>">
													<div>
														<div class="status a"></div>
														<input type="radio" name="radioquestion<?php echo $i;?>" value="a"/><span> A </span>
													</div>
													<div>
														<div class="status b"></div>
														<input type="radio" name="radioquestion<?php echo $i;?>" value="b"/><span> B </span>
													</div>
													<div>
														<div class="status c"></div>
														<input type="radio" name="radioquestion<?php echo $i;?>" value="c"/><span> C </span>
													</div>
													<div>
														<div class="status d"></div>
														<input type="radio" name="radioquestion<?php echo $i;?>" value="d"/><span> D </span>
													</div>

												</div>
											</div>
										</div>
									<?php	
									}
									for($i=141; $i<=152; $i++)
									{
										foreach($showpart6 as $start=>$val)
										{
											if($i == $start)
											{
												$tc++;
												echo "<div id='show".$tc."'>";
												break;
											}
										}
									?>
										<div class="question <?php echo $i?>">
											<div class="order"><?php echo $i;?>.</div>
											<div class="option_ans" id="<?php echo $i;?>">
												<div>
													<div class="status a"></div>
													<input type="radio" name="radioquestion<?php echo $i;?>" value="a"/><span> A </span>
												</div>
												<div>
													<div class="status b"></div>
													<input type="radio" name="radioquestion<?php echo $i;?>" value="b"/><span> B </span>
												</div>
												<div>
													<div class="status c"></div>
													<input type="radio" name="radioquestion<?php echo $i;?>" value="c"/><span> C </span>
												</div>
												<div>
													<div class="status d"></div>
													<input type="radio" name="radioquestion<?php echo $i;?>" value="d"/><span> D </span>
												</div>

											</div>
										</div>
									<?php	
										foreach($showpart6 as $end)
										{
											if($i == $end)
											{
												echo "</div>";
												break;
											}
										}
									}
									for($i=153; $i<=200; $i++)
									{
										foreach($showpart7 as $start=>$val)
										{
											if($i == $start)
											{
												$tc++;
												echo "<div id='show".$tc."'>";
												break;
											}
										}
									?>
										<div class="question <?php echo $i?>">
											<div class="order"><?php echo $i;?>.</div>
											<div class="option_ans" id="<?php echo $i;?>">
												<div>
													<div class="status a"></div>
													<input type="radio" name="radioquestion<?php echo $i;?>" value="a"/><span> A </span>
												</div>
												<div>
													<div class="status b"></div>
													<input type="radio" name="radioquestion<?php echo $i;?>" value="b"/><span> B </span>
												</div>
												<div>
													<div class="status c"></div>
													<input type="radio" name="radioquestion<?php echo $i;?>" value="c"/><span> C </span>
												</div>
												<div>
													<div class="status d"></div>
													<input type="radio" name="radioquestion<?php echo $i;?>" value="d"/><span> D </span>
												</div>

											</div>
										</div>
									<?php	
										foreach($showpart7 as $end)
										{
											if($i == $end)
											{
												echo "</div>";
												break;
											}
										}
									}
									?>
								</div>
								<div class="next_pre">
									<button type="button" class="btn btn-primary" id="btnback">BACK</button>
									<button type="button" class="btn btn-primary" id="btnnext">NEXT</button>
								</div>
								<div class="ans_score">
									<center><p>Result: <span id="result">0</span> /200</p></center>
									<button type="button" class="btn btn-primary" id="btnanswer">SCORE</button>
									<button type="button" class="btn btn-primary" id="btnagain">AGAIN</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/main-->
<?php $this->load->view('layout/footer');?>
<?php
	if($username)
	{
?>
	<div id="cur_user" style="display:none"><?php echo $username;?></div>
<?php
	}
?>