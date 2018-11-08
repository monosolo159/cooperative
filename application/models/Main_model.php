<?php

class Main_model extends CI_Model{

  public function record_count($table, $search, $where){
    $this->db->like($where, $search);
    $query = $this->db->get($table);
    return $query->num_rows();

  }

  public function record_count_activity($table){
    $query = $this->db->get($table);
    return $query->num_rows();

  }

  public function fetch_data($limit, $start, $table, $search, $where) {
    $this->db->like($where, $search);
    $this->db->limit($limit, $start);
    $query = $this->db->get($table);

    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }

  public function fetch_data_activity($limit, $start, $table) {
    $this->db->limit($limit, $start);
    $query = $this->db->get($table);

    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }








}
