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
                'no_telp' => $this->input->post('noTelp'),
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
            $params = array('id_user' =>  $this->uri->segment(4));
            $url = $this->API."?id_user=".$params['id_user'];
            $data['users'] = json_decode($this->curl->simple_get($url));
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/user/edit',$data);
            $this->load->view('admin/template/footer');
        }

        public function prosesPut(){
            $data = array(
                'id_user'       => $this->input->post('id_user'),
                'nama'          => $this->input->post('nama'),
                'email'         => $this->input->post('email'),
                'no_telp'       => $this->input->post('no_telp'),
                'username'      => $this->input->post('username'),
                'password'      => $this->input->post('password'),
                'role'          => $this->input->post('role')
            );
            $update =  $this->curl->simple_put($this->API, $data); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
                $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('admin/user');
        }

        public function delete(){
            $params = array('id_user' =>  $this->uri->segment(4));
            $delete =  $this->curl->simple_delete($this->API, $params);
            if ($delete) {
                $this->session->set_flashdata('result', 'Hapus Data Menu Berhasil');
            } else {
                $this->session->set_flashdata('result', 'Hapus Data Menu Gagal');
            }
            redirect('admin/user');
        }

    
    }
    
    /* End of file Home.php */
    
?>