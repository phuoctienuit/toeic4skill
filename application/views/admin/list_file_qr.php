<?php $this->load->view("layout/admin_header");?>

<?php $this->load->view("layout/admin_left");?>



<!--// Content starts -->

<div id="content"> 
 
  <div class="content_file"> 
    <p>DANH SÁCH CÁC ĐỀ THI</p>
    <?php 
        foreach($fileArray as $file)
        {

    ?>
        <div class='list_file'>
            <div class='image'>
                <img src='<?php echo $link_image;?>file.png' width='25' height='25'>
            </div>
        </div>
            
        <div class='filename'> 
               <a target = '_blank' href="<?php echo base_url() ;?>index.php/admin/view_file_qr/<?php echo $file; ?>"> <?php echo $file; ?><a/> 
        </div>

    <?php
        }
     ?>
        
    </div>     
  
 

    
</div>

<?php $this->load->view("layout/admin_searchbox_footer");?>