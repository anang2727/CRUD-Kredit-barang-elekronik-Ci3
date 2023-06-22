<?php
class model_login extends CI_Model
{



    function login($username, $password)
    {
        $chek =  $this->db->get_where('tb_login', array('username' => $username, 'password' =>  md5($password)));
        if ($chek->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }



    function tampildata()
    {
        return $this->db->get('tb_login');
    }

    function get_one($id)
    {
        $param  =   array('id_login' => $id);
        return $this->db->get_where('tb_login', $param);
    }
}
