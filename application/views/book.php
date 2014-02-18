<?php $this->load->view('layout/header');?>

			<div id="main">
				<div class="container">
					<div class="row">
						<div id="sidebar" class="col-xs-12 col-md-3">
							<?php $this->load->view('layout/left_home');?>
						</div>

						<div id="content" class="col-xs-6 col-md-9">
							<?php
								if($level==500) $ttt="Level 250-500";
								else  if($level==750) $ttt="Level 500-750";
								else $ttt="Level 750-900"
							?>
							<div class="level"><?php echo $ttt;?></div>
							<?php
							foreach($book_id as $a)
							{
						?>
							<div class="book_share">
								<img src="<?php echo base_url();?>/application/template/image/book/<?php echo $a['picture'];?>">
								<a href="<?php echo base_url(); ?>index.php/main/show_book_detail/<?php echo $a['id'];?>"><?php echo $a['name'];?></a>
							</div>

						<?php
							}
							echo "<div class='link_pag'";	
								echo $this->pagination->create_links(); // tạo link phân trang 
							echo "</div>";
						?>
						</div>
					</div>
				</div>
			</div><!--/main-->
			<?php $this->load->view('layout/footer');?>