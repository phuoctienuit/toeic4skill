
<?php $this->load->view("layout/admin_header");?>

<?php $this->load->view("layout/admin_left");?>


<div id="content"> 
	<div class="list_score">
			<div align="center">DANH SÁCH CÁC NGƯỜI DÙNG VÀ ĐIỂM THI</div>
			<table class="table table-bordered">
			<tbody>
				<tr id="title_table">
					<th>User</th><th>Score</th><th>Date</th><th>Delete</th>
				</tr>
					 <?php
					 		foreach ($array_score as $score) {
					 ?>

					<tr>
						<td><?php echo $score['user'];?></td><td><?php echo $score['score'];?></td>
						<td><?php echo $score['date'];?></td>
						<td><a href="<?php echo base_url();?>index.php/admin/confirm_delete_score/<?php echo $score['id']?>"><img src="<?php echo $link_image?>/delete.png"/></a></td>
					</tr>
	

					 <?php	
					 		}
					  ?>
			 </tbody>
			</table>
 	</div><!--end list score-->
    
</div>

<?php $this->load->view("layout/admin_searchbox_footer");?>
