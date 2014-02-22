

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Home Page</title>

<!--start Css file here-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>ckeditor/sample.css" />
<!--end Css file here-->

<!--JS CKEditor-->
<script type="text/javascript" src="<?php echo base_url();?>ckeditor/sample.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
<!--JS CKEditor-->

</head>

<body>
        <form action="<?php echo base_url();?>index.php/admin/get_post" method="post" >
	   <textarea name="thread" rows="10" cols="10" class="ckeditor">
        	<?php
			echo "Chưa có nội dung chi tiết cho tin tức này ! Hãy thêm vào chi tiết tin này.";
            ?>
        </textarea>
         <script type="text/javascript">CKEDITOR.replace('editor')</script>
                   
                    	<input type="submit" name="submit" class="button_1" style="width:120px; height:auto" value="Lưu thông tin" />
                   <input type="reset" class="button_1" style="width:120px; height:auto" value="Nhập lại" />
                   
         </form>
          
           
</body>
</html>