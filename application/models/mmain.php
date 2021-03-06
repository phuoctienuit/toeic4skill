<?php
class Mmain extends CI_Model{
	public function __construct(){
        parent::__construct();
    }
    function ghi_diem($user, $score, $causai, $ma_de, $time)
    {
    	$sql = "INSERT INTO score (user, score, time, MaDe, CauSai) VALUES ('$user',$score,$time,$ma_de,'$causai')";
    	$this->db->query($sql);
    }
    function get_ma_de($id)
    {
        $this->db->select("MaDe");
        $this->db->where("id",$id);
        $query=$this->db->get("score");
        return $query->first_row()->MaDe;
    }
    function get_score($id)
    {
        $this->db->select("*");
        $this->db->where("id",$id);
        $query=$this->db->get("score");
        return $query->first_row()->score;
    }
    function get_causai($id)
    {
        $this->db->select("*");
        $this->db->where("id",$id);
        $query=$this->db->get("score");
        $temp = $query->first_row()->CauSai;
        $arr = explode("|", $temp);
        $res = array();
        foreach($arr as $item)
        {
        	$t = explode(":",$item);
        	if(isset($t[1]))
        		$res[$t[0]] = $t[1];
        }
        return $res;
    }
    function getHistory($user)
    {
        $this->db->select("*");
        $this->db->where("user",$user);
        $query=$this->db->get("score");
        return $query->result_array();
    }
        function get_all_paragraph()
        {
            $this->db->select("id,name");
            $query=$this->db->get("paragraph");
            return $query->result_array();
        }
        function get_paragraph($id)
        {
            $this->db->select("id,name");
            $query=$this->db->get("paragraph");
            $this->db->where("id",$id);
            return $query->first_row();
        }
        function get_paragraph_content($id)
        {
            $this->db->select("content");
            $this->db->where("id",$id);
            $query=$this->db->get("paragraph");
            $res = "";
            foreach($query->result() as $row)
            {
                $res = $row->content;
            }
            return $res;
        }
        function get_paragraph_video($id)
        {
            $this->db->select("videoid");
            $this->db->where("id",$id);
            $query=$this->db->get("paragraph");
            $res = "";
            foreach($query->result() as $row)
            {
                $res = $row->videoid;
            }
            return $res;
        }
        function get_paragraph_missing($id)
        {
            $this->db->select("*");
            $this->db->where("paragraphid",$id);
            $this->db->order_by("stt");
            $query=$this->db->get("missing");
            return $query->result_array();
        }
	function get_sharing_ex($id){
		$this->db->select("content");
		$this->db->where("id",$id);
		//$this->db->order_by("id","ASC");
		$query=$this->db->get("sharing_listening");
		return $query->result_array();
	}
	function get_sharing_writing($id){
		$this->db->select("content");
		$this->db->where("id",$id);
		//$this->db->order_by("id","ASC");
		$query=$this->db->get("sharing_writing");
		return $query->result_array();
	}
	function get_sharing_speaking($id){
		$this->db->select("content");
		$this->db->where("id",$id);
		//$this->db->order_by("id","ASC");
		$query=$this->db->get("sharing_speaking");
		return $query->result_array();
	}
	function get_id_name_sharing_ex($level,$start,$limit){
		$this->db->select("id,name");
		$this->db->where("level",$level);
		$this->db->order_by("id","ASC");
		$query=$this->db->get("sharing_listening",$limit,$start);
		return $query->result_array();
	}
	function get_id_name_sharing_writing($type,$start,$limit){
		$this->db->select("id,name");
		$this->db->where("type",$type);
		$this->db->order_by("id","ASC");
		$query=$this->db->get("sharing_writing",$limit,$start);
		return $query->result_array();
	}
	function get_id_name_sharing_speaking($type,$start,$limit){
		$this->db->select("id,name");
		$this->db->where("type",$type);
		$this->db->order_by("id","ASC");
		$query=$this->db->get("sharing_speaking",$limit,$start);
		return $query->result_array();
	}

	 function get_id_name_sharing_reading($level, $start, $limit){
		$this->db->select("id,name");
		$this->db->where("level",$level);
		$this->db->order_by("id","ASC");
		$query=$this->db->get("sharing_reading", $limit, $start);
		return $query->result_array();
	}
	function get_sharing_reading($id){
		$this->db->select("content");
		$this->db->where("id",$id);
		//$this->db->order_by("id","ASC");
		$query=$this->db->get("sharing_reading");
		return $query->result_array();
	}
	function count_all_sharing_reading($level){
		$this->db->where("level",$level);
		$this->db->from('sharing_reading');
		return $this->db->count_all_results();
	}
	function count_all_sharing_listening($level){
		$this->db->where("level",$level);
		$this->db->from('sharing_listening');
		return $this->db->count_all_results();	
	}
	function count_all_sharing_writing($type){
		$this->db->where("type",$type);
		$this->db->from('sharing_writing');
		return $this->db->count_all_results();	
	}
	function count_all_sharing_speaking($type){
		$this->db->where("type",$type);
		$this->db->from('sharing_speaking');
		return $this->db->count_all_results();	
	}


	function count_all_video(){
		$this->db->from('video');
		return $this->db->count_all_results();	
	}
	public function check_login($info){
        $username=$info['username'];
    	$password=$info['password'];
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('users');
    	if($query->num_rows()==1)
            return true;
    	return false;
    }
    public function signup($info)
    {
    	$fullname=$info['fullname'];
    	$username=$info['username'];
    	$password=$info['password'];
    	$email=$info['email'];
    	$sql = "INSERT INTO  users (username, password, fullname, email) VALUES ('$username', '$password', '$fullname', '$email')";
    	$this->db->query($sql);
    	echo $sql;
    	echo "ok";
    }
     function get_id_name_book($level, $start, $limit){
		$this->db->select("id,name,picture");
		$this->db->where("level",$level);
		$this->db->order_by("id","ASC");
		$query=$this->db->get("book",$limit, $start);
		return $query->result_array();
	}
	function count_all_book($level){
		$this->db->where("level",$level);
		$this->db->from('book');
		return $this->db->count_all_results();
	}
	function get_book_content($id){
		$this->db->select("content");
		$this->db->where("id",$id);
		//$this->db->order_by("id","ASC");
		$query=$this->db->get("book");
		return $query->result_array();
	}
	function get_id_name_incom($level){
		$this->db->select("id,pathxml");
		$this->db->where("level",$level);
		$this->db->order_by("id","ASC");
		$query=$this->db->get("incomplete_sen");
		return $query->result_array();
	}
	function get_incom_content($id){
		$this->db->select("pathxml");
		$this->db->where("id",$id);
		//$this->db->order_by("id","ASC");
		$query=$this->db->get("incomplete_sen");
		return $query->row()->pathxml;
	}
	function get_photo_content($id){
		$this->db->select('pathxml');
		$this->db->where("id",$id);
		$query=$this->db->get("photo");
		return $query->row()->pathxml;

	}
	
	function get_qr_content($id){
		$this->db->select('pathxml');
		$this->db->where("id",$id);
		$query=$this->db->get("qr");
		return $query->row()->pathxml;

	}
	function get_id_name_text_complextion($level){
		$this->db->select("id,pathxml");
		$this->db->where("level",$level);
		$this->db->order_by("id","ASC");
		$query=$this->db->get("text_complextion");
		return $query->result_array();
	}
	function get_text_complextion_content($id){
		$this->db->select("pathxml");
		$this->db->where("id",$id);
		//$this->db->order_by("id","ASC");
		$query=$this->db->get("text_complextion");
		return $query->row()->pathxml;
	}
	function get_id_name_reading_comprehen($level){
		$this->db->select("id,pathxml");
		$this->db->where("level",$level);
		$this->db->order_by("id","ASC");
		$query=$this->db->get("reading_comprehen");
		return $query->result_array();
	}
	function get_reading_comprehen_content($id){
		$this->db->select("pathxml");
		$this->db->where("id",$id);
		//$this->db->order_by("id","ASC");
		$query=$this->db->get("reading_comprehen");
		return $query->row()->pathxml;
	}

	function get_id_name_photo($level){
		$this->db->select("id,pathxml");
		$this->db->where("level",$level);
		$this->db->order_by("id","ASC");
		$query=$this->db->get("photo");
		return $query->result_array();
	}
	function get_photo_pathxml($id){
		$this->db->select("pathxml");
		$this->db->where("id",$id);
		//$this->db->order_by("id","ASC");
		$query=$this->db->get("photo");
		return $query->row()->pathxml;
	}
	
	function get_id_name_qr($level){
		$this->db->select("id,pathxml");
		$this->db->where("level",$level);
		$this->db->order_by("id","ASC");
		$query=$this->db->get("qr");
		return $query->result_array();
	}
	function get_qr_pathxml($id){
		$this->db->select("pathxml");
		$this->db->where("id",$id);
		//$this->db->order_by("id","ASC");
		$query=$this->db->get("qr");
		return $query->row()->pathxml;
	}

	function get_id_name_short_con($level){
		$this->db->select("id,pathxml");
		$this->db->where("level",$level);
		$this->db->order_by("id","ASC");
		$query=$this->db->get("short_con");
		return $query->result_array();
	}
	
	function get_short_con_pathxml($id){
		$this->db->select("pathxml");
		$this->db->where("id",$id);
		//$this->db->order_by("id","ASC");
		$query=$this->db->get("short_con");
		return $query->row()->pathxml;
	}
	
	function get_id_name_short_talk($level){
		$this->db->select("id,pathxml");
		$this->db->where("level",$level);
		$this->db->order_by("id","ASC");
		$query=$this->db->get("short_talk");
		return $query->result_array();
	}
	function get_short_talk_pathxml($id){
		$this->db->select("pathxml");
		$this->db->where("id",$id);
		//$this->db->order_by("id","ASC");
		$query=$this->db->get("short_talk");
		return $query->row()->pathxml;
	}
	
	function get_data_w_sentence(){
		$this->db->select("picture,hint,key");
		$query=$this->db->get("w_sentence");
		return $query->result_array();

	}
	function count_all_w_sentence($type){
		$this->db->where("type",$type);
		$this->db->from('w_sentence');
		return $this->db->count_all_results();
	}
	function count_all_w_response(){

		$this->db->from('w_response');
		return $this->db->count_all_results();
	}
	
	function get_data_w_response(){
		$this->db->select("content,key");
		$query=$this->db->get("w_response");
		return $query->result_array();

	}
	
	function get_data_video(){
		$this->db->select("link,title");
		$query=$this->db->get("video");
		return $query->result_array();

	}
	function get_id_w_sentence(){
		$this->db->select("id");
		$this->db->order_by("id","ASC");
		$query=$this->db->get("w_sentence");
		return $query->result_array();
	}
	function get_id_w_essay(){
		$this->db->select("id");
		$this->db->order_by("id","ASC");
		$query=$this->db->get("w_essay");
		return $query->result_array();
	}

	function get_w_sentence_pathxml($id){
		$this->db->select("pathxml");
		$this->db->where("id",$id);
		//$this->db->order_by("id","ASC");
		$query=$this->db->get("w_sentence");
		return $query->row()->pathxml;

	}
	function get_w_essay_pathxml($id){
		$this->db->select("pathxml");
		$this->db->where("id",$id);
		//$this->db->order_by("id","ASC");
		$query=$this->db->get("w_essay");
		return $query->row()->pathxml;

	}
	function get_id_name_fulltest(){
		$this->db->select("id");
		$this->db->order_by("id","ASC");
		$query=$this->db->get("fulltest");
		return $query->result_array();
	}
	function get_fulltest_pathxml($id){
		$this->db->select("path");
		$this->db->where("id",$id);
		$query=$this->db->get("fulltest");
		return $query->row()->path;

	}
	function get_id_name_minitest(){
		$this->db->select("id");
		$this->db->order_by("id","ASC");
		$query=$this->db->get("minitest");
		return $query->result_array();
	}
	function get_minitest_pathxml($id){
		$this->db->select("path");
		$this->db->where("id",$id);
		$query=$this->db->get("minitest");
		return $query->row()->path;

	}
	function topscore(){
		$this->db->select("*");
		$this->db->order_by("score","DESC");
		$this->db->limit("3","0");
		$query=$this->db->get("score");
		return $query->result_array();
	}
	function rank($username, $score){
		$sql = "INSERT INTO  score (user, score) VALUES ('$username', $score)";
		echo "INSERT INTO  score (user, score) VALUES ('$username', $score)";
    	$this->db->query($sql);
	}
	function get_id_name_readaloud(){
		$this->db->select("id");
		$query=$this->db->get("read_aloud");
		return $query->result_array();
	}
	function get_readaloud_content($id){
		$this->db->select("content, path_model");
		$this->db->where("id",$id);
		$query=$this->db->get("read_aloud");
		return $query->result_array();
	}
	function get_id_name_descri_pic(){
		$this->db->select("id");
		$query=$this->db->get("descri_pic");
		return $query->result_array();
	}
	function get_descri_pic_content($id){
		$this->db->select("pic,ans_model, path_model");
		$this->db->where("id",$id);
		$query=$this->db->get("descri_pic");
		return $query->result_array();
	}
}
?>