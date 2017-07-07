<?php 
	class Pages extends  CI_Controller {
		// protected $data = array();

		public function view($page = 'home'){
			if (!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$this->data['title'] = "Wiziguard";

			$this->load->view('partials/header',$this->data);
			$this->load->view('pages/'.$page);
			$this->load->view('partials/footer');

		}
	}
?>