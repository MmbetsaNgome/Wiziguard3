<?php 
if( ! defined('BASEPATH') ) exit( 'No direct script access allowed' );

	class Auth extends CI_Controller {
		protected $data = array();

		public function __construct()
		{
			parent:: __construct();
			$this->load->model('auths');
			$this->load->model('users');
		}
		public function login(){

			$this->form_validation->set_rules('email','Email' ,'required');
			$this->form_validation->set_rules('password','Password' ,'required');

			if($this->form_validation->run() === FALSE){
				$this->data['title'] = "Wiziguard :: Login";
				$this->load->view('partials/header', $this->data);
		 	    $this->load->view('auth/login');
				$this->load->view('partials/footer');
			} else{
				$user = $this->auth->login();
					if(!empty($user)){
						if(password_verify($this->input->post("password"), $user->password)){
							$data = array('is_logged_in'=> true, 'user_id' => $user->id , 'email' => $user->email);
							$this->session->set_userdata($data);

							http_redirect("dashboard");
						}else{
							$this->session->set_flashdata("loginerror", "You have entered a wrong password. Kindly try again.");
							http_redirect("auth");
						}
					}else{
						$this->session->set_flashdata("loginerror", "This user email".$this->input->post("email")."does not exist");
						http_redirect("auth");
					}
			}
		}
		public function register(){
			$this->data['title'] = "Wiziguard :: Register";

			$this->form_validation->set_rules('email','Email','trim|required|is_unique');
			$this->form_validation->set_rules( 'password', 'Password', 'trim|required|min_length[5]|max_length[10]' );
			$this->form_validation->set_rules( 'password1', 'Confirm Password', 'trim|required|min_length[5]|max_length[10]|matches[password]');
			$this->form_validation->set_rules( 'firstname', 'Firstname', 'trim|required|min_length[2]|max_length[10]' );
			$this->form_validation->set_rules( 'lastname', 'Lastname', 'trim|required|min_length[2]|max_length[10]' );

			if( $this->form_validation->run() == FALSE ) :
				
				$this->load->view( "partials/header", $this->data );
				$this->load->view( "auth/register" );
				$this->load->view( "partials/footer" );
			else :
				if($this->users->add()) : 
					$this->session->set_flashdata("loginsuccess", "New user has successfully been registered");
					http_redirect("auth");
				else : 
					$this->session->set_flashdata("loginerror", "An error occurred while registering the user.");
					http_redirect("auth/register");
				endif;
			endif;
		}
		public function add_user(){}
		public function view(){}
		public function edit(){}
		public function change_pwd(){}
		public function is_logged()
		{
			if( !$this->authentications->is_logged() )
			redirect('authentication');
		}
		public function logout(){
			
		}
	}
?>