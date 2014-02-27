
<?php $this->load->view("layout/admin_header");?>

<?php $this->load->view("layout/admin_left");?>


<div id="content"> 
	<div id="menu_ngang">
	   <ul>
	   	 <li><a target="_blank" href="<?php echo base_url()?>index.php/admin/post">Post</a></li>
	     <li><a href="<?php echo base_url()?>index.php/admin/post_listening">Listening</a></li>
	     <li><a href="<?php echo base_url()?>index.php/admin/post_reading">Reading</a></li>
	     <li><a href="#">Speaking</a></li>
	     <li><a href="<?php echo base_url()?>index.php/admin/post_writing">Writing</a></li>
	 
	   </ul>
	</div>
	
	<div class="list_score">
			<div align="center"><br>DANH SÁCH CÁC BÀI VIẾT CHIA SẺ KINH NGHIỆM WRITING</div>
			<table class="table table-bordered">
			<tbody>
				<tr id="title_table">
					<th>Id</th><th>Name</th><th>Edit</th><th>Delete</th>
				</tr>
					 <?php
					 		foreach ($array_post as $post) {
					 ?>

					<tr>
						<td><?php echo $post['id'];?></td><td><?php echo $post['name'];?></td>
						
						<td><a href="<?php echo base_url()?>index.php/admin/edit_writing/<?php echo $post['id'];?>"><img src="<?php echo $link_image?>/edit.png"/></a></td>
						<td><a href="<?php echo base_url()?>index.php/admin/confirm_delete_writing/<?php echo $post['id'];?>"><img src="<?php echo $link_image?>/delete.png"/></a></td>
					</tr>
	

					 <?php	
					 		}
					  ?>
			 </tbody>
			</table>
 	</div><!--end list score-->
 	
    
</div>

<?php $this->load->view("layout/admin_searchbox_footer");?>
