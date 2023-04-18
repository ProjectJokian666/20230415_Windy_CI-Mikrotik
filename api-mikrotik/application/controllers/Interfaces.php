<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Interfaces extends CI_Controller
{

    public function index()
    {
        $ip = $this->session->userdata('ip');
        $user = $this->session->userdata('user');
        $password = $this->session->userdata('password');
        $API = new Mikweb();
        $API->connect($ip, $user, $password);
        $interface = $API->comm("/interface/print");

        //var_dump($interface);
        $data = [
            'title' => 'Interfaces',
            'totalinterface' => count($interface),
            'interface' => $interface,
            'id' => $interface['0']['.id'],
            //'name' => $interface['name'],
            // 'type' => $interface['0']['type'],
            // 'mac-address' => $interface['0']['mac-address'],
            'rx-byte' => $interface['0']['rx-byte'],
            'tx-byte' => $interface['0']['tx-byte'],
            // 'running' => $interface['0']['running'],
            // 'disabled' => $interface['0']['disabled'],
        ];
        $this->load->view('template/main', $data);
        $this->load->view('interfaces', $data);
        $this->load->view('template/footer');
    }
}
