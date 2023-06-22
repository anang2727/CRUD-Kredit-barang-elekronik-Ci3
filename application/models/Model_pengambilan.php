<?php
class model_pengambilan extends CI_Model
{

    function getDataPengambilan()
    {
        $query = "SELECT * FROM tb_pengambilan as tpeng, tb_kreditur as tk , tb_elektronik as te, tb_uang_angsuran as tua, tb_uang_muka AS tum, tb_lama_angsuran AS tl
        WHERE tpeng.NK = tk.NK AND 
        tpeng.KE = te.KE AND 
        tpeng.KA = tua.KA AND 
        tpeng.KUA = tum.KUA AND
        tpeng.KL = tl.KL
        ";
        return $this->db->query($query);
    }


    function getOnePengambilan($id)
    {
        $query = "SELECT * FROM tb_pengambilan as tpeng, tb_kreditur as tk , tb_elektronik as te, tb_uang_angsuran as tua, tb_uang_muka AS tum, tb_lama_angsuran AS tl
        WHERE tpeng.NK = tk.NK AND 
        tpeng.KE = te.KE AND 
        tpeng.KA = tua.KA AND 
        tpeng.KUA = tum.KUA AND
        tpeng.KL = tl.KL
             AND tpeng.NAM ='" . $id . "'";
        return $this->db->query($query);
    }

    function get_one($id)
    {
        $indeks = array('NAM' => $id);
        return $this->db->get_where('tb_pengambilan', $indeks);
    }

    function delete($id)
    {
        $this->db->where('NAM', $id);
        $this->db->delete('tb_pengambilan');
    }
}
