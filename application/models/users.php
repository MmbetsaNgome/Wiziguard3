<?php
if( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Users extends CI_Model{
	protected $table_name;

	public function __construct()
	{
		$this->tablename="users";
		$this->datetime=date("Y-m-d H:i:s");	
		$this->user_id=$this->session->userdata("user_id");
	}

	public function add()
	{
		$email=$this->input->post("email");
		$password=$this->input->post("password");
		$hash=date("YmdHis");
		$hash=hash('sha256',$hash);
		$password=hash('sha256',$hash.$password);
		
		$data = array(
			'email' => $email ,
		   	'hash' => $hash,
		   'password' => $password,
		   
		);
		if($this->db->insert($this->tablename,$data)){
			return TRUE;
		}else{
			return FALSE;
		}

	}

	public function create()
	{
		if( $this->db->insert( 'users', [
			'date_created' => $this->datetime,
			'date_modified' => $this->datetime,
			'fname' => $this->input->post("fname"),
			'lname' => $this->input->post("lname"),
			'phone_no' => $this->input->post("phone_no"),
			'role_id' => $this->input->post("role_id"),
			'username' => $this->input->post("username"),			
			'password' => password_hash( $this->input->post( "password" ), PASSWORD_BCRYPT ),
		] ) )
			return true;
		else
			return false;		
	}
}