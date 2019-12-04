<?php
require('../fpdf/fpdf.php');

class pdf extends FPDF
{
	public function header()
	{
		$this->SetFillColor(52, 143, 73 );
		$this->Rect(0,0, 220, 50, 'F');
		$this->SetY(25);
		$this->SetFont('Arial', 'B', 30);
		$this->SetTextColor(255,255,255);
		$this->Write(5, 'Tachi SAC');

	}

	public function footer()
	{
		$this->SetFillColor(52, 143, 73 );
		$this->Rect(0, 250, 220, 50, 'F');
		$this->SetY(-20);
		$this->SetFont('Arial', '', 12);
		$this->SetTextColor(255,255,255);
		$this->SetX(120);
		$this->Write(5, 'Johan Rojas Nuñez');
		$this->Ln();
		$this->SetX(120);
		$this->Write(5, 'JohanRojasn21@gmail.com');
		$this->SetX(120);
		$this->Ln();
		$this->SetX(120);
		$this->Write(5, '+(51)956973863');
	}
}



$fpdf = new pdf('P','mm','letter',true);
$fpdf->AddPage('portrait', 'letter');
$fpdf->SetMargins(10,30,20,20);
$fpdf->SetFont('Arial', '', 9);
$fpdf->SetTextColor(255,255,255);


$fpdf->SetY(15);
$fpdf->SetX(110);
$fpdf->Write(5, 'Listado de Las Materias Primas');

//$fpdf->SetX(120);
//$fpdf->Write(5, 'Fecha de la orden: ');
//$fpdf->Ln();
//$fpdf->SetX(120);
//$fpdf->Write(5, 'Fecha de envío: ');
$fpdf->Ln();
$fpdf->SetX(110);
$fpdf->Write(5, 'Dirección: Miguel Grau 1938,Cercado de Lima 15822');

$fpdf->Ln();
$fpdf->SetX(110);
$fpdf->Write(5, 'Ciudad: Lima-Peru ');

$fpdf->SetTextColor(0,0,0);
//$fpdf->Image('img/2.png', 20, 55);

$fpdf->SetFont('Arial', 'B');
$fpdf->SetY(60);
$fpdf->SetX(120);
//$fpdf->Write(5, $customer->company);
$fpdf->SetFont('Arial', '');
$fpdf->Ln();
$fpdf->SetX(120);
//$fpdf->Write(5, $customer->last_name.', '.$customer->first_name);
$fpdf->Ln();
$fpdf->SetX(120);
//$fpdf->Write(5, $customer->job_title);
$fpdf->Ln();
$fpdf->SetX(120);
//$fpdf->Write(5, $customer->business_phone);
$fpdf->Ln();
$fpdf->SetX(120);
//$fpdf->Write(5, $customer->address);


$fpdf->SetX(100);
$fpdf->SetFillColor(255,255,255);
$fpdf->SetFont('Arial', 'BU', 20);
$fpdf->Cell(10, 10, 'Lista de los Productos de Materia Prima', 0, 0, 'C', 1);




$fpdf->SetFont('Arial', 'B', 10);
$fpdf->SetY(100);
$fpdf->SetX(20);
$fpdf->SetTextColor(255,255,255);
$fpdf->SetFillColor(79,78,77);
$fpdf->Cell(90, 10, 'PRODUCTO', 0, 0, 'C', 1);
$fpdf->Cell(90, 10, 'MATERIA', 0, 0, 'C', 1);

$fpdf->Ln();

$fpdf->SetLineWidth(0.5);
$fpdf->SetTextColor(0,0,0);
$fpdf->SetFillColor(255,255,255);
$fpdf->SetDrawColor(80,80,80);


require '../Controlador/Config/Conexion.php';
$conexion = conexion();
$sql = "call sp_ListarMateria();";
$result = mysqli_query($conexion, $sql);

while ($ver = mysqli_fetch_row($result)) {
    
    $fpdf->SetFontSize(10);
    $fpdf->SetFont('Arial', '');
    $fpdf->SetLineWidth(0.2);
    $fpdf->SetFillColor(207, 207, 207 );
    $fpdf->SetTextColor(40, 40, 40, 40);
    $fpdf->SetDrawColor(255, 255, 255);
    $fpdf->Ln(0.5);
    $fpdf->SetX(20);
    $fpdf->Cell(90, 10, $ver[1], 'B', 0, 'C', 1);
    $fpdf->Cell(90, 10, $ver[3], 'B', 1, 'C', 1);
}


$fpdf->OutPut();