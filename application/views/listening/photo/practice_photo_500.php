<!doctype html>
<html>

	<head>
		<title>Luyen thi TOEIC 4 ki nang</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" charset="UTF-8">
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/template/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/template/css/main.css">
		<script src="<?php echo base_url(); ?>application/template/js/jquery-1.10.2.min.js"></script>
		<script src="<?php echo base_url(); ?>application/template/bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="col-md-12" id="header">
				<div class="container">
					<img src="<?php echo base_url(); ?>application/template/image/header.png" alt="">
				</div>
			</div><!--/header-->
			<div id="menu">
				<div class="container">
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
								<li>
									<a href="#">Full Test</a>
								</li>
							</ul>
							<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn-default">Search</button>
							</form>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">Sign Up</a></li>
								<li><a href="#">Log In</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<ul class="nav nav-list">
								<li class="active"><a href="#">Chia sẻ kinh nghiệm</a>
									<ul class="nav">
										<li><a href="">Level 250-500</a></li>
										<li><a href="">Level 500-750</a></li>
										<li><a href="">Level 750-900</a></li>
									</ul>
								</li>
								<li><a href="#">Luyện tập</a>
									<ul class="nav">
										<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Photo<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="<?php echo base_url(); ?>index.php/main/practice_photo_500">Level 250-500</a></li>
												<li><a href="">Level 500-750</a></li>
												<li><a href="">Level 750-900</a></li>
											</ul>
										</li>
										<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Questions and Responses<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="">Level 250-500</a></li>
												<li><a href="">Level 500-750</a></li>
												<li><a href="">Level 750-900</a></li>
											</ul>
										</li>
										<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Short conversation<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="">Level 250-500</a></li>
												<li><a href="">Level 500-750</a></li>
												<li><a href="">Level 750-900</a></li>
											</ul>
										</li>
										<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Short talk<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="">Level 250-500</a></li>
												<li><a href="">Level 500-750</a></li>
												<li><a href="">Level 750-900</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#">Test</a>
									<ul class="nav">
										<li><a href="">Mini test</a></li>
										<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Skill test<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="">Photo</a></li>
												<li><a href="">Questions and Responses</a></li>
												<li><a href="">Short conversation</a></li>
												<li><a href="">Short talk</a></li>
											</ul>
										</li>
										<li><a href="">Full test</a></li>										
									</ul>
								</li>
							</ul>
						</div>

						<div id="content" class="col-xs-6 col-md-9">
						<?php 
						
						$xml=simplexml_load_file($link_xml);
						if($xml)
						{
							foreach ($xml->question as $question) {
								$cau=$question->cau;
								$picture=$question->picture;
								$audio=$question->audio;
								$optiona=$question->optiona;
								$optionb=$question->optionb;
								$optionc=$question->optionc;
								$optiond=$question->optiond;

								echo "<div id='$cau' class='question'>";
								echo "Question $cau";
								echo "</br>";
								echo "<img src=$link_image$picture />";
								echo "</br>";
								echo "<audio controls>";
								echo "<source src=$link_audio$audio type='audio/mpeg'>";
								echo "</audio>";
								echo "</br>";
								?>
								<form action="">
								<input type="radio" name="radioquestion" value="a"/>A<br>
								<input type="radio" name="radioquestion" value="b"/>B<br>
								<input type="radio" name="radioquestion" value="c"/>C<br>
								<input type="radio" name="radioquestion" value="d"/>D
								
								</form>
								</div>
								<?php
					
							}

							

						}
						?>


						</div>
					</div>
				</div>
			</div><!--/main-->
			<div id="footer">
				<div class="container">
					<p>Email: phuoctienuit@gmail.com</p>
					<p>Tel: 0933113190</p>
					<p>Developed by Lu Phuoc Tien and Vo Van Ket</p>
				</div>
			</div>
		</div>	
	</body>	
</html>