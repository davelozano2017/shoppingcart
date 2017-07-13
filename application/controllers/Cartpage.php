<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cartpage extends CI_Controller {

	public function index() {
   		$data['resulttemptable'] = $this->model->ShowAllTempTable();
		$data['resulttotal'] = $this->model->ShowTotal();
		$this->load->view('template/pages/cartpage',$data);
	}

}
