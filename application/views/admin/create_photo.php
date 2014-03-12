<?php $this->load->view("layout/admin_header");?>

<?php $this->load->view("layout/admin_left");?>



<!--// Content starts -->

<div id="content"> 
 
  <ul>
    <li><a href="<?php echo base_url();?>index.php/admin/create_photo_upload">UPLOAD</a></li>
    <li><a href="<?php echo base_url();?>index.php/admin/create_photo_interface">GIAO DIỆN</a></li>
  </ul>
  
 

    
</div>

<?php $this->load->view("layout/admin_searchbox_footer");?>