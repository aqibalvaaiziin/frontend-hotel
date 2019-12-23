<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Pesan extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->library('curl');
            $this->API = "http://localhost/hotel-webservice/api/";
            $this->API2 = "http://localhost/hotel-webservice/api/user/login?id_user=";
            $this->load->library('session');
            $this->load->library('curl');
            $this->load->helper('form');
            $this->load->helper('url');
        }


        public function index()
        {
            $currentURL = current_url();
            $params   = $_SERVER['QUERY_STRING'];
            $url = $this->API."kamar?".$params;
            $url2 = $this->API2.$this->session->userdata('idUser');
            $data['tipeKamar'] = json_decode($this->curl->simple_get($url));
            $data['dataUser'] = json_decode($this->curl->simple_get($url2));
            $this->load->view('user/templateUser/header');
            $this->load->view('user/pesan/pesan',$data);
            $this->load->view('user/templateUser/footer');
        }

        public function booking(){
            $data = array(
                'id_kamar' => $this->input->post('idKamar'),
                'id_user' => $this->session->userdata('idUser'),
                'checkin' => $this->input->post('checkIn'),
                'checkout' => $this->input->post('checkOut'),
                'total' => $this->input->post('total'),
            );
            $url = $this->API."transaksi";
            $insert = $this->curl->simple_post($url,$data);
            if($insert){
                $this->session->set_flashdata('result', 'data berhasil ditambahkan');
                
                redirect('user/home');
            }else{
                $this->session->set_flashdata('result', 'data gagal ditambahkan');   
            }    
            
        }

    }
    
    /* End of file Pesan.php */
    
?>