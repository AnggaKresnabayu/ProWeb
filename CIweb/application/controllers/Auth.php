<?php
class Auth extends CI_Controller{
	public function __construct()
				{
					parent::__construct();
					$this->load->model('model_user');
				}

	public function logout(){
		unset($_SESSION);
		session_destroy();
		redirect("auth/login", "refresh");
	}

	public function login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		if ($this->form_validation->run()==TRUE){
			$username = $_POST['username'];
			$password = md5($_POST['password']);

			//cek user di database
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where(array('username' => $username,'password' => $password));
			$query = $this->db->get();

			$user = $query->row();
			//jika user ada
			if ($user->email){
				$this->session->set_flashdata("success", "You are logged in");

				$_SESSION['user_logged'] = TRUE;
				$_SESSION['username'] = $user->username;

				redirect("home", "refresh");
			}
			else{
				$this->session->set_flashdata("error", "No such account exists in database");

				redirect("auth/login", "refresh");

			}
		}

		$this->load->view('login');
	}

	public function register(){
		if (isset($_POST['register'])){
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
			$this->form_validation->set_rules('password', 'Confirm Password', 'required|min_length[5]|matches[password]');
			$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[5]');


			if ($this->form_validation->run() == TRUE){
				//echo 'form validated';

				$data = array(
					'username' => $_POST['username'],
					'email' => $_POST['email'],
					'password' => md5($_POST['password']),
					'gender' => $_POST['gender'],
					'created_date' => date('Y-m-d'),
					'phone' => $_POST['phone']
				);
				$this->db->insert('users', $data);

				$this->session->set_flashdata("success", "Your account has been registered. You can login now");
				redirect("auth/register", "refresh");
			}
		}

		$this->load->view('register');
	}
	
	public function tampil_data()
				{
					$data["users"] = $this->model_user->tampilAll();
					$this->load->view('admin', $data);
				}

	public function edit_data()
				{
					$nip = $this->uri->segment(3);
					$this->load->model('model_user');
					$data["peg"] = $this->model_user->pilih($nip);
					$this->load->view('edit', $data);
				}
}