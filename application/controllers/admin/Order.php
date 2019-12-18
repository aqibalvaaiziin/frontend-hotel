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
        

        public function detail($id_tansaksi){
            $this->load->view('admin/template/header');
            $this->load->view('admin/order/detail');
            $this->load->view('admin/template/footer');
        }

        public function edit($id_tansaksi){
        $this->form_validation->set_rules('id_kamar', 'id_kamar', 'required');
        $this->form_validation->set_rules('id_user', 'id_user', 'required');
        $this->form_validation->set_rules('checkin', 'checkin', 'required');
        $this->form_validation->set_rules('checkout', 'checkout', 'required');
        $this->form_validation->set_rules('total', 'total', 'required');
        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('admin/template/header');
            $this->load->view('admin/order/edit');
            $this->load->view('admin/template/footer');
        } else {
            # code...
            // $this->order_model->editData();
            redirect('admin/order','refresh');
        }
        }

        public function tambah(){
        
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('admin/template/header');
                $this->load->view('admin/template/bar');
                $this->load->view('admin/order/tambah');
                $this->load->view('admin/template/footer');
            } else {
                # code...
            //   $this->order_model->tambaData();
                redirect('admin/order','refresh');
            }
        }
    
    }
    
    /* End of file Home.php */
    
?>