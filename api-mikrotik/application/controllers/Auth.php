<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function login()
    {
        $ip = $this->input->post('ip');
        $user = $this->input->post('user');
        $password = $this->input->post('password');
        $data = [
            'ip' => $ip,
            'user' => $user,
            'password' => $password,
        ];
        $this->m_login->tambah_data_login($data);

        $this->session->set_userdata($data);
        redirect('dashboard');
    }

    public function autolog()
    {
        $id = $this->input->post('id');
        $ip = $this->input->post('ip');
        $user = $this->input->post('user');
        $password = $this->input->post('password');
        $data = [
            'ip' => $ip,
            'user' => $user,
            'password' => $password,
        ];
        $login=$this->m_login->autolog($id);
        $this->session->set_userdata($data);
        redirect('dashboard');
    }

    public function logout()
    {
        $this->session->unset_userdata('ip');
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('password');
        $this->load->view('auth/v_login');
    }
}
