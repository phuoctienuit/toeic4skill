<?php
class Madmin extends CI_Model {
 
   public function get_score(){
      $this->db->select("id,user,score,date");
      $this->db->order_by("score DESC");
      $query=$this->db->get("score");
      return $query->result_array();
   }
   public function get_score_id($id){
      $this->db->select("id,user,score,date");
      $this->db->where("id",$id);
      $query=$this->db->get("score");
      return $query->result_array();
   }
   
   public function update_score(){
      $id=$this->input->post("id");
      $user=$this->input->post("user");
      $score=$this->input->post("score");
      $date=$this->input->post("date");

      $data=array('user'=>$user,'score'=>$score,'date'=>$date);
      
      $this->db->where("id",$id);
      $this->db->update('score',$data);
      return true;
   }
   public function update_post(){
      $id=$this->input->post("id");
      $content=$this->input->post("thread");
      $query="update sharing_listening set content=$content where id=$id";
      $this->db->query($query);
      /*$id=$this->input->post("id");
      $name=$this->input->post("name");
      $level=$this->input->post("level");
     // $skill=$this->input->post("skill");
      $content=$this->input->post("thread");

      $data=array(
                  'name'=>'1',
                  'level'=>'1',
                  'content'=>'1');
      $this->db->where("id",$id);
      $this->db->update('sharing_listening',$data);
      */
      return true;
   }
   public function insert_post(){
      $name=$this->input->post("name");
      $level=$this->input->post("level");
      $skill=$this->input->post("skill");
      $content=$this->input->post("thread");
      if($skill=="sharing_writing"){
         $data=array('name'=>$name,'type'=>'1','content'=>$content);
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