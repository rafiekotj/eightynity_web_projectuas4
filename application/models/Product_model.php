<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{
  public function get_all_products()
  {
    $this->db->select('*');
    $this->db->from('products');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function get_product_by_id($id)
  {
    $this->db->select('*');
    $this->db->from('products');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->row_array();
  }
}
