
<?php $this->load->view("layout/admin_header");?>

<?php $this->load->view("layout/admin_left");?>


<div id="content"> 
	<div class="list_video">
			<div align="center">DANH SÁCH CÁC VIDEO CHIA SẺ</div>
			<table class="table table-bordered">
			<tbody>
				<tr id="title_table">
					<th>Id</th><th>Title</th><th>Link</th><th>Edit</th><th>Delete</th>
				</tr>
					 <?php
					 		foreach ($array_video as $post) {
					 ?>

					<tr>
						<td><?php echo $post['id'];?></td><td><?php echo $post['title'];?></td>
						<td><?php echo $post['link'];?></td>
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
