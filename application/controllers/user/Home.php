<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {
    
        public function index()
        {
            $this->load->view('templateUser/header');
            $this->load->view('user/home/home');
            $this->load->view('templateUser/footer');
        }
    
    }
    
    /* End of file Home.php */
    
?>