<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Room extends CI_Controller {
    
        
      public function __construct()
      {
          parent::__construct();
          $this->load->library('curl');
          $this->API = "http://localhost/hotel-webservice/api/kamar";
          $this->load->library('session');
          $this->load->library('curl');
          $this->load->helper('form');
          $this->load->helper('url');
      }

        public function index()
        {
          $data['dataKamar'] = json_decode($this->curl->simple_get($this->API));
          $this->load->view('admin/template/header');
          $this->load->view('admin/template/bar');
          $this->load->view('admin/room/index',$data);
          $this->load->view('admin/template/footer');
        }

        public function edit(){
          $this->load->view('admin/template/header');
          $this->load->view('admin/template/bar');
          $this->load->view('admin/room/edit');
          $this->load->view('admin/template/footer');
        }

        public function prosesEdit($id_kamar){
          $data = array(
            'no_kamar' => $this->input->post('no_kamar'),
            'tipe' => $this->input->post('tipe'),
            'harga' => $this->input->post('harga'),
            'jml_ranjang' => $this->input->post('jml_ranjang'),
            'status' => $this->input->post('status'),
            'deskripsi' => $this->input->post('desc'),
            'gambar' => "lala"
          );
          $url = $this->API;
          $insert = $this->curl->simple_put($url,$data);
          if($insert){
              $this->session->set_flashdata('result', 'data berhasil ditambahkan');
              redirect('admin/room');
          }else{
              $this->session->set_flashdata('result', 'data gagal ditambahkan');   
          } 
        }


        public function detail($id_kamar){
          $this->load->view('admin/template/header');
          $this->load->view('admin/room/detail');
          $this->load->view('admin/template/footer');
        }

        public function tambah(){
          $this->load->view('admin/template/header');
          $this->load->view('admin/template/bar');
          $this->load->view('admin/room/tambah');
          $this->load->view('admin/template/footer');   
        }

        public function prosesPost(){
          $data = array(
            'no_kamar' => $this->input->post('no_kamar'),
            'tipe' => $this->input->post('tipe'),
            'harga' => $this->input->post('harga'),
            'jml_ranjang' => $this->input->post('jml_ranjang'),
            'status' => $this->input->post('status'),
            'deskripsi' => $this->input->post('desc'),
            'gambar' => "lala"
          );
          $url = $this->API;
          $insert = $this->curl->simple_post($url,$data);
          if($insert){
              $this->session->set_flashdata('result', 'data berhasil ditambahkan');
              redirect('admin/room');
          }else{
              $this->session->set_flashdata('result', 'data gagal ditambahkan');   
          } 
        }

      }
          
    
    /* End of file Room.php */
    
?>