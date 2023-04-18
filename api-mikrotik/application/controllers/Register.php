<?php

class Register extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('d_register');
	}

	function index()
	{
		$this->load->view('auth/register');
	}  

	public function tambah_register()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = [
            'username' => $username,
            'password' => $password,
        ];
        $this->d_register->tambah_data_register($data);

        $this->session->set_userdata($data);
        redirect('register');
    }
}
