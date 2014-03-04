<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="<?php echo base_url();?>application/template/css/style_show_xml.css" rel="stylesheet" type="text/css">
</head>

<div id='content_xml'>
	<div class='title'>CHỈNH SỬA NỘI DUNG ĐỀ THI TOEIC</div>
	<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">

	    <textarea rows="35" cols="90" name="content"><?php readfile($fn); ?></textarea>

	    <input type="submit" value="Save"> 
	</form>
</div>