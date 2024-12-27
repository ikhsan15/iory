<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {

  public function insert_table($table, $data) {
    $this->db->insert($table, $data);
    $insertId = $this->db->insert_id();
    return $insertId;
  }

  function update_table($table, $data, $cond) {
    $this->db->where($cond);
    $this->db->update($table, $data);
  }

  function delete_table($table, $cond) {
    $this->db->where($cond);
    $this->db->delete($table);
  }

  // Metode untuk mendapatkan field dari tabel foreign key
  function show_combo($table, $fieldId, $fieldName, $clause, $fieldOrder, $value) {
    $list = '';
    $sql  = " SELECT " . $fieldId . ", " . $fieldName . "
              FROM " . $table . "
              WHERE " . $clause . "
              ORDER BY " . $fieldOrder;
    $rhQ = $this->db->query($sql);
    foreach($rhQ->result() as $rrQ) {
      $field_id = $rrQ->$fieldId;
      $field_name = $rrQ->$fieldName;
      ($value == $field_id) ? $selected = "selected" : $selected = "";
      $list .= '<option value="' . $field_id . '" ' . $selected . '>' . $field_name . '</option>';
    }
    return $list;
  }

}