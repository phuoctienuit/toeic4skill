<?php
class Files_Model extends CI_Model {
 
   public function insert_file_photo($pathxml, $level)
   {
      $data = array(
         'pathxml' 		=> $pathxml,
		   'level' 		=> $level,
		 
      );
      $this->db->insert('photo', $data);
      return $this->db->insert_id();
   }
   public function insert_file_qr($pathxml, $level)
   {
      $data = array(
         'pathxml'      => $pathxml,
         'level'     => $level,
       
      );
      $this->db->insert('qr', $data);
      return $this->db->insert_id();
   }
   public function insert_file_short_con($pathxml, $level)
   {
      $data = array(
         'pathxml'      => $pathxml,
         'level'     => $level,
       
      );
      $this->db->insert('short_con', $data);
      return $this->db->insert_id();
   }
   public function insert_file_short_talk($pathxml, $level)
   {
      $data = array(
         'pathxml'      => $pathxml,
         'level'     => $level,
       
      );
      $this->db->insert('short_talk', $data);
      return $this->db->insert_id();
   }
    public function insert_file_incom($pathxml, $level)
   {
      $data = array(
         'pathxml'      => $pathxml,
         'level'     => $level,
       
      );
      $this->db->insert('incomplete_sen', $data);
      return $this->db->insert_id();
   }
    public function insert_file_text_com($pathxml, $level)
   {
      $data = array(
         'pathxml'      => $pathxml,
         'level'     => $level,
       
      );
      $this->db->insert('text_complextion', $data);
      return $this->db->insert_id();
   }
   public function insert_file_reading_compre($pathxml, $level)
   {
      $data = array(
         'pathxml'      => $pathxml,
         'level'     => $level,
       
      );
      $this->db->insert('reading_comprehen', $data);
      return $this->db->insert_id();
   }

}
?>