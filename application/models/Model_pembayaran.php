<?php
class model_pembayaran extends CI_Model
{

    function getDataPembayaran()
    {
        $query = "SELECT * FROM tb_pembayaran as tp, tb_pegawai as tpeg, tb_kreditur AS tk, tb_pengambilan AS tpen
        WHERE tp.KDP = tpeg.KDP AND
              tp.NK = tk.NK AND 
              tp.NAM = tpen.NAM
        ";
        return $this->db->query($query);
    }


    function getOnePembayaran($id)
    {
        $query = "SELECT * FROM tb_pembayaran as tp, tb_pegawai as tpeg, tb_kreditur AS tk, tb_pengambilan AS tpen
        WHERE tp.KDP = tpeg.KDP AND
              tp.NK = tk.NK AND 
              tp.NAM = tpen.NAM
             AND tp.NB ='" . $id . "'";
        return $this->db->query($query);
    }

    function get_one($id)
    {
        $indeks = array('NB' => $id);
        return $this->db->get_where('tb_pembayaran', $indeks);
    }

    function delete($id)
    {
        $this->db->where('NB', $id);
        $this->db->delete('tb_pembayaran');
    }

    function laporan_default()
    {
        $query = "SELECT * FROM tb_pembayaran as tp, tb_pegawai as tpeg, tb_kreditur AS tk, tb_pengambilan AS tpen
        WHERE tp.KDP = tpeg.KDP AND
              tp.NK = tk.NK AND 
              tp.NAM = tpen.NAM
        ";
        return $this->db->query($query);
    }
}
