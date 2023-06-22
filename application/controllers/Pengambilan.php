<?php
class pengambilan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_pengambilan');
        $this->load->model('model_elektronik');
        $this->load->model('model_uang_muka');
        $this->load->model('model_uang_angsuran');
        $this->load->model('model_lama_angsuran');
        $this->load->model('model_kreditur');
    }

    function index()
    {
        $data['record'] = $this->model_pengambilan->getDataPengambilan();
        $this->load->view('pengambilan/lihat_data', $data);
    }

    function tambah()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'NAM' => $this->input->post('NAM'),
                'TBTP' => $this->input->post('TBTP'),
                'JML' => $this->input->post('JML'),
                'KET' => $this->input->post('KET'),
                'NK' => $this->input->post('NK'),
                'KE' => $this->input->post('KE'),
                'KA' => $this->input->post('KA'),
                'KUA' => $this->input->post('KUA'),
                'KL' => $this->input->post('KL')
            );

            $this->db->insert('tb_pengambilan', $data);
            redirect('pengambilan');
        } else {
            $this->load->model('model_elektronik');
            $this->load->model('model_uang_muka');
            $this->load->model('model_uang_angsuran');
            $this->load->model('model_lama_angsuran');
            $this->load->model('model_kreditur');
            $data['rec_elektronik'] = $this->model_elektronik->getDataElektronik();
            $data['rec_uang_muka'] = $this->model_uang_muka->tampilkan_data();
            $data['rec_uang_angsuran'] = $this->model_uang_angsuran->tampilkan_data();
            $data['rec_lama_angsuran'] = $this->model_lama_angsuran->tampilkan_data();
            $data['rec_kreditur'] = $this->model_kreditur->tampilkan_data();
            $data['rec_pengambilan'] = $this->model_pengambilan->getDataPengambilan();
            $this->load->view('pengambilan/form_input', $data);
        }
    }

    function edit()
    {
        if (isset($_POST['submit'])) {
            $key = $this->input->post('id');
            $data = array(
                'NAM' => $this->input->post('NAM'),
                'TBTP' => $this->input->post('TBTP'),
                'JML' => $this->input->post('JML'),
                'KET' => $this->input->post('KET'),
                'NK' => $this->input->post('NK'),
                'KE' => $this->input->post('KE'),
                'KA' => $this->input->post('KA'),
                'KUA' => $this->input->post('KUA'),
                'KL' => $this->input->post('KL')
            );
            $this->db->where('NAM', $key);
            $this->db->update('tb_pengambilan', $data);
            redirect('pengambilan');
        } else {
            $data['rec_pengambilan'] = $this->model_pengambilan->getDataPengambilan();
            $data['rec_uang_angsuran'] = $this->model_uang_angsuran->tampilkan_data();
            $data['rec_lama_angsuran'] = $this->model_lama_angsuran->tampilkan_data();
            $data['rec_kreditur'] = $this->model_kreditur->tampilkan_data();
            $data['rec_uang_muka'] = $this->model_uang_muka->tampilkan_data();
            $data['rec_elektronik'] = $this->model_elektronik->getDataElektronik();

            $id = $this->uri->segment(3);
            $data['rec_pengambilan'] = $this->model_pengambilan->getOnePengambilan($id)->row_array();
            $this->load->view('pengambilan/form_edit', $data);
        }
    }
    
    function detail()
    {
        if (isset($_POST['submit'])) {
            $key = $this->input->post('id');
            $data = array(
                'NAM' => $this->input->post('NAM'),
                'TBTP' => $this->input->post('TBTP'),
                'JML' => $this->input->post('JML'),
                'KET' => $this->input->post('KET'),
                'NK' => $this->input->post('NK'),
                'KE' => $this->input->post('KE'),
                'KA' => $this->input->post('KA'),
                'KUA' => $this->input->post('KUA'),
                'KL' => $this->input->post('KL')
            );
            $this->db->where('NAM', $key);
            $this->db->update('tb_pengambilan', $data);
            redirect('pengambilan');
        } else {
            $data['rec_pengambilan'] = $this->model_pengambilan->getDataPengambilan();
            $data['rec_uang_angsuran'] = $this->model_uang_angsuran->tampilkan_data();
            $data['rec_lama_angsuran'] = $this->model_lama_angsuran->tampilkan_data();
            $data['rec_kreditur'] = $this->model_kreditur->tampilkan_data();
            $data['rec_uang_muka'] = $this->model_uang_muka->tampilkan_data();
            $data['rec_elektronik'] = $this->model_elektronik->getDataElektronik();

            $id = $this->uri->segment(3);
            $data['rec_pengambilan'] = $this->model_pengambilan->getOnePengambilan($id)->row_array();
            $this->load->view('pengambilan/form_edit', $data);
        }
    }
    function delete($id)
    {
        $id = $this->uri->segment(3);
        $this->db->where('NAM', $id);
        $this->db->delete('tb_pengambilan');
        redirect('pengambilan');
    }
}
