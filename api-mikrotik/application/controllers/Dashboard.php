<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $ip = $this->session->userdata('ip');
        $user = $this->session->userdata('user');
        $password = $this->session->userdata('password');
        $API = new Mikweb();
        $API->connect($ip, $user, $password);
        $hotspotuser = $API->comm("/ip/hotspot/user/print");
        $hotspotactive = $API->comm("/ip/hotspot/active/print");
        $resource = $API->comm("/system/resource/print");
        $interface = $API->comm("/interface/print");


        // var_dump($resource);
        $data = [
            'title' => 'Dashboard PUSKOM',
            'hotspotuser' => count($hotspotuser),
            'hotspotactive' => count($hotspotactive),
            'cpu' => $resource['0']['cpu'],
            'cpuload' => $resource['0']['cpu-load'],
            'uptime' => $resource['0']['uptime'],
            'interface' => $interface,
            'totalhddspace' => $resource['0']['total-hdd-space'],
            'freehddspace' => $resource['0']['free-hdd-space'],
            'totalmemory' => $resource['0']['total-memory'],
            'freememory' => $resource['0']['free-memory'],
            'boardname' => $resource['0']['board-name'],
            'interface' => $interface,

        ];
        $this->load->view('template/main', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer');
    }

    public function traffic()
    {
        $ip = $this->session->userdata('ip');
        $user = $this->session->userdata('user');
        $password = $this->session->userdata('password');
        $API = new Mikweb();
        $API->connect($ip, $user, $password);
        $getinterfacetraffic = $API->comm("/interface/monitor-traffic", array(
            'interface' => 'ether1',
            'once' => '',
        ));
        
        $rx = $getinterfacetraffic[0]['rx-bits-per-second'];
        $tx = $getinterfacetraffic[0]['tx-bits-per-second'];

        $data = [
            'tx' => $tx,
            'rx' => $rx,


        ];
        $this->load->view('traffic', $data);
    }
}
