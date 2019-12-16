<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Pesan extends CI_Controller {
    
        public function index()
        {
            $this->load->view('templateUser/header');
            $this->load->view('user/pesan/pesan');
            $this->load->view('templateUser/footer');
        }
    }
    
    /* End of file Pesan.php */
    
?>