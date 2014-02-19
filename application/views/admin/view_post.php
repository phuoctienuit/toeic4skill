
<?php $this->load->view("layout/admin_header");?>

<?php $this->load->view("layout/admin_left");?>


<div id="content"> 
	<div class="list_score">
			<div align="center">DANH SÁCH CÁC BÀI VIẾT CHIA SẼ KINH NGHIỆM</div>
			<table class="table table-bordered">
			<tbody>
				<tr id="title_table">
					<th>Id</th><th>Name</th><th>Level</th><th>Edit</th><th>Delete</th>
				</tr>
					 <?php
					 		foreach ($array_post as $post) {
					 ?>

					<tr>
						<td><?php echo $post['id'];?></td><td><?php echo $post['name'];?></td>
						<td><?php echo $post['level'];?></td>
						<td><a href=""><img src="<?php echo $link_image?>/edit.png"/></a></td>
						<td><a href=""><img src="<?php echo $link_image?>/delete.png"/></a></td>
					</tr>
	

					 <?php	
					 		}
					  ?>
			 </tbody>
			</table>
 	</div><!--end list score-->
    
</div>

<?php $this->load->view("layout/admin_searchbox_footer");?>
