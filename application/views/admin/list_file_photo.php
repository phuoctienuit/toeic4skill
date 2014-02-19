<?php $this->load->view("layout/admin_header");?>

<?php $this->load->view("layout/admin_left");?>



<!--// Content starts -->

<div id="content"> 
 
  <div class="content_file"> 
    <div align="center">DANH SÁCH CÁC ĐỀ THI</div>
        <div id="file_500">
            <?php 
                foreach($fileArray as $file)
                {

            ?>
            
            
            <div class='image'>
                <img src='<?php echo $link_image;?>file.png' width='25' height='25'>
            </div>
            
            <div class='filename'> 
                   <a target = '_blank' href="<?php echo base_url() ;?>index.php/admin/view_file_photo/<?php echo $file; ?>"> <?php echo $file; ?><a/>
            </div>
            <div class='image_edit'>
                    <img src='<?php echo $link_image;?>edit.png' width='25' height='25'>

            </div>
            <div class='image_delete'>

                    
            </div>
    
            <?php
                }
             ?>
        </div> <!--End file 500-->
      <div id="file_750">
            <?php 
             foreach($fileArray1 as $file1)
            {

            ?>
               
                    <div class='list_file'>
                        <div class='image'>
                            <img src='<?php echo $link_image;?>file.png' width='25' height='25'>
                        </div>
                    </div>
                        
                    <div class='filename'> 
                           <a target = '_blank' href="<?php echo base_url() ;?>index.php/admin/view_file_photo/<?php echo $file1; ?>"> <?php echo $file1; ?><a/>
                    </div>
                    <div class='image_edit'>
                            <img src='<?php echo $link_image;?>edit.png' width='25' height='25'>

                    </div>
                    <div class='image_delete'>

                            
                    </div>

            <?php
                }
             ?>
    </div><!--end file 750-->

        


    </div>     
  
</div>

<?php $this->load->view("layout/admin_searchbox_footer");?>