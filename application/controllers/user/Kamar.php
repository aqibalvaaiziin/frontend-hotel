<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Kamar extends CI_Controller {
    
        public function index()
        {
            $this->load->view('templateUser/header');
            $this->load->view('user/kamar/kamar');
            $this->load->view('templateUser/footer');
        }
    
    }
    
    /* End of file Kamar.php */
    
?>