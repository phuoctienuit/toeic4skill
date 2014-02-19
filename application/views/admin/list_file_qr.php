<?php $this->load->view("layout/admin_header");?>

<?php $this->load->view("layout/admin_left");?>



<!--// Content starts -->

<div id="content"> 

 
  <div class="title_file">DANH SÁCH CÁC ĐỀ THI</div>
    <div class="content_file"> 
    
        <div id="file_500">
            <div>LEVEL 500</div>
            <?php 
                foreach($fileArray as $file)
                {

            ?>

            <div class='image'>
                <img src='<?php echo $link_image;?>file.png' width='25' height='25'>
            </div>
            
            <div class='filename'> 
                   <a target = '_blank' href="<?php echo base_url() ;?>index.php/admin/view_file_qr/<?php echo $file; ?>"> <?php echo $file; ?></a>
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
        <div>LEVEL 750</div>
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
                           <a target = '_blank' href="<?php echo base_url() ;?>index.php/admin/view_file_qr/<?php echo $file1; ?>"> <?php echo $file1; ?><a/>
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

    
      <div id="file_900">
         <div>LEVEL 900</div>
            <?php 
             foreach($fileArray2 as $file2)
            {

            ?>
               
                    <div class='list_file'>
                        <div class='image'>
                            <img src='<?php echo $link_image;?>file.png' width='25' height='25'>
                        </div>
                    </div>
                        
                    <div class='filename'> 
                           <a target = '_blank' href="<?php echo base_url() ;?>index.php/admin/view_file_qr/<?php echo $file2; ?>"> <?php echo $file2; ?><a/>
                    </div>
                    <div class='image_edit'>
                            <img src='<?php echo $link_image;?>edit.png' width='25' height='25'>

                    </div>
                    <div class='image_delete'>

                            
                    </div>

            <?php
                }
             ?>
    </div><!--end file 900-->


    </div>    
  
 

    
</div><!--end content-->

<?php $this->load->view("layout/admin_searchbox_footer");?>