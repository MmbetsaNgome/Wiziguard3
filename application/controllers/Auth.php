<?php 
	class Auth extends  CI_Controller {
		public function view($page = 'home'){
			if (!file_exists(APPPATH.'views/auth/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('partials/header');
			$this->load->view('auth/'.$page,$data);
			$this->load->view('partials/footer');

		}
	}
?>