<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CrudModel extends CI_Model{


    public function create($tableName,$data){
       $id = $this->db->insert($tableName,$data);
       return $id;
        
    }

    public function delete($tableName,$clause){
        $this->db->delete($tableName,$clause);
    }
    

    public function update($tableName,$data,$clause){
      $this->db->update($tableName,$data,$clause);

    }

    public function fetchAll($tableName){
      $this->db->select();
      $this->db->from($tableName);
      $query =$this->db->get();
     return  $query->result();
    }

    public function fetchOne($tableName,$where){
      $this->db->select();
      $this->db->where($where);
      $this->db->from($tableName);
      $query =$this->db->get();
     return  $query->result();
    }
}