<?php
class uang_muka extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_uang_muka');
    }

    function index(){
        $data['record'] = $this->model_uang_muka->tampilkan_data();
        $this->load->view('uang_muka/lihat_data',$data);
    }

    function tambah() {
        if(isset($_POST['submit'])){
            $this->model_uang_muka->tambah();
            redirect('uang_muka');
        }
        else {
            $this->load->view('uang_muka/form_input');
        }
    }

    function edit() {
        if(isset($_POST['submit'])){
            $this->model_uang_muka->edit();
            redirect('uang_muka');
        }
        else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model_uang_muka->get_one($id)->row_array();
            $this->load->view('uang_muka/form_edit',$data);
        }
    }
    function detail() {
        if(isset($_POST['submit'])){
            $this->model_uang_muka->edit();
            redirect('uang_muka');
        }
        else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model_uang_muka->get_one($id)->row_array();
            $this->load->view('uang_muka/form_edit',$data);
        }
    }

    function delete() {
        $id = $this->uri->segment(3);
        $this->model_uang_muka->delete($id);
        redirect('uang_muka');
        }   
    }