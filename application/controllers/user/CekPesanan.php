<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class CekPesanan extends CI_Controller {
    
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
            $url = $this->API.'transaksi/user?id_user='.$this->session->userdata('idUser');
            
            $data['dataTransaksi'] = json_decode($this->curl->simple_get($url));
            $this->load->view('user/templateUser/header');
            $this->load->view('user/cekPesanan/cekPesanan',$data);
            $this->load->view('user/templateUser/footer');
        }

        public function cekOrder(){
            $keyword = $this->input->post('keyword');            
            redirect('user/cekPesanan?id_transaksi='.$keyword);
        }
    
    }
    
    /* End of file CekPesanan.php */
    
?>