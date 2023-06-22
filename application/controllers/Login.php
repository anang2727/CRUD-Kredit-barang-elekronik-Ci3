<?php
class login extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_login');
        chek_session();
    }
    
    function index()
    {
        $data['record']=  $this->model_login->tampildata();
        $this->load->view('login/lihat_data',$data);
        // $this->template->load('template','user/lihat_data',$data);
    }
    
    function tambah()
    {
        if(isset($_POST['submit'])){
            // proses data
            // $nama       =  $this->input->post('nama',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            $password   =  $this->input->post('password',true);
            $data       =  array(   
                // 'nama_lengkap'=>$nama,
                                    'username'=>$username,
                                    'password'=>md5($password));
            $this->db->insert('tb_login',$data);
            redirect('login');
        }
        else{
            $this->load->view('login/form_input');
            // $this->template->load('template','user/form_input');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $id         =  $this->input->post('id',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            if(empty($password)){
                 $data  =  array(
                                    'username'=>$username);
            }
            else{
                  $data =  array(
                    //    'nama_lengkap'=>$nama,
                                    'username'=>$username,
                                    'password'=>md5($password));
            }
             $this->db->where('id_login',$id);
             $this->db->update('tb_login',$data);
             redirect('login');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_login->get_one($id)->row_array();
            $this->load->view('login/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_login',$id);
        $this->db->delete('tb_login');
        redirect('login');
    }
}