<?php
class elektronik extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_elektronik');
        $this->load->model('model_lama_angsuran');
        $this->load->model('model_uang_angsuran');
        $this->load->model('model_uang_muka');
    }

    function index()
    {
        $data['record'] = $this->model_elektronik->getDataElektronik();
        $this->load->view('elektronik/lihat_data', $data);
    }

    function daftar()
    {
        $data['record'] = $this->model_elektronik->getDataElektronik();
        $this->load->view('elektronik/daftar_elektronik', $data);
    }

    function brosur(){
        $data['record'] = $this->model_elektronik->getDataElektronik();
        $this->load->view('elektronik/brosur_elektronik', $data);
    }

    function tambah()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'KE' => $this->input->post('KE'),
                'NE' => $this->input->post('NE'),
                'MEREK' => $this->input->post('MEREK'),
                'SATUAN' => $this->input->post('SATUAN'),
                'JENIS' => $this->input->post('JENIS'),
                'KUA' => $this->input->post('KUA'),
                'KA' => $this->input->post('KA'),
                'KL' => $this->input->post('KL')
            );

            $this->db->insert('tb_elektronik', $data);
            redirect('elektronik');
        } else {
            $this->load->model('model_uang_angsuran');
            $this->load->model('model_uang_muka');
            $this->load->model('model_lama_angsuran');
            $data['rec_elektronik'] = $this->model_elektronik->getDataElektronik();
            $data['rec_uang_angsuran'] = $this->model_uang_angsuran->tampilkan_data();
            $data['rec_uang_muka'] = $this->model_uang_muka->tampilkan_data();
            $data['rec_lama_angsuran'] = $this->model_lama_angsuran->tampilkan_data();
            $this->load->view('elektronik/form_input', $data);
        }
    }

    function edit()
    {
        if (isset($_POST['submit'])) {
            $key = $this->input->post('id');
            $data = array(
                'KE' => $this->input->post('KE'),
                'NE' => $this->input->post('NE'),
                'MEREK' => $this->input->post('MEREK'),
                'SATUAN' => $this->input->post('SATUAN'),
                'JENIS' => $this->input->post('JENIS'),
                'KUA' => $this->input->post('KUA'),
                'KA' => $this->input->post('KA'),
                'KL' => $this->input->post('KL')
            );
            $this->db->where('KE', $key);
            $this->db->update('tb_elektronik', $data);
            redirect('elektronik');
        } else {
            $data['rec_elektronik'] = $this->model_elektronik->getDataElektronik();
            $data['rec_uang_angsuran'] = $this->model_uang_angsuran->tampilkan_data();
            $data['rec_lama_angsuran'] = $this->model_lama_angsuran->tampilkan_data();
            $data['rec_uang_muka'] = $this->model_uang_muka->tampilkan_data();

            $id = $this->uri->segment(3);
            $data['rec_elektronik'] = $this->model_elektronik->getOneElektronik($id)->row_array();
            $this->load->view('elektronik/form_edit', $data);
        }
    }

    function delete($id)
    {
        $id = $this->uri->segment(3);
        $this->db->where('KE', $id);
        $this->db->delete('tb_elektronik');
        redirect('elektronik');
    }

    function pdf()
    {
        $this->load->library('cfpdf');
        $pdf=new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(14);
        $pdf->Text(10, 10, 'DAFTAR ELEKTRONIK');
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Cell(10, 10,'','',1);
        $pdf->Cell(10, 7, 'No', 1,0);
        $pdf->Cell(27, 7, 'Kode Eleltronik', 1,0);
        $pdf->Cell(30, 7, 'Nama Elektronik', 1,0);
        $pdf->Cell(25, 7, 'Merek', 1,0);
        $pdf->Cell(15, 7, 'Satuan', 1,0);
        $pdf->Cell(23, 7, 'Jenis', 1,0);
        $pdf->Cell(25, 7, 'Uang Muka', 1,0);
        $pdf->Cell(20, 7, 'Lama', 1,0);
        $pdf->Cell(25, 7, 'Uang Angsuran', 1,1);
        // tampilkan dari database
        $pdf->SetFont('Arial','','L');
        $data=  $this->model_elektronik->laporan_default();
        $no=1;
        // $total=0;
        foreach ($data->result() as $r)
        {
            $pdf->Cell(10, 7, $no, 1,0);
            $pdf->Cell(27, 7, $r->KE, 1,0);
            $pdf->Cell(30, 7, $r->NE, 1,0);
            $pdf->Cell(25, 7, $r->MEREK, 1,0);
            $pdf->Cell(15, 7, $r->SATUAN, 1,0);
            $pdf->Cell(23, 7, $r->JENIS, 1,0);
            $pdf->Cell(25, 7, $r->UM, 1,0);
            $pdf->Cell(20, 7, $r->LAMA, 1,0);
            $pdf->Cell(25, 7, $r->UA, 1,1);
            $no++;
      
        }
        // end
        // $pdf->Cell(67,7,'Total',1,0,'R');
        // $pdf->Cell(38,7,$total,1,0);
        $pdf->Output();
    }


    function cetak() {
        $data['elektronik'] = $this->model_elektronik->getDataElektronik("tb_elektronik")->result();
        $this->load->view('eletronik/daftar_elektronik',$data);
    }

    function excel()
    {
        header("Content-type=appalication/vnd.ms-excel");
        header("content-disposition:attachment;filename=laporantercatat.xls");
        $data['record']=  $this->model_elektronik->laporan_default();
        $this->load->view('elektronik/daftar_elektronik',$data);
    }

    function word()
    {
        header("Content-type=appalication/vnd.ms-word");
        header("content-disposition:attachment;filename=laporantercatat.doc");
        $data['record']=  $this->model_kreditur->laporan_default();
        $this->load->view('elektronik/daftar_elektronik',$data);
    }


}
