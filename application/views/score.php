<?php $this->load->view('layout/header');?>

			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_home');?>
						</div>

						<div id="content" class="col-xs-6 col-md-9">
							<div class="intro_score" style="margin-left:20;margin-top:3px0px;">
								<p>Sau khi làm bài Full Test lúc luyện thi TOEIC, các bạn sẽ dựa vào bảng Convert điểm TOEIC này tính ra số điểm thật của mình, từ đó có thể có những bước ôn luyện cụ thể để nâng cao điểm số.</p>
								<p style="font-weight:bold">Ví dụ:</p>
								<p>1. Sau khi kết thúc làm bài, số câu đúng của bạn là:</p>
								<ul>
								<li>Listening: 70</li>
								<li>Reading:   66</li>
								</ul>
								<p>2. Bạn sử dụng bảng  Convert, điểm của bạn sẽ thay đổi thành:</p>
								<ul>
								<li>Listening: 360</li>
								<li>Reading:   325</li>
								</ul>
								<p>3. Như vậy, tổng điểm của bạn là gộp của 2 phần lại: 685</p>
							</div>
							<img src="<?php echo base_url(); ?>application/template/image/score.png" style="margin-left:100px;width:600px;height:670px;" alt="">
							<br><br>
							<p style="font-size:120%">Sau đây là bảng đánh giá trình độ tiếng anh của các bạn thông qua từng thang điểm cụ thể:</p>
							<br>
							<table class="table table-hover">
								<tr>
									<th style="width:200px">Score Level</th>
									<th>General Description</th>
								</tr>

								<tr>
									<td>875 to 990</td>
									<td>
										<ul>
											<li>Professional proficiency in English.</li>
											<li>Able to communicate effectively in any situation.</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>730 to 875</td>
									<td>
										<ul>
											<li>Proficiency in English.</li>
											<li>Able to satisfy most work requirements with language that is often, but not always, acceptable and effective.</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>590 to 730</td>
									<td>
										<ul>
											<li>Working proficiency in English.</li>
											<li>Able to satisfy most social demands and limited work requirements.</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>500 to 590</td>
									<td>
										<ul>
											<li>Advanced Level In English.</li>
											<li>Can initiate and maintain predictable face-to-face conversations and satisfy limited social demands.</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>300 to 550</td>
									<td>
										<ul>
											<li>Intermediate Level in English. </li>
											<li>Speaker has a functional,but limited proficiency. Able to maintain very simple face-to-face conversations on familiar topics.</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>200 to 300</td>
									<td>
										<ul>
											<li>Beginning Level in English. </li>
											<li>Able to satisfy immediate survival needs.</li>
										</ul>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div><!--/main-->
			<?php $this->load->view('layout/footer');?>			