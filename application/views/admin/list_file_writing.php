<?php $this->load->view("layout/admin_header");?>

<?php $this->load->view("layout/admin_left");?>



<!--// Content starts -->

<div id="content"> 
 
        <div class="title_file">DANH SÁCH CÁC ĐỀ THI PHẦN WRITING</div>
    <div class="content_file"> 
    
        <div id="file_500">
           
            <?php 
                foreach($fileArray as $file)
                {

            ?>

            <div class='image'>
                <img src='<?php echo $link_image;?>file.png' width='25' height='25'>
            </div>
            
            <div class='filename'> 
                   <a target = '_blank' href="<?php echo base_url() ;?>index.php/admin/view_file_writing/<?php echo $file; ?>"> <?php echo $file; ?></a>
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
    </div>    
  
 
 

    
</div>

<?php $this->load->view("layout/admin_searchbox_footer");?>