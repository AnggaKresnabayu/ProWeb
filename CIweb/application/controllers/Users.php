<?php
class Users extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($_SESSION['user_logged'] == FALSE){
			$this->session->set_flashdata("error", "Please login first to view this page!");
			redirect("auth/login");
		}
	}

	public function profile(){
		if($_SESSION['user_logged'] == FALSE){
			$this->session->set_flashdata("error", "Please login first to view this page!");
			redirect("auth/login");
		}

		$this->load->view('profile');
	}

	public function home2(){
		if($_SESSION['user_logged'] == FALSE){
			$this->session->set_flashdata("error", "Please login first to view this page!");
			redirect("auth/login");
		}

		$this->load->view('home2');
	}

	public function view2(){
		if($_SESSION['user_logged'] == FALSE){
			$this->session->set_flashdata("error", "Please login first to view this page!");
			redirect("auth/login");
		}

		$this->load->view('view2');
	}

	public function lst2(){
		if($_SESSION['user_logged'] == FALSE){
			$this->session->set_flashdata("error", "Please login first to view this page!");
			redirect("auth/login");
		}

		$this->load->view('list12');
	}

	public function lts2(){
		if($_SESSION['user_logged'] == FALSE){
			$this->session->set_flashdata("error", "Please login first to view this page!");
			redirect("auth/login");
		}

		$this->load->view('list22');
	}

	public function about2(){
		if($_SESSION['user_logged'] == FALSE){
			$this->session->set_flashdata("error", "Please login first to view this page!");
			redirect("auth/login");
		}

		$this->load->view('about2');
	}
}