<?php
Class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function signin() { }

	public function signup()
	{
		$ang = file_get_contents("php://input");
		$req = json_decode($ang);

		/* json input */
		$username = $req->username;
		$password = $req->password;
		$email 	  = $req->email;

		if ($this->user_model->signup($username, $password, $email))
			return $result = '{"status" : "success", "message" : "ok"}';
		else
			return $result = '{"status" : "faileds", "message" : "no"}';
	}
	
	public function logout() { }
}