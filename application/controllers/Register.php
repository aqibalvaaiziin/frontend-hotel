<?php

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Register extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->library('curl');
            $this->API = "http://localhost/hotel-webservice/api/user";
            $this->load->library('session');
            $this->load->library('curl');
            $this->load->helper('form');
            $this->load->helper('url');
        }
    
        public function index()
        {
            $this->load->view('register/header');
            $this->load->view('register/index');
            $this->load->view('register/header');
            
        }

        public function prosesPost(){
            $data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'no_telp' => $this->input->post('no_telp'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'role' => "User",
            );
            $url = $this->API;
            $insert = $this->curl->simple_post($url,$data);
            if($insert){
                $this->session->set_flashdata('result', 'data berhasil ditambahkan');
                redirect('user/home');
            }else{
                $this->session->set_flashdata('result', 'data gagal ditambahkan');  
                echo "alah gagal";
            } 
        }
    }
    
    
    /* End of file Register.php */
    

?>