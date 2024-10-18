<?php

namespace App\Controllers;
use App\Models\SuratM;
use App\Models\KategoriM;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends BaseController
{

	public function __construct()
    {
       helper('form');
    }

	public function index()
    {
		$surat = new SuratM();
		$kat = new KategoriM();
        $data = [
			'title'=> 'Cari',
			'header'=>'Cari',
			'body'=>'layout-top-nav',
			'ctn'=>'container pt-5',
			'nav' => 'nav_home',
			'side'=>'',
			'nav_home'=>'active',
			'kat1'=>$kat->getKat1(),
            'kat2'=>$kat->getKat2(),
			'bulan'=>$surat->getMonth(),
            'tahun'=>$surat->getYear(),
        ];
		return view('cari',$data);
	}

    public function login()
    {
        $data = [
            'title'=> 'Login',
			'body'=>'layout-top-nav',
			'ctn'=>'container pt-5',
			'nav' => 'nav_home',
			'side'=>'',
			'nav_login'=>'active',
        ];
        return view('login',$data);
    }
	
	
	public function filter(){
		$ket = $this->request->getPost('ket');
		$kat1 = $this->request->getPost('kat1');
		$kat2 = $this->request->getPost('kat2');
		$cari = $this->request->getPost('cari');
		$bulan = $this->request->getPost('bulan');
		$tahun = $this->request->getPost('tahun');
		$sort = $this->request->getPost('sort');
		$surats = $this->get_surat($kat1,$kat2,$ket,$sort,$cari,$bulan,$tahun);
		$data = [
			'surats'=>$surats,
		];
		return view('surat/item',$data);
	}
	
	function get_surat($kat1,$kat2,$ket,$sort,$cari,$bulan,$tahun){
		if(strlen($ket)>0){
			$ket = $ket;
		}else{
			$ket = null;
		}
		if(strlen($kat1)>0){
			$kat1 = $kat1;
		}else{
			$kat1 = null;
		}
		if(strlen($kat2)>0){
			$kat2 = $kat2;
		}else{
			$kat2 = null;
		}
		if(strlen($cari)>0){
			$cari = $cari;
		}else{
			$cari = null;
		}
		if(strlen($bulan)>0){
			$bulan = $bulan;
		}else{
			$bulan = null;
		}
		if(strlen($tahun)>0){
			$tahun = $tahun;
		}else{
			$tahun = null;
		}
		$surat = new SuratM();
		$surat = $surat->fetch_data($ket, $kat1, $kat2, $cari, $bulan, $tahun,$sort);
		$surats = $surat->findAll();
		return $surats;
	}

	function pdf_view(){
		$ket = $this->request->getPost('ket');
		$kat1 = $this->request->getPost('kat1');
		$kat2 = $this->request->getPost('kat2');
		$cari = $this->request->getPost('cari');
		$bulan = $this->request->getPost('bulan');
		$tahun = $this->request->getPost('tahun');
		$sort = $this->request->getPost('sort');
		$surats = $this->get_surat($kat1,$kat2,$ket,$sort,$cari,$bulan,$tahun);
		$data = [
			'surats'=>$surats,
		];
		return view('ekspor/cari',$data);
	}

	function ekspor_pdf(){
		$surat = new SuratM();
		$surats = $surat->getSurat()->findAll();
		$data = [
			'surats'=>$surats,
		];

		$filename = 'Tabel Surat'.date('y-m-d-H-i-s');
		
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
		
        // load HTML content
        $dompdf->loadHtml(view('ekspor/cari',$data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
	}

	public function ekspor_excel()
	{
		$surat = new SuratM();
		$surats = $surat->getSurat()->findAll();

		$spreadsheet = new Spreadsheet();
		// tulis header/nama kolom 
		$spreadsheet->setActiveSheetIndex(0)
					->setCellValue('A1', 'No')
					->setCellValue('B1', 'Surat')
					->setCellValue('C1', 'Tanggal Surat')
					->setCellValue('D1', 'No Surat')
					->setCellValue('E1', 'Tanggal Diterima')
					->setCellValue('F1', 'Kategori 1')
					->setCellValue('G1', 'Kategori 2')
					->setCellValue('H1', 'No Agenda')
					->setCellValue('I1', 'Sifat')
					->setCellValue('J1', 'Perihal')
					->setCellValue('K1', 'Terusan')
					->setCellValue('L1', 'Tindakan')
					->setCellValue('M1', 'Catatan')
					->setCellValue('N1', 'File')
					->setCellValue('O1', 'Keterangan');
		
		$column = 2;
		$no=1;
		// tulis data mobil ke cell
		foreach($surats as $data) {
			$spreadsheet->setActiveSheetIndex(0)
						->setCellValue('A' . $column, $no)
						->setCellValue('B' . $column, $data['surat'])
						->setCellValue('C' . $column, $data['tgl_surat'])
						->setCellValue('D' . $column, $data['no_surat'])
						->setCellValue('E' . $column, $data['tgl_terima'])
						->setCellValue('F' . $column, $data['kat1'])
						->setCellValue('G' . $column, $data['kat2'])
						->setCellValue('H' . $column, $data['no_agenda'])
						->setCellValue('I' . $column, $data['sifat'])
						->setCellValue('J' . $column, $data['perihal'])
						->setCellValue('K' . $column, $data['terusan'])
						->setCellValue('L' . $column, $data['tindakan'])
						->setCellValue('M' . $column, $data['catatan'])
						->setCellValue('N' . $column, $data['file'])
						->setCellValue('O' . $column, $data['ket']);
			$column++;
			$no++;
		}
		// tulis dalam format .xlsx
		$writer = new Xlsx($spreadsheet);
		$fileName = 'Data Surat';

		// Redirect hasil generate xlsx ke web client
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename='.$fileName.'.xlsx');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}

	public function detail($id_surat){
        $surat = new SuratM();
        $data = [
			'title'=> 'Detail Surat',
			'header'=>'Detail Surat',
			'body'=>'layout-top-nav',
			'ctn'=>'container pt-5',
			'nav' => 'nav_home',
			'side'=>'',
			'nav_home'=>'active',
			'base_url'=>'home',
            'surat'=>$surat->detail($id_surat),
        ];
        return view('surat/view',$data);
    }

   

}
