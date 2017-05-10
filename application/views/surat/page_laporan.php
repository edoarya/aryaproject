<?php

$this->load->library('fpdf/fpdf');
   $this->fpdf->FPDF("L","cm","A4");
$this->fpdf->SetMargins(1,1,1);
$this->fpdf->AliasNbPages();
$this->fpdf->AddPage();
$this->fpdf->SetFont('Times','B',12); 
$this->fpdf->Cell(19,0.7,'Judul',0,0,'C'); 
$this->fpdf->Ln(); $this->fpdf->Ln();
$this->fpdf->SetFont('helvetica','',10); 
$this->fpdf->Cell(19,0.5,'Sub judul',0,0,'C'); 
$this->fpdf->Ln(); 
$this->fpdf->Cell(19,0.5,'subtitle',0,0,'C'); 
$this->fpdf->Line(1,3.5,20,3.5); 
$this->fpdf->Line(1,3.55,20,3.55);
$this->fpdf->Ln(1); 
$this->fpdf->SetFont('Times','B',12); 
$this->fpdf->Cell(19,1,'Header',0,0,'C'); /* setting header table */ 
$this->fpdf->Ln(1); 
$this->fpdf->SetFont('Times','B',12); 
$this->fpdf->Cell(6 , 1, 'ID Lokasi' , 1, 'LR', 'L'); 
$this->fpdf->Cell(5 , 1, 'Latitude' , 1, 'LR', 'L'); 
$this->fpdf->Cell(5 , 1, 'Longitude' , 1, 'LR', 'L'); 
$this->fpdf->Cell(3 , 1, 'Hasil' , 1, 'LR', 'L'); /* generate hasil query disini */ 
    foreach($hasil as $data) { 
        $this->fpdf->Ln(); 
        $this->fpdf->SetFont('Times','',12); 
        $this->fpdf->Cell(6 , 0.7, $data->id , 1, 'LR', 'L'); 
        $this->fpdf->Cell(5 , 0.7, $data->lati , 1, 'LR', 'L'); 
        $this->fpdf->Cell(5 , 0.7, $data->longi , 1, 'LR', 'L'); //
        $this->fpdf->Cell(10 , 0.7, $data->alamat , 1, 'LR', 'L'); 
        $this->fpdf->Cell(3 , 0.7, $data->nilai , 1, 'LR', 'L'); 
        }
        $this->fpdf->SetY(-3); 
        $this->fpdf->SetFont('Times','',10); 
        $this->fpdf->Cell(9.5, 0.5, 'Printed on : '.date('d/m/Y H:i').' | Created by : M. Fadli Prathama',0,'LR','L');
        $this->fpdf->Cell(9.5, 0.5, 'Page '.$this->fpdf->PageNo().'/{nb}',0,0,'R');
        $this->fpdf->Output("laporan_seleksi_calok_atm.pdf","I");
?>