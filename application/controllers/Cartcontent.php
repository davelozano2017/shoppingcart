<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cartcontent extends CI_Controller {

	public function index() {
		$data['resulttemptable'] = $this->model->ShowAllTempTable();
		$this->load->view('template/pages/cartcontent',$data);
	}

}
