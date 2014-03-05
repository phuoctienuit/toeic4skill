<!doctype html>
<html>

	<head>
		<title>Luyen thi TOEIC 4 ki nang</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" charset="UTF-8">
		<script src="<?php echo base_url(); ?>application/template/js/jquery-1.10.2.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/template/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>application/template/css/main.css">
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
		    				<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/main/index">ToeicChallenge</a>
	 					</div>
	 					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="">
									<a href="<?php echo base_url(); ?>index.php/main/index">Home</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/main/list_sharing_listening/500">Listening</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/main/list_sharing_reading/500">Reading</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/main/speaking">Speaking</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/main/list_w_sentence">Writting</a>
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
	<div id="container_login">
		<img class="btnclose" src="<?php echo base_url(); ?>application/template/image/close-icon.png" width="32" height="32"alt="">
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
	<div id="container_signup">
		<img class="btnclose" src="<?php echo base_url(); ?>application/template/image/close-icon.png" width="32" height="32"alt="">
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