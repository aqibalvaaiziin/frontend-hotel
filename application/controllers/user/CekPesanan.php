<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class CekPesanan extends CI_Controller {
    
        public function index()
        {
            $this->load->view('templateUser/header');
            $this->load->view('user/cekPesanan/cekPesanan');
            $this->load->view('templateUser/footer');
        }
    
    }
    
    /* End of file CekPesanan.php */
    
?>