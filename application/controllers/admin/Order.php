<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Order extends CI_Controller {
    
        
        public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/hotel-webservice/api/transaksi";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
        

        public function index()
        {
            $data['dataTransaksi'] = json_decode($this->curl->simple_get($this->API));
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar',$data);
            $this->load->view('admin/order/index');
            $this->load->view('admin/template/footer');
        }
        

        public function edit(){
            $params = array('id_transaksi' =>  $this->uri->segment(4));
            $url = $this->API."?id_transaksi=".$params['id_transaksi'];
            $data['dataTransaksi'] = json_decode($this->curl->simple_get($url));
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/order/edit',$data);
            $this->load->view('admin/template/footer');
        }

        public function prosesPut(){
            $data = array(
                'id_transaksi'  => $this->input->post('id_transaksi'),
                'id_kamar'       => $this->input->post('id_kamar'),
                'id_user'       => $this->input->post('id_user'),
                'checkin'          => $this->input->post('checkin'),
                'checkout'         => $this->input->post('checkout'),
                'total'       => $this->input->post('total'),
            );
            $update =  $this->curl->simple_put($this->API, $data); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
                $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('admin/order');
        }

        public function delete(){
            $params = array('id_transaksi' =>  $this->uri->segment(4));
            $delete =  $this->curl->simple_delete($this->API, $params);
            if ($delete) {
                $this->session->set_flashdata('result', 'Hapus Data Menu Berhasil');
            } else {
                $this->session->set_flashdata('result', 'Hapus Data Menu Gagal');
            }
            redirect('admin/order');
        }

    
    }
    
    /* End of file Home.php */
    
?>