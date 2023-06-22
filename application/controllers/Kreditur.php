<?php
class kreditur extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_kreditur');
    }

    function index(){
        $data['record'] = $this->model_kreditur->tampilkan_data();
        $this->load->view('kreditur/lihat_data',$data);
    }


    function daftar(){
        $data['record'] = $this->model_kreditur->tampilkan_data();
        $this->load->view('kreditur/daftar_kreditur',$data);
    }
    
    function laporan_kreditur(){
        $data['record'] = $this->model_kreditur->tampilkan_data();
        $this->load->view('kreditur/laporan_kreditur',$data);
    }

    function tambah() {
        if(isset($_POST['submit'])){
            $this->model_kreditur->tambah();
            redirect('kreditur');
        }
        else {
            $this->load->view('kreditur/form_input');
        }
    }

    function edit() {
        if(isset($_POST['submit'])){
            $this->model_kreditur->edit();
            redirect('kreditur');
        }
        else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model_kreditur->get_one($id)->row_array();
            $this->load->view('kreditur/form_edit',$data);
        }
    }
    // 
    function detail() {
        if(isset($_POST['submit'])){
            $this->model_kreditur->edit();
            redirect('kreditur');
        }
        else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model_kreditur->get_one($id)->row_array();
            $this->load->view('kreditur/lihat_detail',$data);
        }
    }
    // 



    function delete() {
        $id = $this->uri->segment(3);
        $this->model_kreditur->delete($id);
        redirect('kreditur');
        }   
    

        function pdf()
        {
            $this->load->library('cfpdf');
            $pdf=new FPDF('P','mm','A4');
            $pdf->AddPage();
            $pdf->SetFont('Arial','B','L');
            $pdf->SetFontSize(14);
            $pdf->Text(10, 10, 'DAFTAR KREDITUR');
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
            $data['kreditur'] = $this->model_kreditur->tampilkan_data("tb_kreditur")->result();
            $this->load->view('cetak_kreditur',$data);
        }

        function excel()
        {
            header("Content-type=appalication/vnd.ms-excel");
            header("content-disposition:attachment;filename=laporantercatat.xls");
            $data['record']=  $this->model_kreditur->laporan_default();
            $this->load->view('laporan/excel',$data);
        }

        function word()
        {
            header("Content-type=appalication/vnd.ms-word");
            header("content-disposition:attachment;filename=laporantercatat.doc");
            $data['record']=  $this->model_kreditur->laporan_default();
            $this->load->view('laporan/word',$data);
        }

}