<?php
class lama_angsuran extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_lama_angsuran');
    }

    function index(){
        $data['record'] = $this->model_lama_angsuran->tampilkan_data();
        $this->load->view('lama_angsuran/lihat_data',$data);
    }

    function tambah() {
        if(isset($_POST['submit'])){
            $this->model_lama_angsuran->tambah();
            redirect('lama_angsuran');
        }
        else {
            $this->load->view('lama_angsuran/form_input');
        }
    }

    function edit() {
        if(isset($_POST['submit'])){
            $this->model_lama_angsuran->edit();
            redirect('lama_angsuran');
        }
        else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model_lama_angsuran->get_one($id)->row_array();
            $this->load->view('lama_angsuran/form_edit',$data);
        }
    }
    
    function detail() {
        if(isset($_POST['submit'])){
            $this->model_lama_angsuran->edit();
            redirect('lama_angsuran');
        }
        else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model_lama_angsuran->get_one($id)->row_array();
            $this->load->view('lama_angsuran/form_edit',$data);
        }
    }
    function delete() {
        $id = $this->uri->segment(3);
        $this->model_lama_angsuran->delete($id);
        redirect('lama_angsuran');
        }   
    }