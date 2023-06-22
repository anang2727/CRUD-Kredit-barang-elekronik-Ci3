<?php
class pegawai extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_pegawai');
    }

    function index(){
        $data['record'] = $this->model_pegawai->tampilkan_data();
        $this->load->view('pegawai/lihat_data',$data);
    }

    function tambah() {
        if(isset($_POST['submit'])){
            $this->model_pegawai->tambah();
            redirect('pegawai');
        }
        else {
            $this->load->view('pegawai/form_input');
        }
    }

    function edit() {
        if(isset($_POST['submit'])){
            $this->model_pegawai->edit();
            redirect('pegawai');
        }
        else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model_pegawai->get_one($id)->row_array();
            $this->load->view('pegawai/form_edit',$data);
        }
    }
    
    function detail() {
        if(isset($_POST['submit'])){
            $this->model_pegawai->edit();
            redirect('pegawai');
        }
        else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model_pegawai->get_one($id)->row_array();
            $this->load->view('pegawai/form_edit',$data);
        }
    }
    function delete() {
        $id = $this->uri->segment(3);
        $this->model_pegawai->delete($id);
        redirect('pegawai');
        }   


        
        function pdf()
        {
            $this->load->library('cfpdf');
            $pdf=new FPDF('P','mm','A4');
            $pdf->AddPage();
            $pdf->SetFont('Arial','B','L');
            $pdf->SetFontSize(14);
            $pdf->Text(10, 10, 'DAFTAR PEGAWAI','C');
            $pdf->SetFont('Arial','B','L');
            $pdf->SetFontSize(10);
            $pdf->Cell(10, 10,'','',1);
            $pdf->Cell(10, 7, 'No', 1,0);
            $pdf->Cell(27, 7, 'Kode Kreditur', 1,0);
            $pdf->Cell(30, 7, 'Nama pegawai', 1,0);
            $pdf->Cell(30, 7, 'Alamat', 1,0);
            $pdf->Cell(30, 7, 'Jenis Kelamin', 1,0);
            $pdf->Cell(30, 7, 'No HP', 1,1);
            // tampilkan dari database
            $pdf->SetFont('Arial','','L');
            $data=  $this->model_pegawai->laporan_default();
            $no=1;
            // $total=0;
            foreach ($data->result() as $r)
            {
                $pdf->Cell(10, 7, $no, 1,0);
                $pdf->Cell(27, 7, $r->KDP, 1,0);
                $pdf->Cell(30, 7, $r->NP, 1,0);
                $pdf->Cell(30, 7, $r->AP, 1,0);
                $pdf->Cell(30, 7, $r->JK, 1,0);
                $pdf->Cell(30, 7, $r->NO_HP, 1,1);
                $no++;
          
            }
            // end
            // $pdf->Cell(67,7,'Total',1,0,'R');
            // $pdf->Cell(38,7,$total,1,0);
            $pdf->Output();
        }


        function cetak() {
            $data['pegawai'] = $this->model_pegawai->tampilkan_data("tb_pegawai")->result();
            $this->load->view('cetak_pegawai',$data);
        }

        function excel()
        {
            header("Content-type=appalication/vnd.ms-excel");
            header("content-disposition:attachment;filename=laporantercatat.xls");
            $data['record']=  $this->model_pegawai->laporan_default();
            $this->load->view('pegawai/excel',$data);
        }

        function word()
        {
            header("Content-type=appalication/vnd.ms-word");
            header("content-disposition:attachment;filename=laporantercatat.doc");
            $data['record']=  $this->model_pegawai->laporan_default();
            $this->load->view('pegawai/word',$data);
        }
    }