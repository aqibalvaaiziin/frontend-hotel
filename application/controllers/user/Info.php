<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Info extends CI_Controller {
    
        public function index()
        {
            $this->load->view('user/templateUser/header');
            $this->load->view('user/info/info');
            $this->load->view('user/templateUser/footer');
        }
    
    }
    
    /* End of file Info.php */
    
?>