<?php
class uang_angsuran extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_uang_angsuran');
    }

    function index(){
        $data['record'] = $this->model_uang_angsuran->tampilkan_data();
        $this->load->view('uang_angsuran/lihat_data',$data);
    }

    function tambah() {
        if(isset($_POST['submit'])){
            $this->model_uang_angsuran->tambah();
            redirect('uang_angsuran');
        }
        else {
            $this->load->view('uang_angsuran/form_input');
        }
    }

    function edit() {
        if(isset($_POST['submit'])){
            $this->model_uang_angsuran->edit();
            redirect('uang_angsuran');
        }
        else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model_uang_angsuran->get_one($id)->row_array();
            $this->load->view('uang_angsuran/form_edit',$data);
        }
    }

    function detail() {
        if(isset($_POST['submit'])){
            $this->model_uang_angsuran->edit();
            redirect('uang_angsuran');
        }
        else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model_uang_angsuran->get_one($id)->row_array();
            $this->load->view('uang_angsuran/form_edit',$data);
        }
    }

    function delete() {
        $id = $this->uri->segment(3);
        $this->model_uang_angsuran->delete($id);
        redirect('uang_angsuran');
        }   
    }