<?php $this->load->view("layout/admin_header");?>

<?php $this->load->view("layout/admin_left");?>



<!--// Content starts -->

<div id="content"> 
 
  <div id="form_add">
    <form action="<?php echo base_url("index.php/admin/add_content_xml"); ?>" method="post" enctype="multipart/form-data">
        <div>    
            <select name="level" id="level">
                <option value="500">500</option>
                <option value="750">750</option>
                <option value="900">900</option>
            </select>
        </div>
        <?php
        for($i=1; $i<3; $i++)
        {
            //$this->load->view("admin/cauhoi");
            include 'cauhoi.php';
        }
        ?>
        <input type="submit" name="submit" value="Submit" class="submit_file">
    </form>
  </div>
 

    
</div>

<?php $this->load->view("layout/admin_searchbox_footer");?>