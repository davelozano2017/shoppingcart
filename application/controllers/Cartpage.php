<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cartpage extends CI_Controller {

	public function index() {
   		$data['resulttemptable'] = $this->model->ShowAllTempTable();
		$resultdata = $this->model->ShowTotal();
		foreach($resultdata as $r) {
			$data['total'] = $r->total;
		}
		$this->load->view('template/pages/cartpage',$data);
	}

}
