<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {
    
        public function index()
        {
            $this->load->view('user/templateUser/header');
            $this->load->view('user/home/home');
            $this->load->view('user/templateUser/footer');
        }
    
    }
    
    /* End of file Home.php */
    
?>