

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>POST SHARING</title>

<!--start Css file here-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>ckeditor/sample.css" />
<!--end Css file here-->

<!--JS CKEditor-->
<script type="text/javascript" src="<?php echo base_url();?>ckeditor/sample.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
<!--JS CKEditor-->

</head>

<body style="background-color: antiquewhite">

	<div id="title" style="background-color: rgb(236, 229, 229)">
		CHỈNH SỬA BÀI CHIA SẺ KINH NGHIỆM
	</div>
		<?php
		foreach($array_post as $post)
		?>
	<div id="content_sharing" style="background-color: rgb(245, 231, 231)" >
        <form action="<?php echo base_url();?>index.php/admin/update_post" method="post" >
        
		<div class="form-group">
		  	<label>ID</label>
		  <input id="id" name="id" value="<?php echo $post['id']; ?>" disabled="disabled" type="text" class="textbox1">
		    
		 </div>
		<div class="form-group">
		  	<label>Name</label>
		  <input id="name" name="name" value="<?php echo $post['name']; ?>" type="text" class="textbox1">
		    
		 </div>
	
		<div class="form-group">
		  	<label>Level</label>
		  <input id="level" name="level" value="<?php echo $post['level']; ?>" type="text" class="textbox1">
		    
		 </div>
		 <div class="form-group">
		  	<label>Chuyên mục</label>
		  <input id="skill" name="skill" disabled="disabled" value="<?php echo $sharing_listening; ?>" type="text" class="textbox1">
		    
		 </div>
		
	   <textarea name="thread" rows="10" cols="10" class="ckeditor">
        	<?php echo $post['content'];?>
        </textarea>
         <script type="text/javascript">CKEDITOR.replace('editor')</script>
                   
        <input type="submit" name="submit" class="button_1" style="width:120px; height:auto" value="Lưu thông tin" />
         <input type="reset" class="button_1" style="width:120px; height:auto" value="Nhập lại" />
                   
         </form>
     
     </div>    
           
</body>
</html>