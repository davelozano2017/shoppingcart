<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Countcart extends CI_Controller {

	public function index() {
    $data['count'] = $this->model->CountAllTempTable();
		$this->load->view('template/pages/countcart',$data);
	}

}
