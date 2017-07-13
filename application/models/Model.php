<?php

class model extends CI_Model {

  public function ShowAllProducts() {
      $result = $this->db->get('products_tbl');
      return $result->result();
  }

  public function CountAllTempTable() {
      return $this->db->count_all_results('products_temp_tbl');
  }

  public function AddToTempTable($data) {
    $check = $this->db->select('product_id')->from('products_temp_tbl')->where(['product_id'=>$data['product_id']])->get();
    if($check->num_rows() > 0) {
      $check 	  = $this->model->GetProductId($data['product_id']);
  		$quantity = $check->quantity;
      $result   = $this->db->where(['product_id'=>$data['product_id']])->set('quantity', $quantity + 1)->update('products_temp_tbl');
      echo json_encode(array('notification'=>'updated','quantity'=>$quantity + 1));
			return $result;
		} else {
      echo json_encode(array('notification'=>'inserted'));
			$result = $this->db->insert('products_temp_tbl',$data);
			return $result;
		}
  }

  public function UpdateProductQuantity($product_id,$quantity) {
      $result  = $this->db->where(['product_id'=> $product_id])->set('quantity', $quantity)->update('products_temp_tbl');
      return $result;
  }

  public function GetProductId($product_id) {
    $this->db->from('products_temp_tbl')->where('product_id', $product_id);
		return $this->db->get()->row();
  }

  public function RemoveTempTable() {
    $result = $this->db->empty_table('products_temp_tbl');
    echo json_encode(array('notification'=>'success'));
    return $result;
  }

  public function RemoveItemById($product_id) {
    $result = $this->db->where(['product_id'=>$product_id])->delete('products_temp_tbl');
    echo json_encode(array('notification'=>'success'));
    return $result;
  }

  public function ShowAllTempTable() {
    $result = $this->db->select(
			'products_temp_tbl.product_id, products_temp_tbl.quantity, 
       products_tbl.brand_name, products_tbl.stocks,
       products_tbl.description, products_tbl.id, 
       products_tbl.product_name, products_tbl.price')
       ->from('products_temp_tbl')
       ->join('products_tbl','products_temp_tbl.product_id = products_tbl.id')
       ->group_by('products_temp_tbl.product_id')
			 ->get();
		return $result->result();
  }

  public function ShowTotal() {
    $result = $this->db->select(
			'products_temp_tbl.product_id, products_temp_tbl.quantity, 
       products_tbl.id, products_tbl.price, 
       sum(products_tbl.price * products_temp_tbl.quantity) as total')
       ->from('products_temp_tbl')
       ->join('products_tbl','products_temp_tbl.product_id = products_tbl.id')
			 ->get();
		return $result->result();
  }

  public function temptable() {
    $result = $this->db->get('products_temp_tbl');
    if($result->num_rows() > 0) {
      return true;
    } else {
      return false;
    }

  }

  public function DeleteByCheckbox($product_id) {
      $result = $this->db->where(['product_id'=>$product_id])->delete('products_temp_tbl');
      return $result;
  }


}
