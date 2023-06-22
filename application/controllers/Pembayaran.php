<?php
class pembayaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_pembayaran');
        $this->load->model('model_pengambilan');
        $this->load->model('model_pegawai');
        $this->load->model('model_kreditur');
    }

    function index()
    {
        $data['record'] = $this->model_pembayaran->getDatapembayaran();
        $this->load->view('pembayaran/lihat_data', $data);
    }

    function kartu()
    {
        $data['record'] = $this->model_pembayaran->getDatapembayaran();
        $this->load->view('pembayaran/kartu_bayar', $data);
    }
    function rekapitulasi()
    {
        $data['record'] = $this->model_pembayaran->getDatapembayaran();
        $this->load->view('pembayaran/rekapitulasi', $data);
    }

    function tambah()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'NB' => $this->input->post('NB'),
                'TBTP' => $this->input->post('TBTP'),
                'JMA' => $this->input->post('JMA'),
                'AA' => $this->input->post('AA'),
                'NAM' => $this->input->post('NAM'),
                'KDP' => $this->input->post('KDP'),
                'NK' => $this->input->post('NK')
            );

            $this->db->insert('tb_pembayaran', $data);
            redirect('pembayaran');
        } else {
            $this->load->model('model_pengambilan');
            $this->load->model('model_pegawai');
            $this->load->model('model_kreditur');
            $data['rec_pembayaran'] = $this->model_pembayaran->getDatapembayaran();
            $data['rec_pegawai'] = $this->model_pegawai->tampilkan_data();
            $data['rec_kreditur'] = $this->model_kreditur->tampilkan_data();
            $data['rec_pengambilan'] = $this->model_pengambilan->getDataPengambilan();
            $this->load->view('pembayaran/form_input', $data);
        }
    }

    // function edit()
    // {
    //     if (isset($_POST['submit'])) {
    //         $key = $this->input->post('id');
    //         $data = array(
    //             'NB' => $this->input->post('NB'),
    //             'TBTP' => $this->input->post('TBTP'),
    //             'JMA' => $this->input->post('JMA'),
    //             'AA' => $this->input->post('AA'),
    //             'NAM' => $this->input->post('NAM'),
    //             'KDP' => $this->input->post('KDP'),
    //             'NK' => $this->input->post('NK')
    //         );
    //         $this->db->where('NB', $key);
    //         $this->db->update('tb_pembayaran', $data);
    //         redirect('pembayaran');
    //     } else {
    //         $data['rec_pembayaran'] = $this->model_pembayaran->getDataPembayaran();
    //         $data['rec_pegawai'] = $this->model_pegawai->tampilkan_data();
    //         $data['rec_kreditur'] = $this->model_kreditur->tampilkan_data();
    //         $data['rec_pengambilan'] = $this->model_pengambilan->getDataPengambilan();

    //         $id = $this->uri->segment(3);
    //         $data['rec_pembayaran'] = $this->model_pembayaran->getOnePembayaran($id)->row_array();
    //         $this->load->view('pembayaran/form_edit', $data);
    //     }
    // }

         
    function edit() {
        if(isset($_POST['submit'])){ 
        $key = $this->input->post('id_pembayaran');
        $data = array( 
                'NB' => $this->input->post('NB'),
                'TBTP' => $this->input->post('TBTP'),
                'JMA' => $this->input->post('JMA'),
                'AA' => $this->input->post('AA'),
                'NAM' => $this->input->post('NAM'),
                'KDP' => $this->input->post('KDP'),
                'NK' => $this->input->post('NK'));
                $this->db->where('NB',$key);
                $this->db->update('tb_pembayaran', $data);
                redirect('pembayaran');
        } else {
            $id = $this->uri->segment(3);
            $data['rec_pegawai'] = $this->model_pegawai->tampilkan_data();
            $data['rec_kreditur'] = $this->model_kreditur->tampilkan_data();
            $data['rec_pengambilan'] = $this->model_pengambilan->getDataPengambilan();
            // $data['rec_pembayaran']=$this->model_pembayaran->get_one($id)->row_array();
            $data['rec_pembayaran'] = $this->model_pembayaran->getOnePembayaran($id)->row_array();
            $this->load->view('pembayaran/form_edit',$data);
       }
}

    
    function detail()
    {
        if (isset($_POST['submit'])) {
            $key = $this->input->post('id');
            $data = array(
                'NB' => $this->input->post('NB'),
                'TBTP' => $this->input->post('TBTP'),
                'JMA' => $this->input->post('JMA'),
                'AA' => $this->input->post('AA'),
                'NAM' => $this->input->post('NAM'),
                'KDP' => $this->input->post('KDP'),
                'NK' => $this->input->post('NK')
            );
            $this->db->where('NB', $key);
            $this->db->update('tb_pembayaran', $data);
            redirect('pembayaran');
        } else {
            $data['rec_pembayaran'] = $this->model_pembayaran->getDataPembayaran();
            $data['rec_pegawai'] = $this->model_pegawai->tampilkan_data();
            $data['rec_kreditur'] = $this->model_kreditur->tampilkan_data();
            $data['rec_pengambilan'] = $this->model_pengambilan->getDataPengambilan();

            $id = $this->uri->segment(3);
            $data['rec_pembayaran'] = $this->model_pembayaran->getOnePembayaran($id)->row_array();
            $this->load->view('pembayaran/lihat_detail', $data);
        }
    }
    function delete($id)
    {
        $id = $this->uri->segment(3);
        $this->db->where('NB', $id);
        $this->db->delete('tb_pembayaran');
        redirect('pembayaran');
    }

    function pdf()
    {
        $this->load->library('cfpdf');
        $pdf=new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(14);
        $pdf->Text(10, 10, 'KARTU KREDITUR');
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Cell(10, 10,'','',1);
        $pdf->Cell(10, 7, 'No', 1,0);
        $pdf->Cell(27, 7, 'Nama Kreditur', 1,0);
        $pdf->Cell(30, 7, 'Alamat', 1,0);
        $pdf->Cell(30, 7, 'Pekerjaan', 1,0);
        $pdf->Cell(30, 7, 'No HP', 1,1);
        // tampilkan dari database
        $pdf->SetFont('Arial','','L');
        $data=  $this->model_kreditur->laporan_default();
        $no=1;
        // $total=0;
        foreach ($data->result() as $r)
        {
            $pdf->Cell(10, 7, $no, 1,0);
            $pdf->Cell(27, 7, $r->NMK, 1,0);
            $pdf->Cell(30, 7, $r->AK, 1,0);
            $pdf->Cell(30, 7, $r->PEKER, 1,0);
            $pdf->Cell(30, 7, $r->NO_HP, 1,1);
            $no++;
      
        }
        // end
        // $pdf->Cell(67,7,'Total',1,0,'R');
        // $pdf->Cell(38,7,$total,1,0);
        $pdf->Output();
    }


    function cetak() {
        $data['kreditur'] = $this->model_pembayaran->getDataPembayaran("tb_pembayaran")->result();
        $this->load->view('laporan/kartu_bayar',$data);
    }

    function excel()
    {
        header("Content-type=appalication/vnd.ms-excel");
        header("content-disposition:attachment;filename=laporanpembayaran.xls");
        $data['record']=  $this->model_pembayaran->laporan_default();
        $this->load->view('pembayaran/excel_bayar',$data);
    }

    function word()
    {
        header("Content-type=appalication/vnd.ms-word");
        header("content-disposition:attachment;filename=laporanpembayaran.doc");
        $data['record']=  $this->model_pembayaran->laporan_default();
        $this->load->view('pembayaran/word_bayar',$data);
    }

}
