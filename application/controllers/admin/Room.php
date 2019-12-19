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

        public function edit(){
          $params = array('id_kamar' =>  $this->uri->segment(4));
          $params2 = array('tipe' =>  $this->uri->segment(5));
          $url = $this->API."?id_kamar=".$params['id_kamar']."&tipe=".$params2['tipe'];
          $data['dataKamar'] = json_decode($this->curl->simple_get($url));
          $this->load->view('admin/template/header');
          $this->load->view('admin/template/bar');
          $this->load->view('admin/room/edit',$data);
          $this->load->view('admin/template/footer');
      }

      public function prosesPut(){
          $data = array(
              'id_kamar'       => $this->input->post('id_kamar'),
              'no_kamar'          => $this->input->post('no_kamar'),
              'tipe'         => $this->input->post('tipe'),
              'harga'       => $this->input->post('harga'),
              'jml_ranjang'      => $this->input->post('jml_ranjang'),
              'status'      => $this->input->post('status'),
              'gambar'          => $this->input->post('gambar')
          );
          $update =  $this->curl->simple_put($this->API, $data); 
          if($update)
          {
              $this->session->set_flashdata('hasil','Update Data Berhasil');
          }else
          {
              $this->session->set_flashdata('hasil','Update Data Gagal');
          }
          redirect('admin/room');
      }

      public function delete(){
          $params = array('id_kamar' =>  $this->uri->segment(4));
          $delete =  $this->curl->simple_delete($this->API, $params);
          if ($delete) {
              $this->session->set_flashdata('result', 'Hapus Data Menu Berhasil');
          } else {
              $this->session->set_flashdata('result', 'Hapus Data Menu Gagal');
          }
          redirect('admin/room');
      }

      }
          
    
    /* End of file Room.php */
    
?>