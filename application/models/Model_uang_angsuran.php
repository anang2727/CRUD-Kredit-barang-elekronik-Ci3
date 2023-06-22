<?php
class model_uang_angsuran extends CI_Model{

function tampilkan_data(){
    return $this->db->get('tb_uang_angsuran');
}

function tambah(){
    $data=array(
    'UA'=>$this->input->post('UA'),
);
    $this->db->insert('tb_uang_angsuran',$data);
}

function edit(){
    $id= $this->input->post('KA');
    $data=array(
        'UA' => $this->input->post('UA'),
    );
    $this->db->where('KA',$id);
    $this->db->update('tb_uang_angsuran',$data);   
}

function get_one($id){
    $indeks= array('KA'=>$id);
    return $this->db->get_where('tb_uang_angsuran',$indeks);
}

function delete($id){
    $this->db->where('KA',$id);
    $this->db->delete('tb_uang_angsuran');
}

}