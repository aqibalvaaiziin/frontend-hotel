<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class User extends CI_Controller {
    
        
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
            $data['dataUser'] = json_decode($this->curl->simple_get($this->API));
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/user/index',$data);
            $this->load->view('admin/template/footer');
        }
        
        public function tambah(){
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/user/tambah');
            $this->load->view('admin/template/footer');
        }
        
        public function prosesPost(){
            $data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'role' => $this->input->post('role'),
            );
            $url = $this->API;
            $insert = $this->curl->simple_post($url,$data);
            if($insert){
                $this->session->set_flashdata('result', 'data berhasil ditambahkan');
                redirect('admin/user');
            }else{
                $this->session->set_flashdata('result', 'data gagal ditambahkan');  
                echo "alah gagal";
            } 
        }

        public function edit(){
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/user/edit');
            $this->load->view('admin/template/footer');
        }

    
    }
    
    /* End of file Home.php */
    
?>