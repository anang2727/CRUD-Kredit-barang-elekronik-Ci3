<?php
class model_elektronik extends CI_Model
{

    function getDataElektronik()
    {
        $query = "SELECT * FROM tb_elektronik as te, tb_uang_angsuran as tua, tb_lama_angsuran as tla, tb_uang_muka as tum 
        WHERE te.KL = tla.KL AND
            te.KA = tua.KA AND
            te.KUA = tum.KUA
        ";
        return $this->db->query($query);
    }

    function Laporan_default()
    {
        $query = "SELECT * FROM tb_elektronik as te, tb_uang_angsuran as tua, tb_lama_angsuran as tla, tb_uang_muka as tum 
        WHERE te.KL = tla.KL AND
            te.KA = tua.KA AND
            te.KUA = tum.KUA
        ";
        return $this->db->query($query);
    }


    function getOneElektronik($id)
    {
        $query = "SELECT * FROM tb_elektronik as te, tb_uang_angsuran as tua, tb_lama_angsuran as tla, tb_uang_muka as tum 
        WHERE te.KL = tla.KL AND
            te.KA = tua.KA AND
            te.KUA = tum.KUA
             AND te.KE ='" . $id . "'";
        return $this->db->query($query);
    }

    function get_one($id)
    {
        $indeks = array('KE' => $id);
        return $this->db->get_where('tb_elektronik', $indeks);
    }

    function delete($id)
    {
        $this->db->where('KE', $id);
        $this->db->delete('tb_elektronik');
    }

}
