<?php 
class Admin extends CI_Controller{
	public function __contruct(){
		parrent::__contruct();

	}
	public function index(){
		$data['link_image']=base_url().'application/template/image';
		$this->load->view("admin/view_admin",$data);
	}
	
	public function view_score(){
		$data['array_score']=$this->madmin->get_score();
		$data['link_image']=base_url().'application/template/image';
		$this->load->view("admin/view_score",$data);
	}

	public function sharing_post(){
		$data['array_post']=$this->madmin->get_post();
		$data['link_image']=base_url().'application/template/image';
		$this->load->view("admin/view_post",$data);
	}
	public function sharing_video(){
		$data['array_video']=$this->madmin->get_video();
		$data['link_image']=base_url().'application/template/image';
		$this->load->view("admin/view_list_video",$data);
	}
	
	public function list_file_fulltest()
	{
		$path="application/data_test/fulltest/";
		$dir=opendir($path);
		while($entryName=readdir($dir)){
			$dirArray[]=$entryName;
		}
		closedir($dir);
		$indexCount=count($dirArray);
		for($i=0;$i<$indexCount;$i++){ 
			if(is_file($path."$dirArray[$i]")){
				$data['fileArray'][]=$dirArray[$i];
			}
		}
	
		$data['link_image']=base_url().'application/template/image/';
		$this->load->view("admin/list_file_fulltest",$data);
		
	}
	public function list_file_photo()
	{
		$path="application/data_test/photo/500/";
		$dir=opendir($path);
		while($entryName=readdir($dir)){
			$dirArray[]=$entryName;
		}
		closedir($dir);
		$indexCount=count($dirArray);
		for($i=0;$i<$indexCount;$i++){
			if($dirArray[$i]!="." && !is_dir($dirArray[$i])){
				$data['fileArray'][]=$dirArray[$i];
			}
		}


		$path1="application/data_test/photo/750/";
		$dir1=opendir($path1);
		while($entryName1=readdir($dir1)){
			$dirArray1[]=$entryName1;
		}
		closedir($dir1);
		$indexCount1=count($dirArray1);
		for($i1=0;$i1<$indexCount1;$i1++){
			if($dirArray1[$i1]!="." && !is_dir($dirArray1[$i1])){
				$data['fileArray1'][]=$dirArray1[$i1];
			}
		}

		$path2="application/data_test/photo/900/";
		$dir2=opendir($path2);
		while($entryName2=readdir($dir2)){
			$dirArray2[]=$entryName2;
		}
		closedir($dir2);
		$indexCount2=count($dirArray2);
		for($i2=0;$i2<$indexCount2;$i2++){
			if($dirArray2[$i2]!="." && !is_dir($dirArray2[$i2])){
				$data['fileArray2'][]=$dirArray2[$i2];
			}
		}
		
		

		
		
		$data['link_image']=base_url().'application/template/image/';
		$this->load->view("admin/list_file_photo",$data);
		
	}
	public function view_file_photo($filename){
		$fn1 = "application/data_test/photo/500/$filename";
		$fn2 = "application/data_test/photo/750/$filename";
		$fn3 = "application/data_test/photo/900/$filename";
		$fn = "";
		if(is_file($fn1))
			$fn=$fn1;
		else if(is_file($fn2))
			$fn=$fn2;
		else if(is_file($fn3))
			$fn=$fn3;

		if (isset($_POST['content']))
		{
		    $content = stripslashes($_POST['content']);

		    $fp = fopen($fn,"w") or die ("Error opening file in write mode!");

		    fputs($fp,$content);

		    fclose($fp) or die ("Error closing file!");
		}
		$data['fn']=$fn;

		$this->load->view("admin/view_file_photo",$data);
	}

public function list_file_qr()
	{
		$path="application/data_test/qr/500/";
		$dir=opendir($path);
		while($entryName=readdir($dir)){
			$dirArray[]=$entryName;
		}
		closedir($dir);
		$indexCount=count($dirArray);
		for($i=0;$i<$indexCount;$i++){
			if($dirArray[$i]!="." && !is_dir($dirArray[$i])){
				$data['fileArray'][]=$dirArray[$i];
			}
		}

		$path1="application/data_test/qr/750/";
		$dir1=opendir($path1);
		while($entryName1=readdir($dir1)){
			$dirArray1[]=$entryName1;
		}
		closedir($dir1);
		$indexCount1=count($dirArray1);
		for($i1=0;$i1<$indexCount1;$i1++){
			if($dirArray1[$i1]!="." && !is_dir($dirArray1[$i1])){
				$data['fileArray1'][]=$dirArray1[$i1];
			}
		}

		$path2="application/data_test/qr/900/";
		$dir2=opendir($path2);
		while($entryName2=readdir($dir2)){
			$dirArray2[]=$entryName2;
		}
		closedir($dir2);
		$indexCount2=count($dirArray2);
		for($i2=0;$i2<$indexCount2;$i2++){
			if($dirArray2[$i2]!="." && !is_dir($dirArray2[$i2])){
				$data['fileArray2'][]=$dirArray2[$i2];
			}
		}

		$data['link_image']=base_url().'application/template/image/';
		$this->load->view("admin/list_file_qr",$data);

		
	}
	public function view_file_qr($filename){
		$fn1 = "application/data_test/qr/500/$filename";
		$fn2 = "application/data_test/qr/750/$filename";
		$fn3 = "application/data_test/qr/900/$filename";
		$fn = "";
		if(is_file($fn1))
			$fn=$fn1;
		else if(is_file($fn2))
			$fn=$fn2;
		else if(is_file($fn3))
			$fn=$fn3;

		if (isset($_POST['content']))
		{
		    $content = stripslashes($_POST['content']);

		    $fp = fopen($fn,"w") or die ("Error opening file in write mode!");

		    fputs($fp,$content);

		    fclose($fp) or die ("Error closing file!");
		}
		$data['fn']=$fn;

		$this->load->view("admin/view_file_qr",$data);
	}
public function list_file_short_con()
	{
		$path="application/data_test/short_con/500/";
		$dir=opendir($path);
		while($entryName=readdir($dir)){
			$dirArray[]=$entryName;
		}
		closedir($dir);
		$indexCount=count($dirArray);
		for($i=0;$i<$indexCount;$i++){
			if($dirArray[$i]!="." && !is_dir($dirArray[$i])){
				$data['fileArray'][]=$dirArray[$i];
			}
		}

		$path1="application/data_test/short_con/750/";
		$dir1=opendir($path1);
		while($entryName1=readdir($dir1)){
			$dirArray1[]=$entryName1;
		}
		closedir($dir1);
		$indexCount1=count($dirArray1);
		for($i1=0;$i1<$indexCount1;$i1++){
			if($dirArray1[$i1]!="." && !is_dir($dirArray1[$i1])){
				$data['fileArray1'][]=$dirArray1[$i1];
			}
		}

		$path2="application/data_test/short_con/900/";
		$dir2=opendir($path2);
		while($entryName2=readdir($dir2)){
			$dirArray2[]=$entryName2;
		}
		closedir($dir2);
		$indexCount2=count($dirArray2);
		for($i2=0;$i2<$indexCount2;$i2++){
			if($dirArray2[$i2]!="." && !is_dir($dirArray2[$i2])){
				$data['fileArray2'][]=$dirArray2[$i2];
			}
		}

		$data['link_image']=base_url().'application/template/image/';
		$this->load->view("admin/list_file_short_con",$data);
		
	}
	public function view_file_short_con($filename){
		$fn1 = "application/data_test/short_con/500/$filename";
		$fn2 = "application/data_test/short_con/750/$filename";
		$fn3 = "application/data_test/short_con/900/$filename";
		$fn = "";
		if(is_file($fn1))
			$fn=$fn1;
		else if(is_file($fn2))
			$fn=$fn2;
		else if(is_file($fn3))
			$fn=$fn3;

		if (isset($_POST['content']))
		{
		    $content = stripslashes($_POST['content']);

		    $fp = fopen($fn,"w") or die ("Error opening file in write mode!");

		    fputs($fp,$content);

		    fclose($fp) or die ("Error closing file!");
		}
		$data['fn']=$fn;

		$this->load->view("admin/view_file_short_con",$data);
	}
	public function list_file_short_talk()
	{
		$path="application/data_test/short_talk/500/";
		$dir=opendir($path);
		while($entryName=readdir($dir)){
			$dirArray[]=$entryName;
		}
		closedir($dir);
		$indexCount=count($dirArray);
		for($i=0;$i<$indexCount;$i++){
			if($dirArray[$i]!="." && !is_dir($dirArray[$i])){
				$data['fileArray'][]=$dirArray[$i];
			}
		}

		$path1="application/data_test/short_talk/750/";
		$dir1=opendir($path1);
		while($entryName1=readdir($dir1)){
			$dirArray1[]=$entryName1;
		}
		closedir($dir1);
		$indexCount1=count($dirArray1);
		for($i1=0;$i1<$indexCount1;$i1++){
			if($dirArray1[$i1]!="." && !is_dir($dirArray1[$i1])){
				$data['fileArray1'][]=$dirArray1[$i1];
			}
		}

		$path2="application/data_test/short_talk/900/";
		$dir2=opendir($path2);
		while($entryName2=readdir($dir2)){
			$dirArray2[]=$entryName2;
		}
		closedir($dir2);
		$indexCount2=count($dirArray2);
		for($i2=0;$i2<$indexCount2;$i2++){
			if($dirArray2[$i2]!="." && !is_dir($dirArray2[$i2])){
				$data['fileArray2'][]=$dirArray2[$i2];
			}
		}

		$data['link_image']=base_url().'application/template/image/';
		$this->load->view("admin/list_file_short_talk",$data);
		
	}
	public function view_file_short_talk($filename){
		$fn1 = "application/data_test/short_talk/500/$filename";
		$fn2 = "application/data_test/short_talk/750/$filename";
		$fn3 = "application/data_test/short_talk/900/$filename";
		$fn = "";
		if(is_file($fn1))
			$fn=$fn1;
		else if(is_file($fn2))
			$fn=$fn2;
		else if(is_file($fn3))
			$fn=$fn3;

		if (isset($_POST['content']))
		{
		    $content = stripslashes($_POST['content']);

		    $fp = fopen($fn,"w") or die ("Error opening file in write mode!");

		    fputs($fp,$content);

		    fclose($fp) or die ("Error closing file!");
		}
		$data['fn']=$fn;

		$this->load->view("admin/view_file_short_talk",$data);
	}

	public function list_file_incom()
	{
		$path="application/data_test/incomplete_sen/500/";
		$dir=opendir($path);
		while($entryName=readdir($dir)){
			$dirArray[]=$entryName;
		}
		closedir($dir);
		$indexCount=count($dirArray);
		for($i=0;$i<$indexCount;$i++){
			if($dirArray[$i]!="." && !is_dir($dirArray[$i])){
				$data['fileArray'][]=$dirArray[$i];
			}
		}

		$path1="application/data_test/incomplete_sen/750/";
		$dir1=opendir($path1);
		while($entryName1=readdir($dir1)){
			$dirArray1[]=$entryName1;
		}
		closedir($dir1);
		$indexCount1=count($dirArray1);
		for($i1=0;$i1<$indexCount1;$i1++){
			if($dirArray1[$i1]!="." && !is_dir($dirArray1[$i1])){
				$data['fileArray1'][]=$dirArray1[$i1];
			}
		}

		$path2="application/data_test/incomplete_sen/900/";
		$dir2=opendir($path2);
		while($entryName2=readdir($dir2)){
			$dirArray2[]=$entryName2;
		}
		closedir($dir2);
		$indexCount2=count($dirArray2);
		for($i2=0;$i2<$indexCount2;$i2++){
			if($dirArray2[$i2]!="." && !is_dir($dirArray2[$i2])){
				$data['fileArray2'][]=$dirArray2[$i2];
			}
		}

		$data['link_image']=base_url().'application/template/image/';
		$this->load->view("admin/list_file_incom",$data);
		
	}
	public function view_file_incom($filename){
		$fn1 = "application/data_test/incomplete_sen/500/$filename";
		$fn2 = "application/data_test/incomplete_sen/750/$filename";
		$fn3 = "application/data_test/incomplete_sen/900/$filename";
		$fn = "";
		if(is_file($fn1))
			$fn=$fn1;
		else if(is_file($fn2))
			$fn=$fn2;
		else if(is_file($fn3))
			$fn=$fn3;

		if (isset($_POST['content']))
		{
		    $content = stripslashes($_POST['content']);

		    $fp = fopen($fn,"w") or die ("Error opening file in write mode!");

		    fputs($fp,$content);

		    fclose($fp) or die ("Error closing file!");
		}
		$data['fn']=$fn;

		$this->load->view("admin/view_file_short_talk",$data);
	}

	public function list_file_text_com()
	{
		$path="application/data_test/text_complextion/500/";
		$dir=opendir($path);
		while($entryName=readdir($dir)){
			$dirArray[]=$entryName;
		}
		closedir($dir);
		$indexCount=count($dirArray);
		for($i=0;$i<$indexCount;$i++){
			if($dirArray[$i]!="." && !is_dir($dirArray[$i])){
				$data['fileArray'][]=$dirArray[$i];
			}
		}

		$path1="application/data_test/text_complextion/750/";
		$dir1=opendir($path1);
		while($entryName1=readdir($dir1)){
			$dirArray1[]=$entryName1;
		}
		closedir($dir1);
		$indexCount1=count($dirArray1);
		for($i1=0;$i1<$indexCount1;$i1++){
			if($dirArray1[$i1]!="." && !is_dir($dirArray1[$i1])){
				$data['fileArray1'][]=$dirArray1[$i1];
			}
		}

		$path2="application/data_test/text_complextion/900/";
		$dir2=opendir($path2);
		while($entryName2=readdir($dir2)){
			$dirArray2[]=$entryName2;
		}
		closedir($dir2);
		$indexCount2=count($dirArray2);
		for($i2=0;$i2<$indexCount2;$i2++){
			if($dirArray2[$i2]!="." && !is_dir($dirArray2[$i2])){
				$data['fileArray2'][]=$dirArray2[$i2];
			}
		}

		$data['link_image']=base_url().'application/template/image/';
		$this->load->view("admin/list_file_text_com",$data);
		
	}
	public function view_file_text_com($filename){
		$fn1 = "application/data_test/text_complextion/500/$filename";
		$fn2 = "application/data_test/text_complextion/750/$filename";
		$fn3 = "application/data_test/text_complextion/900/$filename";
		$fn = "";
		if(is_file($fn1))
			$fn=$fn1;
		else if(is_file($fn2))
			$fn=$fn2;
		else if(is_file($fn3))
			$fn=$fn3;

		if (isset($_POST['content']))
		{
		    $content = stripslashes($_POST['content']);

		    $fp = fopen($fn,"w") or die ("Error opening file in write mode!");

		    fputs($fp,$content);

		    fclose($fp) or die ("Error closing file!");
		}
		$data['fn']=$fn;

		$this->load->view("admin/view_file_short_talk",$data);
	}
	public function list_file_reading()
	{
		$path="application/data_test/reading_comprehen/500/";
		$dir=opendir($path);
		while($entryName=readdir($dir)){
			$dirArray[]=$entryName;
		}
		closedir($dir);
		$indexCount=count($dirArray);
		for($i=0;$i<$indexCount;$i++){
			if($dirArray[$i]!="." && !is_dir($dirArray[$i])){
				$data['fileArray'][]=$dirArray[$i];
			}
		}

		$path1="application/data_test/reading_comprehen/750/";
		$dir1=opendir($path1);
		while($entryName1=readdir($dir1)){
			$dirArray1[]=$entryName1;
		}
		closedir($dir1);
		$indexCount1=count($dirArray1);
		for($i1=0;$i1<$indexCount1;$i1++){
			if($dirArray1[$i1]!="." && !is_dir($dirArray1[$i1])){
				$data['fileArray1'][]=$dirArray1[$i1];
			}
		}

		$path2="application/data_test/reading_comprehen/900/";
		$dir2=opendir($path2);
		while($entryName2=readdir($dir2)){
			$dirArray2[]=$entryName2;
		}
		closedir($dir2);
		$indexCount2=count($dirArray2);
		for($i2=0;$i2<$indexCount2;$i2++){
			if($dirArray2[$i2]!="." && !is_dir($dirArray2[$i2])){
				$data['fileArray2'][]=$dirArray2[$i2];
			}
		}

		$data['link_image']=base_url().'application/template/image/';
		$this->load->view("admin/list_file_reading",$data);
		
	}
	public function view_file_reading($filename){
		$fn1 = "application/data_test/reading_comprehen/500/$filename";
		$fn2 = "application/data_test/reading_comprehen/750/$filename";
		$fn3 = "application/data_test/reading_comprehen/900/$filename";
		$fn = "";
		if(is_file($fn1))
			$fn=$fn1;
		else if(is_file($fn2))
			$fn=$fn2;
		else if(is_file($fn3))
			$fn=$fn3;

		if (isset($_POST['content']))
		{
		    $content = stripslashes($_POST['content']);

		    $fp = fopen($fn,"w") or die ("Error opening file in write mode!");

		    fputs($fp,$content);

		    fclose($fp) or die ("Error closing file!");
		}
		$data['fn']=$fn;

		$this->load->view("admin/view_file_short_talk",$data);
	}
	public function create_photo(){
		$this->load->view("admin/create_photo");
		
	}
	public function upload_file_photo(){
	
	$level=$this->input->post("level");
	
	/*$allowedExts = array("gif", "jpeg", "jpg", "png", "xml","mp3");
	$temp = explode(".", $_FILES["file"]["name"][$i]);
	$extension = end($temp);
	*/
	
	$file_ary = array();
    $file_count = count($_FILES["file"]['name']);
    $file_keys = array_keys($_FILES["file"]);

    for ($i=0; $i<$file_count; $i++) {
	
			$allowedExts = array("gif", "jpeg", "jpg", "png", "xml","mp3");
			$temp = explode(".", $_FILES["file"]["name"][$i]);
			$extension = end($temp);
			
			$upload_folder="";
			if(($_FILES["file"]["type"][$i] == "image/jpeg")
			|| ($_FILES["file"]["type"][$i] == "image/jpg")
			|| ($_FILES["file"]["type"][$i] == "image/pjpeg")
			|| ($_FILES["file"]["type"][$i] == "image/x-png"))
			{
				$upload_folder.="application/data_test/photo/picture/";
			}
			else if($_FILES["file"]["type"][$i] == "audio/mp3"){
				$upload_folder.="application/data_test/photo/audio/";
			}
			else if(($_FILES["file"]["type"][$i] == "text/xml"))
			{
				$upload_folder.="application/data_test/photo/$level/";
			}
			
            //$file_ary[$i][$key] = $file_post[$key][$i];
			if ((($_FILES["file"]["type"][$i] == "image/gif")
			|| ($_FILES["file"]["type"][$i] == "image/jpeg")
			|| ($_FILES["file"]["type"][$i] == "image/jpg")
			|| ($_FILES["file"]["type"][$i] == "image/pjpeg")
			|| ($_FILES["file"]["type"][$i] == "image/x-png")
			|| ($_FILES["file"]["type"][$i] == "text/xml")
			|| ($_FILES["file"]["type"][$i] == "audio/mp3")
			)
			&& in_array($extension, $allowedExts))
			  {
			  if ($_FILES["file"]["error"][$i] > 0)
				{
				echo "Return Code: " . $_FILES["file"]["error"][$i] . "<br>";
				}
			  else
				{
				echo "UPLOAD SUCCESS"."<br>";
				echo "Upload: " . $_FILES["file"]["name"][$i] . "<br>";
				echo "Type: " . $_FILES["file"]["type"][$i] . "<br>";
				echo "Size: " . ($_FILES["file"]["size"][$i] / 1024) . " kB<br>";
				echo "Temp file: " . $_FILES["file"]["tmp_name"][$i] . "<br>";

				if (file_exists("$upload_folder" . $_FILES["file"]["name"][$i]))
				  {
				  echo $_FILES["file"]["name"][$i] . " already exists. ";
				  }
				else
				  {
					  move_uploaded_file($_FILES["file"]["tmp_name"][$i], "$upload_folder" . $_FILES["file"]["name"][$i]);
					  
						  if($_FILES["file"]["type"][$i] == "text/xml")
						  {	
							$insert=$this->files_model->insert_file_photo("http://localhost/toeic4skill/application/data_test/photo/".$level.'/'.$_FILES["file"]["name"][$i],$level);
						  }
						
				  
				  echo "Stored in: " . "$upload_folder" . $_FILES["file"]["name"][$i];
				  }
				}
			  }
			else
			  {
			  echo "Invalid file";
			  }
			
			
        }
    }
    public function create_qr(){
		$this->load->view("admin/create_qr");
		
	}

	public function upload_file_qr(){
	
	$level=$this->input->post("level");
	
	/*$allowedExts = array("gif", "jpeg", "jpg", "png", "xml","mp3");
	$temp = explode(".", $_FILES["file"]["name"][$i]);
	$extension = end($temp);
	*/
	
	$file_ary = array();
    $file_count = count($_FILES["file"]['name']);
    $file_keys = array_keys($_FILES["file"]);

    for ($i=0; $i<$file_count; $i++) {
	
			$allowedExts = array("xml","mp3");
			$temp = explode(".", $_FILES["file"]["name"][$i]);

			$extension = end($temp);
			
			$upload_folder="";
			if($_FILES["file"]["type"][$i] == "audio/mp3"){
				$upload_folder.="application/data_test/qr/audio/";
			}
			else if(($_FILES["file"]["type"][$i] == "text/xml"))
			{
				$upload_folder.="application/data_test/qr/$level/";
			}
			
            //$file_ary[$i][$key] = $file_post[$key][$i];
			if ((($_FILES["file"]["type"][$i] == "text/xml")
			|| ($_FILES["file"]["type"][$i] == "audio/mp3"))
			&& in_array($extension, $allowedExts))
			  {
			  if ($_FILES["file"]["error"][$i] > 0)
				{
				echo "Return Code: " . $_FILES["file"]["error"][$i] . "<br>";
				}
			  else
				{
				echo "UPLOAD SUCCESS"."<br>";
				echo "Upload: " . $_FILES["file"]["name"][$i] . "<br>";
				echo "Type: " . $_FILES["file"]["type"][$i] . "<br>";
				echo "Size: " . ($_FILES["file"]["size"][$i] / 1024) . " kB<br>";
				echo "Temp file: " . $_FILES["file"]["tmp_name"][$i] . "<br>";

				if (file_exists("$upload_folder" . $_FILES["file"]["name"][$i]))
				  {
				  echo $_FILES["file"]["name"][$i] . " already exists. ";
				  }
				else
				  {
					  move_uploaded_file($_FILES["file"]["tmp_name"][$i], "$upload_folder" . $_FILES["file"]["name"][$i]);
					  
						  if($_FILES["file"]["type"][$i] == "text/xml")
						  {	
							$insert=$this->files_model->insert_file_qr("http://localhost/toeic4skill/application/data_test/qr/".$level.'/'.$_FILES["file"]["name"][$i],$level);
						  }
						
				  
				  echo "Stored in: " . "$upload_folder" . $_FILES["file"]["name"][$i];
				  }
				}
			  }
			else
			  {
			  echo "Invalid file";
			  }
			
			
        }
    }

    public function create_short_con(){
		$this->load->view("admin/create_short_con");
		
	}

	public function upload_file_short_con(){
	
	$level=$this->input->post("level");
	
	/*$allowedExts = array("gif", "jpeg", "jpg", "png", "xml","mp3");
	$temp = explode(".", $_FILES["file"]["name"][$i]);
	$extension = end($temp);
	*/
	
	$file_ary = array();
    $file_count = count($_FILES["file"]['name']);
    $file_keys = array_keys($_FILES["file"]);

    for ($i=0; $i<$file_count; $i++) {
	
			$allowedExts = array("xml","mp3");
			$temp = explode(".", $_FILES["file"]["name"][$i]);

			$extension = end($temp);
			
			$upload_folder="";
			if($_FILES["file"]["type"][$i] == "audio/mp3"){
				$upload_folder.="application/data_test/short_con/audio/";
			}
			else if(($_FILES["file"]["type"][$i] == "text/xml"))
			{
				$upload_folder.="application/data_test/short_con/$level/";
			}
			
            //$file_ary[$i][$key] = $file_post[$key][$i];
			if ((($_FILES["file"]["type"][$i] == "text/xml")
			|| ($_FILES["file"]["type"][$i] == "audio/mp3"))
			&& in_array($extension, $allowedExts))
			  {
			  if ($_FILES["file"]["error"][$i] > 0)
				{
				echo "Return Code: " . $_FILES["file"]["error"][$i] . "<br>";
				}
			  else
				{
				echo "UPLOAD SUCCESS"."<br>";
				echo "Upload: " . $_FILES["file"]["name"][$i] . "<br>";
				echo "Type: " . $_FILES["file"]["type"][$i] . "<br>";
				echo "Size: " . ($_FILES["file"]["size"][$i] / 1024) . " kB<br>";
				echo "Temp file: " . $_FILES["file"]["tmp_name"][$i] . "<br>";

				if (file_exists("$upload_folder" . $_FILES["file"]["name"][$i]))
				  {
				  echo $_FILES["file"]["name"][$i] . " already exists. ";
				  }
				else
				  {
					  move_uploaded_file($_FILES["file"]["tmp_name"][$i], "$upload_folder" . $_FILES["file"]["name"][$i]);
					  
						  if($_FILES["file"]["type"][$i] == "text/xml")
						  {	
							$insert=$this->files_model->insert_file_short_con("http://localhost/toeic4skill/application/data_test/short_con/".$level.'/'.$_FILES["file"]["name"][$i],$level);
						  }
						
				  
				  echo "Stored in: " . "$upload_folder" . $_FILES["file"]["name"][$i];
				  }
				}
			  }
			else
			  {
			  echo "Invalid file";
			  }
			
			
        }
    }

    public function create_short_talk(){
		$this->load->view("admin/create_short_talk");
		
	}

	public function upload_file_short_talk(){
	
	$level=$this->input->post("level");
	
	/*$allowedExts = array("gif", "jpeg", "jpg", "png", "xml","mp3");
	$temp = explode(".", $_FILES["file"]["name"][$i]);
	$extension = end($temp);
	*/
	
	$file_ary = array();
    $file_count = count($_FILES["file"]['name']);
    $file_keys = array_keys($_FILES["file"]);

    for ($i=0; $i<$file_count; $i++) {
	
			$allowedExts = array("xml","mp3");
			$temp = explode(".", $_FILES["file"]["name"][$i]);

			$extension = end($temp);
			
			$upload_folder="";
			if($_FILES["file"]["type"][$i] == "audio/mp3"){
				$upload_folder.="application/data_test/short_talk/audio/";
			}
			else if(($_FILES["file"]["type"][$i] == "text/xml"))
			{
				$upload_folder.="application/data_test/short_talk/$level/";
			}
			
            //$file_ary[$i][$key] = $file_post[$key][$i];
			if ((($_FILES["file"]["type"][$i] == "text/xml")
			|| ($_FILES["file"]["type"][$i] == "audio/mp3"))
			&& in_array($extension, $allowedExts))
			  {
			  if ($_FILES["file"]["error"][$i] > 0)
				{
				echo "Return Code: " . $_FILES["file"]["error"][$i] . "<br>";
				}
			  else
				{
				echo "UPLOAD SUCCESS"."<br>";
				echo "Upload: " . $_FILES["file"]["name"][$i] . "<br>";
				echo "Type: " . $_FILES["file"]["type"][$i] . "<br>";
				echo "Size: " . ($_FILES["file"]["size"][$i] / 1024) . " kB<br>";
				echo "Temp file: " . $_FILES["file"]["tmp_name"][$i] . "<br>";

				if (file_exists("$upload_folder" . $_FILES["file"]["name"][$i]))
				  {
				  echo $_FILES["file"]["name"][$i] . " already exists. ";
				  }
				else
				  {
					  move_uploaded_file($_FILES["file"]["tmp_name"][$i], "$upload_folder" . $_FILES["file"]["name"][$i]);
					  
						  if($_FILES["file"]["type"][$i] == "text/xml")
						  {	
							$insert=$this->files_model->insert_file_short_talk("http://localhost/toeic4skill/application/data_test/short_talk/".$level.'/'.$_FILES["file"]["name"][$i],$level);
						  }
						
				  
				  echo "Stored in: " . "$upload_folder" . $_FILES["file"]["name"][$i];
				  }
				}
			  }
			else
			  {
			  echo "Invalid file";
			  }
			
			
        }
    }

    public function create_incom(){
		$this->load->view("admin/create_incom");
		
	}

	public function upload_file_incom(){
	
	$level=$this->input->post("level");
	
	/*$allowedExts = array("gif", "jpeg", "jpg", "png", "xml","mp3");
	$temp = explode(".", $_FILES["file"]["name"][$i]);
	$extension = end($temp);
	*/
	
	$file_ary = array();
    $file_count = count($_FILES["file"]['name']);
    $file_keys = array_keys($_FILES["file"]);

    for ($i=0; $i<$file_count; $i++) {
	
			$allowedExts = array("xml");
			$temp = explode(".", $_FILES["file"]["name"][$i]);

			$extension = end($temp);
			
			$upload_folder="";
			if(($_FILES["file"]["type"][$i] == "text/xml"))
			{
				$upload_folder.="application/data_test/incomplete_sen/$level/";
			}
			
            //$file_ary[$i][$key] = $file_post[$key][$i];
			if ((($_FILES["file"]["type"][$i] == "text/xml"))
			&& in_array($extension, $allowedExts))
			  {
			  if ($_FILES["file"]["error"][$i] > 0)
				{
				echo "Return Code: " . $_FILES["file"]["error"][$i] . "<br>";
				}
			  else
				{
				echo "UPLOAD SUCCESS"."<br>";
				echo "Upload: " . $_FILES["file"]["name"][$i] . "<br>";
				echo "Type: " . $_FILES["file"]["type"][$i] . "<br>";
				echo "Size: " . ($_FILES["file"]["size"][$i] / 1024) . " kB<br>";
				echo "Temp file: " . $_FILES["file"]["tmp_name"][$i] . "<br>";

				if (file_exists("$upload_folder" . $_FILES["file"]["name"][$i]))
				  {
				  echo $_FILES["file"]["name"][$i] . " already exists. ";
				  }
				else
				  {
					  move_uploaded_file($_FILES["file"]["tmp_name"][$i], "$upload_folder" . $_FILES["file"]["name"][$i]);
					  
						  if($_FILES["file"]["type"][$i] == "text/xml")
						  {	
							$insert=$this->files_model->insert_file_incom("http://localhost/toeic4skill/application/data_test/incomplete_sen/".$level.'/'.$_FILES["file"]["name"][$i],$level);
						  }
						
				  
				  echo "Stored in: " . "$upload_folder" . $_FILES["file"]["name"][$i];
				  }
				}
			  }
			else
			  {
			  echo "Invalid file";
			  }
			
			
        }
    }

    public function create_text_com(){
		$this->load->view("admin/create_text_com");
		
	}

	public function upload_file_text_com(){
	
	$level=$this->input->post("level");
	
	/*$allowedExts = array("gif", "jpeg", "jpg", "png", "xml","mp3");
	$temp = explode(".", $_FILES["file"]["name"][$i]);
	$extension = end($temp);
	*/
	
	$file_ary = array();
    $file_count = count($_FILES["file"]['name']);
    $file_keys = array_keys($_FILES["file"]);

    for ($i=0; $i<$file_count; $i++) {
	
			$allowedExts = array("xml");
			$temp = explode(".", $_FILES["file"]["name"][$i]);

			$extension = end($temp);
			
			$upload_folder="";
			if(($_FILES["file"]["type"][$i] == "text/xml"))
			{
				$upload_folder.="application/data_test/text_complextion/$level/";
			}
			
            //$file_ary[$i][$key] = $file_post[$key][$i];
			if ((($_FILES["file"]["type"][$i] == "text/xml"))
			&& in_array($extension, $allowedExts))
			  {
			  if ($_FILES["file"]["error"][$i] > 0)
				{
				echo "Return Code: " . $_FILES["file"]["error"][$i] . "<br>";
				}
			  else
				{
				echo "UPLOAD SUCCESS"."<br>";
				echo "Upload: " . $_FILES["file"]["name"][$i] . "<br>";
				echo "Type: " . $_FILES["file"]["type"][$i] . "<br>";
				echo "Size: " . ($_FILES["file"]["size"][$i] / 1024) . " kB<br>";
				echo "Temp file: " . $_FILES["file"]["tmp_name"][$i] . "<br>";

				if (file_exists("$upload_folder" . $_FILES["file"]["name"][$i]))
				  {
				  echo $_FILES["file"]["name"][$i] . " already exists. ";
				  }
				else
				  {
					  move_uploaded_file($_FILES["file"]["tmp_name"][$i], "$upload_folder" . $_FILES["file"]["name"][$i]);
					  
						  if($_FILES["file"]["type"][$i] == "text/xml")
						  {	
							$insert=$this->files_model->insert_file_text_com("http://localhost/toeic4skill/application/data_test/text_complextion/".$level.'/'.$_FILES["file"]["name"][$i],$level);
						  }
						
				  
				  echo "Stored in: " . "$upload_folder" . $_FILES["file"]["name"][$i];
				  }
				}
			  }
			else
			  {
			  echo "Invalid file";
			  }
			
			
        }
    }

    public function create_reading_compre(){
		$this->load->view("admin/create_reading_compre");
		
	}

	public function upload_file_reading_compre(){
	
	$level=$this->input->post("level");
	
	/*$allowedExts = array("gif", "jpeg", "jpg", "png", "xml","mp3");
	$temp = explode(".", $_FILES["file"]["name"][$i]);
	$extension = end($temp);
	*/
	
	$file_ary = array();
    $file_count = count($_FILES["file"]['name']);
    $file_keys = array_keys($_FILES["file"]);

    for ($i=0; $i<$file_count; $i++) {
	
			$allowedExts = array("xml");
			$temp = explode(".", $_FILES["file"]["name"][$i]);

			$extension = end($temp);
			
			$upload_folder="";
			if(($_FILES["file"]["type"][$i] == "text/xml"))
			{
				$upload_folder.="application/data_test/reading_comprehen/$level/";
			}
			
            //$file_ary[$i][$key] = $file_post[$key][$i];
			if ((($_FILES["file"]["type"][$i] == "text/xml"))
			&& in_array($extension, $allowedExts))
			  {
			  if ($_FILES["file"]["error"][$i] > 0)
				{
				echo "Return Code: " . $_FILES["file"]["error"][$i] . "<br>";
				}
			  else
				{
				echo "UPLOAD SUCCESS"."<br>";
				echo "Upload: " . $_FILES["file"]["name"][$i] . "<br>";
				echo "Type: " . $_FILES["file"]["type"][$i] . "<br>";
				echo "Size: " . ($_FILES["file"]["size"][$i] / 1024) . " kB<br>";
				echo "Temp file: " . $_FILES["file"]["tmp_name"][$i] . "<br>";

				if (file_exists("$upload_folder" . $_FILES["file"]["name"][$i]))
				  {
				  echo $_FILES["file"]["name"][$i] . " already exists. ";
				  }
				else
				  {
					  move_uploaded_file($_FILES["file"]["tmp_name"][$i], "$upload_folder" . $_FILES["file"]["name"][$i]);
					  
						  if($_FILES["file"]["type"][$i] == "text/xml")
						  {	
							$insert=$this->files_model->insert_file_reading_compre("http://localhost/toeic4skill/application/data_test/reading_comprehen/".$level.'/'.$_FILES["file"]["name"][$i],$level);
						  }
						
				  
				  echo "Stored in: " . "$upload_folder" . $_FILES["file"]["name"][$i];
				  }
				}
			  }
			else
			  {
			  echo "Invalid file";
			  }
			
			
        }
    }


}
?>