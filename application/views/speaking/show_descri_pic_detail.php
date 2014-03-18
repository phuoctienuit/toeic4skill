
<?php $this->load->view('layout/header');?>
			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_speaking');?>
						</div>

						<div id="content" class="col-xs-6 col-md-9">
							<div id="read_aloud">
								<div class="request">Directions: In this part of the test, you will describe the picture on your screen in as much detail as you can. You will have 30 seconds to prepare your response. Then you will have 45 seconds to speak about the picture.</div>
								<audio controls  autoplay style="display:none">
											  	<source src="http://localhost/toeic4skill/application/data_test/descri_pic/guide.mp3" type="audio/mpeg">
								</audio>
								<?php
									foreach ($descri_pic_content as $a) {
								?>
										<div class="img_des">
											<img  src="<?php echo $a['pic'];?>" alt="">
										</div>
										<div class='record'>
											<p>Let's record your voice, and then listen to what you have just talk</p>
										<audio controls autoplay class='default'></audio></br>

										<script src="<?php echo base_url(); ?>application/template/js/recorder.js"></script>
										
										<input onclick="startRecording()" type="button" class="btn btn-primary" value="Recording" />
										<input onclick="stopRecording()" type="button" class="btn btn-primary" value="Stop and Play" />
										</div>
										<div class="modelans">
											<p>Model answer:</p>
											<audio controls>
											  	<source src="<?php echo $a['path_model'];?>" type="audio/mpeg">
											</audio>
											<button type="button" class="btn btn-primary" id="btnmodelans">Show/Hide answer</button>
											<div style="display:none" class='ans_script'><?php echo $a['ans_model'];?></div>
										</div>
										
								<?php
									}
								 ?>

						 	</div>


						</div>
					</div>
				</div>
			</div><!--/main-->
<?php $this->load->view('layout/footer');?>	
<script>
			var onFail = function(e) {
				console.log('Rejected!', e);
			};

			var onSuccess = function(s) {
				var context = new webkitAudioContext();
				var mediaStreamSource = context.createMediaStreamSource(s);
				recorder = new Recorder(mediaStreamSource);
				recorder.record();

				// audio loopback
				// mediaStreamSource.connect(context.destination);
			}

			window.URL = window.URL || window.webkitURL;
			navigator.getUserMedia  = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;

			var recorder;
			var audio = document.querySelector('audio.default');

			function startRecording() {
				if (navigator.getUserMedia) {
					navigator.getUserMedia({audio: true}, onSuccess, onFail);
				} else {
					console.log('navigator.getUserMedia not present');
				}
			}

			function stopRecording() {
				recorder.stop();
				recorder.exportWAV(function(s) {
					audio.src = window.URL.createObjectURL(s);
				});
			}
</script>