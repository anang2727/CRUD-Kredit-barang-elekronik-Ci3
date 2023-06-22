<?php
class model_kreditur extends CI_Model
{

    function tampilkan_data()
    {
        return $this->db->get('tb_kreditur');
    }

    function tambah()
    {
        $data = array(
            'NMK' => $this->input->post('NMK'),
            'AK' => $this->input->post('AK'),
            'PEKER' => $this->input->post('PEKER'),
            'NO_HP' => $this->input->post('NO_HP'),
        );
        $this->db->insert('tb_kreditur', $data);
    }

    function edit()
    {
        $id = $this->input->post('NK');
        $data = array(
            'NMK' => $this->input->post('NMK'),
            'AK' => $this->input->post('AK'),
            'PEKER' => $this->input->post('PEKER'),
            'NO_HP' => $this->input->post('NO_HP'),
        );
        $this->db->where('NK', $id);
        $this->db->update('tb_kreditur', $data);
    }
    // ================================================================
    function detail()
    {
        $id = $this->input->post('NK');
        $data = array(
            'NMK' => $this->input->post('NMK'),
            'AK' => $this->input->post('AK'),
            'PEKER' => $this->input->post('PEKER'),
            'NO_HP' => $this->input->post('NO_HP'),
        );
        $this->db->where('NK', $id);
        $this->db->update('tb_kreditur', $data);
    }

    function get_one($id)
    {
        $indeks = array('NK' => $id);
        return $this->db->get_where('tb_kreditur', $indeks);
    }

    function delete($id)
    {
        $this->db->where('NK', $id);
        $this->db->delete('tb_kreditur');
    }

    function laporan_default()
    {
        return $this->db->get('tb_kreditur');
    }

    function login($username, $password)
    {
            $chek =  $this->db->get_where('tb_petugas', array('username' => $username, 'password' =>  md5($password)));
            if ($chek->num_rows() > 0) {
                    return 1;
            } else {
                    return 0;
            }
    }
    
}
