<?php
class Madmin extends CI_Model {
 
   public function get_score(){
      $this->db->select("id,user,score,date");
      $this->db->order_by("score DESC");
      $query=$this->db->get("score");
      return $query->result_array();
   }

   public function add_xml_to_mysql($link){
      $data=array('pathxml'=>$link,'level'=>'500');
      $this->db->insert('photo',$data);
      return true;
   }
    public function get_link_video($id){
      $this->db->select("id,link,title");
      $query=$this->db->get("video");
      return $query->result_array();
   }
   public function get_score_id($id){
      $this->db->select("id,user,score,date");
      $this->db->where("id",$id);
      $query=$this->db->get("score");
      return $query->result_array();
   }
    public function delete_score($id){
   
      $this->db->where("id",$id);
      $this->db->delete('score');
      
      return true;
   }
   public function delete_link_video($id){
   
      $this->db->where("id",$id);
      $this->db->delete('video');
      
      return true;
   }
   
   public function delete_listening($id){
   
      $this->db->where("id",$id);
      $this->db->delete('sharing_listening');
      
      return true;
   }
    public function delete_writing($id){
   
      $this->db->where("id",$id);
      $this->db->delete('sharing_writing');
      
      return true;
   }
   public function delete_reading($id){
   
      $this->db->where("id",$id);
      $this->db->delete('sharing_reading');
      
      return true;
   }
   public function update_score($id,$user,$score,$date){
      

      //$data=array('user'=>$user,'score'=>$score,'date'=>$date);
      
      //$this->db->where("id",$id);
      //$this->db->update('score',$data);
      $this->db->query("UPDATE score SET user='$user',score=$score,date='$date' WHERE id=$id");
      return true;
   }
   public function update_post(){
      $id=$this->input->post("id");
      $name=$this->input->post("name");
      $level=$this->input->post("level");
     // $skill=$this->input->post("skill");
      $content=$this->input->post("thread");
      $data=array(
                  'name'=>$name,
                  'level'=>$level,
                  'content'=>$content);
      $this->db->where("id",$id);
      $this->db->update('sharing_listening',$data);
      
      return true;
   }
    public function update_link_video(){
      $id=$this->input->post("id");
      $title=$this->input->post("title");
      $link=$this->input->post("link");
      $data=array(
                  'title'=>$title,
                  'link'=>$link
                  );
      $this->db->where("id",$id);
      $this->db->update('video',$data);
      
      return true;
   }
    public function update_post_reading(){
      $id=$this->input->post("id");
      $name=$this->input->post("name");
      $level=$this->input->post("level");
      $content=$this->input->post("thread");
      $data=array(
                  'name'=>$name,
                  'level'=>$level,
                  'content'=>$content);
      $this->db->where("id",$id);
      $this->db->update('sharing_reading',$data);
      
      return true;
   }
   
    public function update_post_writing(){
      $id=$this->input->post("id");
      $name=$this->input->post("name");
      $type=$this->input->post("type");
      $content=$this->input->post("thread");
      $data=array(
                  'name'=>$name,
                  'type'=>$type,
                  'content'=>$content);
      $this->db->where("id",$id);
      $this->db->update('sharing_writing',$data);
      
      return true;
   }
   public function insert_post(){
      $name=$this->input->post("name");
      $skill=$this->input->post("skill");
      $content=$this->input->post("thread");
      $level=$this->input->post("level");
   
      if($level=="picture" || $level=="phat_am")
         {
            $type=1;
         }
      if($level=="essay" || $level=="dung_tu")
         {
            $type=2;
         }
     
      if($skill=="sharing_writing" || $skill=="sharing_speaking"){
         $data=array('name'=>$name,'type'=>$type,'content'=>$content);
      }
      else{
          $data=array('name'=>$name,'level'=>$level,'content'=>$content);
      }
      $this->db->insert($skill,$data);
      return true;
   }

   public function get_post_listening(){
      $this->db->select("id,name,level");
      $this->db->order_by("level","DESC");
      $query=$this->db->get("sharing_listening");
      return $query->result_array();
   }
   public function get_post_listen($id){
      $this->db->select("id,name,content,level");
      $this->db->where("id",$id);
      $query=$this->db->get("sharing_listening");
      return $query->result_array();
   }
   public function get_post_write($id){
      $this->db->select("id,name,content,type");
      $this->db->where("id",$id);
      $query=$this->db->get("sharing_writing");
      return $query->result_array();
   }
    public function get_post_read($id){
      $this->db->select("id,name,content,level");
      $this->db->where("id",$id);
      $query=$this->db->get("sharing_reading");
      return $query->result_array();
   }
   

   public function get_post_reading(){
      $this->db->select("id,name,level");
      $this->db->order_by("level","DESC");
      $query=$this->db->get("sharing_reading");
      return $query->result_array();
   }
  /* public function get_post_speaking(){
      $this->db->select("id,name,level");
      $this->db->order_by("level","DESC");
      $query=$this->db->get("sharing_listening");
      return $query->result_array();
   }
   */
   public function get_post_writing(){
      $this->db->select("id,name");
      $this->db->order_by("id","DESC");
      $query=$this->db->get("sharing_writing");
      return $query->result_array();
   }
   
   public function get_video(){
      $this->db->select("id,link,title");
      $this->db->order_by("id","ASC");
      $query=$this->db->get("video");
      return $query->result_array();
   }
}
?>