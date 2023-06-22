<?php
class model_uang_muka extends CI_Model{

function tampilkan_data(){
    return $this->db->get('tb_uang_muka');
}

function tambah(){
    $data=array(
    'UM'=>$this->input->post('UM'),
);
    $this->db->insert('tb_uang_muka',$data);
}

function edit(){
    $id= $this->input->post('KUA');
    $data=array(
        'UM' => $this->input->post('UM'),
    );
    $this->db->where('KUA',$id);
    $this->db->update('tb_uang_muka',$data);   
}

function get_one($id){
    $indeks= array('KUA'=>$id);
    return $this->db->get_where('tb_uang_muka',$indeks);
}

function delete($id){
    $this->db->where('KUA',$id);
    $this->db->delete('tb_uang_muka');
}

}