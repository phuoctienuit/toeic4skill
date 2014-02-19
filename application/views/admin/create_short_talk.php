<?php $this->load->view("layout/admin_header");?>

<?php $this->load->view("layout/admin_left");?>



<!--// Content starts -->

<div id="content"> 
 
  <div class="title_photo">
      <p>ADD FILE XML <b>SHORT TALK AND MP3</b></p>

  </div>
  <div id="upload_form">
    <form action="<?php echo base_url("index.php/admin/upload_file_short_talk"); ?>" method="post" enctype="multipart/form-data">
      <select name="level" id="level">
      <option value="500">500</option>
      <option value="750">750</option>
      <option value="900">900</option>
      </select></br>
      <div class="file_lable">
      <label for="file">Filename:</label>
      <input type="file" name="file[]" id="file" multiple="" ><br>
      </div>
      <input type="submit" name="submit" value="Submit" class="submit_file">
    </form>
  </div>
  
 

    
</div>

<?php $this->load->view("layout/admin_searchbox_footer");?>