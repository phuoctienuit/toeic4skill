<?php $this->load->view('layout/header');?>
			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_home');?>
						</div>

						<div id="content" class="col-xs-6 col-md-9">
						<h1>Test Content</h1>
						<p>The <b>TOEIC</b> Listening and Reading test is a paper-and-pencil, multiple-choice assessment. There are two timed sections of 100 questions each.</p>
						<h2>Section I: Listening</h2>
						<p>Test takers listen to a variety of questions and short conversations recorded in English, then answer questions based on what they have heard (100 items total).</p>
						<ul>
							<li>Part 1: Photographs</li>
							<li>Part 2: Question-Response</li>
							<li>Part 3: Conversations</li>
							<li>Part 4: Short Talks</li>
						</ul>
						<h2>Section II: Reading</h2>
						<p>Test takers read a variety of materials and respond at their own pace (100 items total).</p>
						<ul>
							<li>Part 5: Incomplete Sentences</li>
							<li>Part 6: Error Recognition or Text Completion</li>
							<li>Part 7: Reading Comprehension</li>
						</ul>
						<h2>Test Length</h2>
						<p>The test takes approximately 2,5 hours, with:</p>
						<ul>
							<li>45 minutes for Section I</li>
							<li>75 minutes for Section II</li>
							<li>approximately 30 minutes to answer biographical questions</li>
						</ul>
					</div>
					</div>
				</div>
			</div><!--/main-->
			<?php $this->load->view('layout/footer');?>		