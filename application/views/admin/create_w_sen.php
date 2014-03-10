<?php $this->load->view("layout/admin_header");?>

<?php $this->load->view("layout/admin_left");?>



<!--// Content starts -->

<div id="content"> 
 
  
    <div class="title_photo">
      <p>ADD FILE XML <b>WRITING SENTENCES</b></p>

  </div>
    <div id="upload_form">
      <form action="<?php echo base_url("index.php/admin/upload_file_w_sen"); ?>" method="post" enctype="multipart/form-data">
        <div class="file_lable">
        <label for="file">Filename:</label>
        <input type="file" name="file[]" id="file" multiple="" ><br>
        </div>
        <input type="submit" name="submit" value="Submit" class="submit_file">
      </form>
  </div>
 

    
</div>

<?php $this->load->view("layout/admin_searchbox_footer");?>