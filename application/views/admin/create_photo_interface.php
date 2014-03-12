<?php $this->load->view("layout/admin_header");?>

<?php $this->load->view("layout/admin_left");?>



<!--// Content starts -->

<div id="content"> 
 
  <div id="form_add">
    <form action="<?php echo base_url("index.php/admin/add_content_xml"); ?>" method="post" enctype="multipart/form-data">
    <div>
     <label class="" for="">Câu</label>  
      <select name="cau" id="cau">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      </select>
    </div>
    <div>
      <label class="" for="">Nội dung</label> 
      <input id="noidung" name="noidung" value="" type="text" class="textbox1">
      </div>
      <div>
      <label class="" for="">Option A</label> 
      <input name="optiona" class="class" value="" type="text">
      </div>
      <div>
      <label class="" for="">Option B</label> 
      <input name="optionb" class="class" value="" type="text">
      </div>
      <div>
      <label class="" for="">Option C</label> 
      <input name="optionc" class="class" value="" type="text">
      </div>
      <div>
      <label class="" for="">Option D</label> 
      <input name="optiond" class="class" value="" type="text">
      </div>
      <label class="" for="">ĐÁP ÁN</label>  
      <select name="dapan" id="dapan">
      <option value="a">A</option>
      <option value="b">B</option>
      <option value="c">C</option>
      <option value="d">D</option>
      
      </select>
      <div class="file_lable">
      <label for="file">Filename:</label>
      <input type="file" name="file[]" id="file" multiple="" ><br>
      </div>
      <input type="submit" name="submit" value="Submit" class="submit_file">
    </form>
  </div>
 

    
</div>

<?php $this->load->view("layout/admin_searchbox_footer");?>