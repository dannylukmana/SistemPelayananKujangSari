<?php
class M_SistemPelayanan extends CI_Model{
    public function Minsert($table, $data)
    {
      $insert = $this->db->insert($table, $data);
      if ($insert) {
        return TRUE;
      } else {
        return FALSE;
      }
    }
  
    public function get_data($table) {
      return $this->db->get($table);
    }
  
    public function delete_data($data, $key, $table){
      $this->db->where($key,$data);
      $this->db->delete($table);
    }
  
    public function get_query($where, $table) {
      return $this->db->get_where($table,$where);
    }
  
    public function update_data($where, $data, $table){
          $this->db->where($where);
      $this->db->update($table, $data);
    }
}