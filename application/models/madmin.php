<?php
class Madmin extends CI_Model {
 
   public function get_score(){
      $this->db->select("user,score,date");
      $this->db->order_by("score DESC");
      $query=$this->db->get("score");
      return $query->result_array();
   }

public function get_post(){
      $this->db->select("id,name,level");
      $this->db->order_by("level","DESC");
      $query=$this->db->get("sharing_listening");
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