<?php 
if( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

	class auths extends CI_Model
	{
		protected $is_logged_in;

		public function __construct()
		{
			parent:: __construct();
			$this->is_logged_in = $this->session->userdata( 'is_logged_in' );
		}

		public function login()
		{
			$row =array();
			$this->db->select('*');
			$this->bd->from('users');
			if ($this->input->post("email") != NULL)
				$this->db->where('email',$this->input->post("email"));
			$query = $this->db->get();
			$row =$query->row();
			$query->free_result();
			return($row);
		}
		public function is_logged_in()	
		{
			if( !isset( $this->is_logged_in ) or $this->is_logged_in != true  )		
				return false;
			else 
				return true;		
		}

	}
	