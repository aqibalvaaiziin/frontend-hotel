<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Room extends CI_Controller {
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/hotel-webservice/api/kamar";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
    $data['dataKamar'] = json_decode($this->curl->simple_get($this->API."/kamar"));
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/bar');
    $this->load->view('admin/room/index',$data);
    $this->load->view('admin/template/footer');
    }


}

?>