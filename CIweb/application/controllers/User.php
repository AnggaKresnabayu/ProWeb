<?php
defined('BASEPATH') OR exit('No direc script access allowed');

class User extends CI_Controller{
	public function index(){
		$this->load->model('m_user');
		$data['response'] = $this->m_user->get();
		$this->load->view('views', $data);
	}
}