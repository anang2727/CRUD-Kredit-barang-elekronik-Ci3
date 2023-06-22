<?php
class auth extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_login');
    }
    
    function login()
    {
        if(isset($_POST['submit'])){
            
            // proses login disini
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $hasil=  $this->model_login->login($username,$password);
            if($hasil==1)
            {
                // update last login
                $this->db->where('username',$username);
                $this->db->update('tb_login',array('last_login'=>date('Y-m-d')));
                $this->session->set_userdata(array('status_login'=>'oke','username'=>$username));
                redirect('dashboard');
            }
            else{
                redirect('auth/login');
            }
        }
        else{
            //$this->load->view('form_login2');
            chek_session_login();
            $this->load->view('form_login');
        }
    }


    function tambah()
    {
        if (isset($_POST['submit'])) {
            $username   =  $this->input->post('username', true);
            $password   =  $this->input->post('password', true);
            $data       =  array(
                'username' => $username,
                'password' => md5($password),
                
            );

            $this->db->insert('tb_login', $data);
            redirect('login');
        } else {
            $this->load->view('login/form_input');

        }
    }

    function edit()
    {
        if (isset($_POST['submit'])) {
            $id         =  $this->input->post('id',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            if(empty($password)){
                 $data  =  array(   'username'=>$username);
            }
            else{
                  $data =  array(   
                                    'username'=>$username,
                                    'password'=>md5($password),
            );
            }
             $this->db->where('id_login',$id);
             $this->db->update('tb_login',$data);
             redirect('login');
        }else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model_login->get_one($id)->row_array();
            $this->load->view('login/form_edit',$data);
        }
    }



    function delete($id)
    {
        $id = $this->uri->segment(3);
        $this->db->where('id_login', $id);
        $this->db->delete('tb_login');
        redirect('login');
    }
    
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}