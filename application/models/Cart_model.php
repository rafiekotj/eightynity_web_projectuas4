<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart_model extends CI_Model
{

  public function get_product_by_id($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('products');
    return $query->row_array();
  }

  public function get_total_cost($cart)
  {
    $total = 0;
    foreach ($cart as $item) {
      $total += $item['price'] * $item['quantity'];
    }
    return $total;
  }
}
