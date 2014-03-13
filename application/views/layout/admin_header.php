<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>TOEIC 4 SKILL</title>

<link href="<?php echo base_url();?>application/template/css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>application/template/bootstrap/css/bootstrap1.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>application/template/css/createphoto.css">
<script src="<?php echo base_url(); ?>application/template/js/jquery-1.10.2.min.js"></script>

<script src="<?php echo base_url(); ?>application/template/js/admin.js"></script>

<script>
      $(document).ready(function(){
        var base_url = "<?php echo base_url(); ?>";
        var h = document.getElementById("form_add").offsetHeight;
        h=h+50;
        document.getElementById("leftcolumn").style.height = h + "px";
    </script>

<div class="bodytext" id="submenu"> 
  <table width="493" border="0" class="class2">
    <tbody><tr>
      <td valign="middle"><a href="<?php echo base_url()?>index.php/admin/view_score">Điểm Thi</a></td>
      <td valign="middle"><a href="<?php echo base_url()?>index.php/admin/post_listening">Bài Viết</a></td>
      
      <td valign="middle"><a href="<?php echo base_url()?>index.php/admin/sharing_video">Video</a></td>
      <td valign="middle"><a href="#">Funny English</a></td>
      <td valign="middle"><a href="<?php echo base_url()?>index.php/admin/list_file_fulltest">Full Test</a></td>
    
    </tr>
  </tbody></table>
</div>


<div id="logo">
  <img style="height:69px;" src="<?php echo base_url(); ?>application/template/image/headeradmin.png">
</div>


<div id="arrows"></div>
<div class="bodytext" id="hello">Chào <a href="#">Admin</a>, <img src="http://localhost/toeic4skill/application/template/image/user.png" alt="user_icon" width="22" height="25" border="0"><br>
</div>

<!--// arrows edit ends -->
<!--// Visit site starts -->

<div id="visitsite">
  <div align="center" class="toplinks">
    <div id="visitsite_icon"><a href="#"><img src="http://localhost/toeic4skill/application/template/image/thongke.jpg" alt="big_visitsite" width="30" height="25" border="0"></a></div>
    <br>
    <br>
      <a href="#"><span class="toplinks">THỐNG KÊ</span></a></div>
</div>

<!--// Visit site edit ends -->
<!--// Users edit starts -->


<div id="users">
  <div align="center">
    <div id="users_icon"><a href="#"><img src="http://localhost/toeic4skill/application/template/image/big_users.png" alt="big_users" width="24" height="26" border="0"></a></div>
<span class="toplinks"><br>
      <br>
      <a href="#"><span class="toplinks">NGƯỜI DÙNG</span></a></span></div>
  <br>
</div>

<!--// users edit ends -->
<!--// Settings edit starts -->


<div id="settings">
  <div align="center">
    <div id="settings_icon"><a href="#"><img src="http://localhost/toeic4skill/application/template/image/big_settings.png" alt="big_settings" width="25" height="26" border="0"></a></div>
      <span class="toplinks"><br>
      <br>
      <a href="#"><span class="toplinks">CÀI ĐẶT</span></a></span><br>
  </div>
</div>

<!--// settings edit ends -->
<!--// Logout edit starts -->

<div id="logout">
  <div align="center">
    <div id="logout_icon"><a href="#"><img src="http://localhost/toeic4skill/application/template/image/big_logout.png" alt="big_logout" width="25" height="25" border="0"></a></div>
<span class="toplinks"><br>
      <br>
      <a href="#"><span class="toplinks">THOÁT</span></a></span><br>
  </div>
</div>

<!--// logout edit ends -->
<!--// Dropdown edit starts -->


