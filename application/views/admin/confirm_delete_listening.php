
<?php $this->load->view("layout/admin_header");?>

<?php $this->load->view("layout/admin_left");?>

<?php 
foreach($array_post as $a)
{
?>
<div id="content"> 
 	
	<div class="form_score">
		<form class="form-horizontal" action="<?php echo base_url()?>index.php/admin/delete_listening/<?php echo $a['id'];?>" method="post">
		<fieldset>

		<!-- Form Name -->
		<legend align="center">XÁC NHẬN XÓA BÀI VIẾT CHIA SẺ RA KHỎI HỆ THỐNG</legend>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="id">ID</label>  
		  <div class="col-md-2">
		  <input id="id" name="id" value="<?php echo $a['id'];?>" type="hidden" placeholder="" class="form-control input-md">
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="name">Name</label>  
		  <div class="col-md-8">
		  <input id="user" name="user" value="<?php echo $a['name'];?>" type="text" placeholder="" class="form-control input-md">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="level">Level</label>  
		  <div class="col-md-2">
		  <input id="score" name="score" value="<?php echo $a['level'];?>" type="text" placeholder="" class="form-control input-md">
		    
		  </div>
		</div>

		<!-- Button (Double) -->
		<div class="form-group">
		  <div class="col-md-8">
		  <div class="submit_button">
		    <input type="submit" value="XÓA">
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
