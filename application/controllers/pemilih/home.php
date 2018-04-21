<?php
defined('BASEPATH') OR exit ('No direct script access alowed');

class Home extends CI_Controller{
	
	public function index(){
		$this->load->view('pemilih/v_home');
	}
}
?>