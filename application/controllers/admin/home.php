<?php
defined('BASEPATH') OR exit ('No direct script access alowed');

class Home extends CI_Controller{
	
	public function index(){
		$this->load->view('admin/v_home');
	}
}
?>