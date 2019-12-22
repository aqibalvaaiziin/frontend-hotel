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
    $data['dataKamar'] = json_decode($this->curl->simple_get($this->API."/kamar"));
    $this->load->view('server/template/header');
    $this->load->view('server/template/bar');
    $this->load->view('server/room/index',$data);
    $this->load->view('server/template/footer');
    }

    public function tambah(){
    $this->load->view('server/template/header');
    $this->load->view('server/template/bar');
    $this->load->view('server/room/tambah');
    $this->load->view('server/template/footer');   
    }

    public function prosesPost(){
    $gambar = $this->upload();
    $data = array(
        'no_kamar' => $this->input->post('no_kamar'),
        'tipe' => $this->input->post('tipe'),
        'harga' => $this->input->post('harga'),
        'jml_ranjang' => $this->input->post('jml_ranjang'),
        'status' => 1,
        'deskripsi' => $this->input->post('desc'),
        'gambar' => '/uploads/kamar/'.$gambar['upload_data']['orig_name'],
    );
    $url = $this->API;
    $insert = $this->curl->simple_post($url,$data);
    if($insert){
        $this->session->set_flashdata('result', 'data berhasil ditambahkan');
        redirect('server/room');
    }else{
        $this->session->set_flashdata('result', 'data gagal ditambahkan');   
    } 
    }

    public function edit(){
    $params = array('id_kamar' =>  $this->uri->segment(4));
    $params2 = array('tipe' =>  $this->uri->segment(5));
    $url = $this->API."?id_kamar=".$params['id_kamar']."&tipe=".$params2['tipe'];
    $data['dataKamar'] = json_decode($this->curl->simple_get($url));
    $this->load->view('server/template/header');
    $this->load->view('server/template/bar');
    $this->load->view('server/room/edit',$data);
    $this->load->view('server/template/footer');
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
    redirect('server/room');
}

public function delete(){
    $params = array('id_kamar' =>  $this->uri->segment(4));
    $delete =  $this->curl->simple_delete($this->API, $params);
    if ($delete) {
        $this->session->set_flashdata('result', 'Hapus Data Menu Berhasil');
    } else {
        $this->session->set_flashdata('result', 'Hapus Data Menu Gagal');
    }
    redirect('server/room');
}

public function upload()
{
    $this->load->helper(array('form', 'url'));

    $config = array(
        'upload_path' => "./uploads/kamar",
        'allowed_types' => "gif|jpg|png|jpeg|pdf",
        'overwrite' => TRUE,
        'max_size' => "2048000",
        'max_height' => "768",
        'max_width' => "1024"
    );

    $this->load->library('upload',$config);

    if($this->upload->do_upload('gambar'))
    {
        $data = array('upload_data' => $this->upload->data());
        return $data;
        // return $this->response($data, REST_Controller::HTTP_OK);
    }
    else
    {
        $error = array('error' => $this->upload->display_errors());
        return $error;
    }
}
}
        

/* End of file Room.php */

?>