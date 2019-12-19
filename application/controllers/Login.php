<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    class login extends CI_Controller
    {
    public function __construct()
    {
        parent::__construct();
        $this->API = "http://localhost/hotel-webservice/api/user";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        
    }

    public function index()
    {
        $this->load->view('user/templateUser/header');
        $this->load->view('login/login');
        $this->load->view('user/templateUser/footer');
    }


    public function proses_login(){
        $url = $this->API."/login";
        $data = [
            'username' => htmlspecialchars($this->input->post('username')),
            'password' => htmlspecialchars($this->input->post('password')),
        ];
        $cek_login =  json_decode($this->curl->simple_post($url, $data));

        if($cek_login){
            foreach ($cek_login->data as $row) {
                $this->session->set_userdata('idUser',$row->id_user);
                $this->session->set_userdata('username',$row->username);
                $this->session->set_userdata('role',$row->role);
            }
            if ($this->session->userdata('role') == 'Admin') {
                redirect('admin/order');
            }

            else if($this->session->userdata('role') == 'User'){
                redirect('user/home');
            }
        }else{
            $this->session->set_flashdata('message', 'Password salah');
            redirect('login');
        }
    }
        
    public function logout(){
        $dataSes = array('idUser','username','role');
        $this->session->unset_userdata($dataSes);
        $this->session->sess_destroy();
        redirect('user/home','refresh');
    }
    }

?>