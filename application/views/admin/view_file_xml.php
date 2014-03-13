
<?php $this->load->view("layout/admin_header");?>

<?php $this->load->view("layout/admin_left");?>



<!--// Content starts -->

<div id="content"> 
 
  <div id="form_add">
    <div class='title'>CHỈNH SỬA NỘI DUNG ĐỀ THI TOEIC</div>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
        <?php
        $i = 0;
        foreach($part_picture as $question)
        {
            include 'cauhoi.php';
            $i++;
        }
        ?>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary submit_file">
    </form>
  </div>
 

    
</div>

<?php $this->load->view("layout/admin_searchbox_footer");?>