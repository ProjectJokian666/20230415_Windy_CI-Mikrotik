<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Log extends CI_Controller
{

    public function index()
    {
        $ip = $this->session->userdata('ip');
        $user = $this->session->userdata('user');
        $password = $this->session->userdata('password');
        $API = new Mikweb();
        $API->connect($ip, $user, $password);
        $log = $API->comm("/log/print");

        //var_dump($log);
        $data = [
            'title' => 'Log',
            'totallog' => count($log),
            'log' => $log,
            'time' => $log['0']['time'],
            'topics' => $log['0']['topics'],
            'message' => $log['0']['message'],

        ];
        $this->load->view('template/main_log', $data);
        $this->load->view('log', $data);
        $this->load->view('template/footer');
    }
}
