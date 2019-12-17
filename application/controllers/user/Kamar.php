<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Kamar extends CI_Controller {
    
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
            $data['koleksiKamar'] = json_decode($this->curl->simple_get($this->API));
            $this->load->view('templateUser/header');
            $this->load->view('user/kamar/kamar',$data);
            $this->load->view('templateUser/footer');
        }
    
    }
    
    /* End of file Kamar.php */
    
?>