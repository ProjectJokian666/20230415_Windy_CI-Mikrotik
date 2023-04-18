<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resources extends CI_Controller
{

    public function index()
    {
        $ip = $this->session->userdata('ip');
        $user = $this->session->userdata('user');
        $password = $this->session->userdata('password');
        $API = new Mikweb();
        $API->connect($ip, $user, $password);
        $API->connect($ip, $user, $password);
        $resource = $API->comm("/system/resource/print");

        //var_dump($resource);
        $data = [
            'title' => 'Resources',
            'resource' => $resource,
            'uptime' => $resource['0']['uptime'],
            'version' => $resource['0']['version'],
            'build-time' => $resource['0']['build-time'],
            'free-memory' => $resource['0']['free-memory'],
            'total-memory' => $resource['0']['total-memory'],
            'cpu' => $resource['0']['cpu'],
            'cpu-count' => $resource['0']['cpu-count'],
            'cpu-frequency' => $resource['0']['cpu-frequency'],
            'cpu-load' => $resource['0']['cpu-load'],
            'free-hdd-space' => $resource['0']['free-hdd-space'],
            'total-hdd-space' => $resource['0']['total-hdd-space'],
            'write-sect-since-reboot' => $resource['0']['write-sect-since-reboot'],
            'write-sect-total' => $resource['0']['write-sect-total'],
            'architecture-name' => $resource['0']['architecture-name'],
            'board-name' => $resource['0']['board-name'],
            //'platform' => $resource['0']['platform'],
        ];
        $this->load->view('template/main', $data);
        $this->load->view('resources', $data);
        $this->load->view('template/footer');
    }
}
