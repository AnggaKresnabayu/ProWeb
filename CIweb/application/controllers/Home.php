<?php
class Home extends CI_Controller{
	public function index(){
		$this->load->view('home');
	}
	public function mantap(){
		$this->load->view('C:\xampp\htdocs\ProWeb\css\Navbar.css', 'home');
	}
}