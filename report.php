<?php
// Include the main TCPDF library (search for installation path).
require_once('library/tcpdf.php');

class PDF extends TCPDF {
    public function Header(){
        $imageFile = K_PATH_IMAGES.'deped_logo.png';
        $this->Image($imageFile, 40, 7, 20, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $this->Ln(); //font name size style
        $this->SetFont('helvetica','BI',7);
        $this->Cell(0,3,'Civil Service form No.6', 0, 1, '');
        $this->Cell(0,3,'Revised 2020', 0, 1, '');
        $this->SetFont('helvetica','B',9);
        //189 is the total width for A4 page, height, border, line,
        //Cell($w, $h=0, $txt='', $border=0 $ln=0, $align='', $fill=0, $link='', $stretched=0, $ignore_min_height=false, $calign='T', $valign='M')
        $this->Cell(0,3,'Republic of the Philippines', 0, 1, 'C');
        $this->SetFont('helvetica','BI',9);
        $this->Cell(0,3,'Department of Education', 0, 1, 'C');
        $this->Cell(0,3,'Region I', 0, 1, 'C');
        $this->Cell(0,3,'SCHOOLS DIVISION OFFICE I PANGASINAN', 0, 1, 'C');
        $this->SetFont('helvetica','BI',6);
        $this->Cell(0,3,'', 0, 1, 'C');
        $this->SetFont('helvetica','B',16);
        $this->Cell(0,3,'APPLICATION FOR LEAVE', 0, 1, 'C');
        $this->SetFont('helvetica','BI',6);
        $this->Cell(0,3,'', 0, 1, 'C');

        //adding the contents
        $this->SetFont('helvetica','',8);
        $this->Cell(202,5,' 1. OFFICE DEPARTMENT                             2. NAME:                                (Last)                                  (First)                                    (Middle)','LTR',1,'');
        $this->Cell(202,8,'      ','LRB',1,'');
        
        $this->Cell(202,10,' 3. DATE OF FILING_________________      4. POSITION:____________________________            5. SALARY ______________________',1,1,'');
        
        $this->SetFont('helvetica','B',12);
        $this->Cell(202,5,'6. DETAILS OF APPLICATION',1,1,'C');
       
        $this->SetFont('helvetica','',10);
        $this->Cell(115,5, utf8_decode(" 6.A TYPE OF LEAVE TO BE AVAILED OF    "),'TLR');
        $this->Cell(87,5," 6.B DETAILS OF LEAVE",'TLR');
        $this->Ln();
        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'      Vacation Leave(Sec. 51, Rule XVI, Omnibus Rules Implementing E.O. No. 292)','LR');
        $this->SetFont('helvetica','I',8);
        $this->Cell(87,5,"    Incase of Vacation/Special Previlage Leave:",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'      Mandatory(Sec. 51, Rule XVI, Omnibus Rules Implementing E.O. No. 292)','LR');
        $this->Cell(87,5,"         Within the Philippines _______________________",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'      Sick Leave (Sec. 43, Rule XVI, Omnibus Rules Implementing E.O. No.292)','LR');
        $this->Cell(87,5,"         Abroad (Specify)____________________________",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'      Maternity Leave (R.A. No 11210/IRR issued by CSC, DOLE and SSS)','LR');
        $this->SetFont('helvetica','I',8);
        $this->Cell(87,5,"    Incase of Sick Leave:",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'      Paternity Leave (R.A. No. 8187 / CSC MC)','LR');
        $this->Cell(87,5,"         In Hospital (Specify Illness)____________________",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'      Special Previlage Leave (Sec. 21, Rule XVI Omnibus Rules Implementing E.O. No. 292)','LR');
        $this->Cell(87,5,"         Out Patient (Specify Illness)___________________",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'      Solo Parent Leave (RA No. 8972 / CSC MC No. 8, s. 2004)','LR');
        $this->Cell(87,5,"    ____________________________________________",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'      Study Leave (Sec. 68, Rule XVI, Omnibus Rules Implementing E.O. No. 292)','LR');
        $this->SetFont('helvetica','I',8);
        $this->Cell(87,5,"    In case of Special Leave Benefit for Women:",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'      10-Day VAWC Leave (RA NO. 9262)','LR');
        $this->Cell(87,5,"    (Specify Illness)_______________________________",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'      Rehabilitation Privilege (Sec. 55, Rule XVI, Omnibus Rules Implementing E.O. No. 292)','LR');
        $this->Cell(87,5,"    ____________________________________________",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'      Special Leave Benefits for Women (RA No. 9710 / CSC MC No. 25, s. 2010)','LR');
        $this->SetFont('helvetica','I',8);
        $this->Cell(87,5,"    In case of Study Leave:",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'      Special Emergency (Calamity) Leave (CSC MC No. 2, s. 2010)','LR');
        $this->Cell(87,5,"         Completion of Master's Degree",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'      Adoption Leave (R.A. No. 8552)','LR');
        $this->Cell(87,5,"         BAR/Board Examination Review",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,' ','LR');
        $this->SetFont('helvetica','I',8);
        $this->Cell(87,5,"    Other Purpose",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'    Others:','LR');
        $this->Cell(87,5,"         Monetization of Leave Credits",'LR');
        $this->Ln();

        $this->SetFont('helvetica','I',8);
        $this->Cell(115,5,'    ___________________________','LRB');
        $this->Cell(87,5,"         Terminal Leave",'LRB');
        $this->Ln();        

        $this->SetFont('helvetica','',10);
        $this->Cell(115,5, utf8_decode(" 6.C NUMBER OF WORKING DAYS APPLIED FOR    "),'TLR');
        $this->Cell(87,5," 6.D COMMUTATION",'TLR');
        $this->Ln();

        $this->SetFont('helvetica','I',8);
        $this->Cell(115,5,'      ________________________________________','LR');
        $this->Cell(87,5,"         Not Requested",'LR');
        $this->Ln();

        $this->SetFont('helvetica','I',8);
        $this->Cell(115,5,'      INCLUSIVE DATES','LR');
        $this->Cell(87,5,"         Requested",'LR');
        $this->Ln();

        $this->SetFont('helvetica','I',8);
        $this->Cell(115,5,'      ________________________________________','LR');
        $this->Cell(87,5,"         Terminal Leave",'LR');
        $this->Ln();

        $this->SetFont('helvetica','I',8);
        $this->Cell(115,5,'      ','LR');
        $this->Cell(87,5,"       ",'LR');
        $this->Ln();

        $this->SetFont('helvetica','B',12);
        $this->Cell(202,5,'7. DETAILS OF ACTION ON APPLICATION',1,1,'C');

        $this->SetFont('helvetica','',10);
        $this->Cell(115,5, utf8_decode(" 7.A CERTIFICATION OF LEAVE CREDITS    "),'LR');
        $this->Cell(87,5," 7.B RECOMMENDATION",'LR');
        $this->Ln();
        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'                             As of ____________________________','LR');
        $this->Cell(87,5,"    For Approval",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'                                             Vacation Leave                 Sick Leave','LR');
        $this->Cell(87,5,"    For disaproval due to ____________________________",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'          Total Earned','LR');
        $this->Cell(87,5,"    _____________________________________________",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'          Less this Application','LR');
        $this->Cell(87,5,"    ____________________________________________",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'          Balance','LR');
        $this->Cell(87,5,"    ____________________________________________",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'','LR');
        $this->Cell(87,5,"",'LR');
        $this->Ln();

        $this->SetFont('helvetica','B',8);
        $this->Cell(115,5,'                                                          NELIA C. SANTOS','LR');
        $this->Cell(87,5,"                          RAFAEL IRWIN G. NICOLAS ED.D",'LR');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'                                                    Administrative IV-Personnel','LRB');
        $this->Cell(87,5,"                                   Administrative Officer V",'LRB');
        $this->Ln();

        $this->SetFont('helvetica','',10);
        $this->Cell(115,5, utf8_decode(" 7.C APPROVED FOR"),'TL');
        $this->Cell(87,5," 7.D DISAPPROVED DUE TO ",'TR');
        $this->Ln();
        
        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'      ___________ days with pay','L');
        $this->Cell(87,5,"  _________________________________________________",'R');
        $this->Ln();
         
        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'      ___________ days without pay','L');
        $this->Cell(87,5,"  _________________________________________________",'R');
        $this->Ln();

        $this->SetFont('helvetica','',8);
        $this->Cell(115,5,'      ___________ others specify','L');
        $this->Cell(87,5,"  _________________________________________________",'R');
        $this->Ln();
        $this->Ln();
        $this->Ln();

        $this->SetFont('helvetica','B',10);
        $this->Cell(202,5,'DIOSDADO A. CAYABYAB, CESO Vi',0,1,'C');

        $this->SetFont('helvetica','',10);
        $this->Cell(202,5,'Asst. Schools Division Superintendent','LRB',1,'C');



        

        
        

        
    }

    
    public function Footer(){

    }

}

// create new PDF document
$pdf = new PDF('p', 'mm', 'FOLIO', true, 'UTF-8', false);



// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Department of Education');
$pdf->SetTitle('APPLICATION FOR LEAVE');
$pdf->SetSubject('');
$pdf->SetKeywords('');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
// $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetMargins(7, 0, 7, true);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print



// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>