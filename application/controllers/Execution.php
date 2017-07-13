<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Execution extends CI_Controller {

	public function add($id) {
		$data 	= array('product_id'=> $id, 'quantity' => 1);
		$query 	= $this->model->AddToTempTable($data);
		return $query;
	}

	public function removeall() {
		$query = $this->model->RemoveTempTable();
		return $query;
	}

	public function removebyid($id) {
		$query = $this->model->RemoveItemById($id);
		return $query;
	}

	public function deletebycheckbox() {
		$product_id = $this->input->post('product_id');
		if(count($product_id) >= 1) {
		foreach ($product_id as $key => $value) {
				$this->model->DeleteByCheckbox($value);
			}
			echo json_encode(array('success'=> true,'message'=> 'Item has been removed'));
		} else {
			echo json_encode(array('success'=>false, 'message' => 'Click atleast one checkbox.'));
		}
	}

	public function updatequantity($product_id) {
		$quantity = $this->input->post('quantity');
		$query = $this->model->UpdateProductQuantity($product_id,$quantity);
		return $query;
	}

}
