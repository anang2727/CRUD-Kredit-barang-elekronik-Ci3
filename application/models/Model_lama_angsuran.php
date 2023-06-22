<?php
class model_lama_angsuran extends CI_Model{

function tampilkan_data(){
    return $this->db->get('tb_lama_angsuran');
}

function tambah(){
    $data=array(
    'LAMA'=>$this->input->post('LAMA'),
);
    $this->db->insert('tb_lama_angsuran',$data);
}

function edit(){
    $id= $this->input->post('KL');
    $data=array(
        'LAMA' => $this->input->post('LAMA'),
    );
    $this->db->where('KL',$id);
    $this->db->update('tb_lama_angsuran',$data);   
}

function get_one($id){
    $indeks= array('KL'=>$id);
    return $this->db->get_where('tb_lama_angsuran',$indeks);
}

function delete($id){
    $this->db->where('KL',$id);
    $this->db->delete('tb_lama_angsuran');
}

}