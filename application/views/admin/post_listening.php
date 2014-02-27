

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>POST SHARING</title>

<!--start Css file here-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>ckeditor/sample.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/template/css/post.css" />
<!--end Css file here-->

<!--JS CKEditor-->
<script type="text/javascript" src="<?php echo base_url();?>ckeditor/sample.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
<!--JS CKEditor-->

</head>

<body style="background-color: antiquewhite">
	<div id="menu_ngang">
	   <ul>
	     <li><a href="<?php echo base_url()?>index.php/admin/post">Listening</a></li>
	     <li><a href="<?php echo base_url()?>index.php/admin/add_post_reading">Reading</a></li>
	     <li><a href="<?php echo base_url()?>index.php/admin/add_post_speaking">Speaking</a></li>
	     <li><a href="<?php echo base_url()?>index.php/admin/add_post_writing">Writing</a></li>
	 
	   </ul>
	</div>
	<div id="title" style="background-color: rgb(236, 229, 229)">
		ĐĂNG BÀI CHIA SẺ KINH NGHIỆM
	</div>

	<div id="content_sharing" style="background-color: rgb(245, 231, 231)" >
        <form action="<?php echo base_url();?>index.php/admin/insert_post" method="post" >
        
		<div class="form-group">
		  	<label>Name</label>
		  <input id="name" name="name" value="" type="text" class="textbox1">
		    
		  </div>
	
		<div class="form-group">
		 <label class="col-md-4 control-label" for="level">Level</label>  
			<select name="level" id="level">
				<option value="500">500</option>
				<option value="750">750</option>
				<option value="900">900</option>

			</select>

		</div>
		<div class="form-group">
		 <label class="col-md-4 control-label" for="skill">Chuyên mục</label>  
			<select name="skill" id="skill">
				<option value="sharing_listening">sharing_listening</option>
			</select>

		</div>
	   <textarea name="thread" rows="10" cols="10" class="ckeditor">
        	
        </textarea>
         <script type="text/javascript">CKEDITOR.replace('editor')</script>
                   
        <input type="submit" name="submit" class="button_1" style="width:120px; height:auto" value="Lưu thông tin" />
         <input type="reset" class="button_1" style="width:120px; height:auto" value="Nhập lại" />
                   
         </form>
     
     </div>    


           
</body>
</html>