
<?php $this->load->view("layout/admin_header");?>

<?php $this->load->view("layout/admin_left");?>

<?php 
foreach($array_video as $a)
{
?>
<div id="content"> 
 	
	<div class="form_score">
		<form class="form-horizontal" action="<?php echo base_url()?>index.php/admin/update_link_video/<?php echo $a['id'];?>" method="post">
		<fieldset>

		<!-- Form Name -->
		<legend align="center">CHỈNH SỬA LINK CHIA SẺ VIDEO</legend>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="id">ID</label>  
		  <div class="col-md-2">
		  <input id="id" name="id" value="<?php echo $a['id'];?>" type="hidden" placeholder="" class="form-control input-md">
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="user">Title</label>  
		  <div class="col-md-8">
		  <input id="user" name="title" value="<?php echo $a['title'];?>" type="text" placeholder="" class="form-control input-md">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="score">Link</label>  
		  <div class="col-md-8">
		  <input id="score" name="link" value="<?php echo $a['link'];?>" type="text" placeholder="" class="form-control input-md">
		    
		  </div>
		</div>

		<!-- Button (Double) -->
		<div class="form-group">
		  <div class="col-md-8">
		  <div class="submit_button">
		    <input type="submit" value="CẬP NHẬT">
		  </div>
		  </div>
		</div>

		</fieldset>
		</form>

	</div>
		 
    
</div>
<?php 
}
?>


<?php $this->load->view("layout/admin_searchbox_footer");?>
