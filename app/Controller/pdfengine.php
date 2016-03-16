<?php
require('/fpdf/fpdf.php');

class pdfengine{

public function __construct($data , $code) {
    
$fpdf = new FPDF();
$fpdf->AddPage();
$fpdf->SetFont('Arial','B',16);
$fpdf->Cell(40,10,$data);
if($code == 1)
{$fpdf->Output('D:\xampp\htdocs\Test\app\webroot\files\bill.pdf','F');}

else
{$fpdf->Output('bill.pdf','D');}

return 'true';

     }

}
?>
