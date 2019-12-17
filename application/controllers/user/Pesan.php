<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Pesan extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->library('curl');
            $this->API = "http://localhost/hotel-webservice/api/";
            $this->load->library('session');
            $this->load->library('curl');
            $this->load->helper('form');
            $this->load->helper('url');
        }


        public function index()
        {
            $currentURL = current_url();
            $params   = $_SERVER['QUERY_STRING'];
            $API2 = $this->API."kamar?".$params;
            $data['tipeKamar'] = json_decode($this->curl->simple_get($API2));
            
            $this->load->view('templateUser/header');
            $this->load->view('user/pesan/pesan',$data);
            $this->load->view('templateUser/footer');
        }
    }
    
    /* End of file Pesan.php */
    
?>