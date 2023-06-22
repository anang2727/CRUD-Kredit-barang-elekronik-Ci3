<?php
class model_pegawai extends CI_Model
{

    function tampilkan_data()
    {
        return $this->db->get('tb_pegawai');
    }

    function laporan_default() {
        return $this->db->get('tb_pegawai');
    }

    function tambah()
    {
        $data = array(
            'NP' => $this->input->post('NP'),
            'AP' => $this->input->post('AP'),
            'NO_HP' => $this->input->post('NO_HP'),
            'JK' => $this->input->post('JK'),
        );
        $this->db->insert('tb_pegawai', $data);
    }

    function edit()
    {
        $id = $this->input->post('KDP');
        $data = array(
            'NP' => $this->input->post('NP'),
            'AP' => $this->input->post('AP'),
            'NO_HP' => $this->input->post('NO_HP'),
            'JK' => $this->input->post('JK'),
        );
        $this->db->where('KDP', $id);
        $this->db->update('tb_pegawai', $data);
    }

    function get_one($id)
    {
        $indeks = array('KDP' => $id);
        return $this->db->get_where('tb_pegawai', $indeks);
    }

    function delete($id)
    {
        $this->db->where('KDP', $id);
        $this->db->delete('tb_pegawai');
    }
}
