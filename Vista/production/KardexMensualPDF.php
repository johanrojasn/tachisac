<?php 
require('../fpdf/fpdf.php');

require '../Controlador/Config/Conexion.php';
$conexion = conexion();
$sql = "call sp_KartexMensual();";
$result = mysqli_query($conexion, $sql);


$fpdf = new fpdf('P','mm','A4',true);

$fpdf->AddPage('LANDSCAPE','A4' );


$fpdf->SetFont('Courier', 'B', 7);
//$fpdf->Cell(20, 2, $customer->company);
$fpdf->Cell(200, 5, 'Miguel Grau 1938');
$fpdf->Cell(200, 5, 'Cercado de Lima 15822');

$fpdf->Ln(2);
$fpdf->SetFont('Courier', '', 5);
//$fpdf->Cell(20, 2, $customer->last_name.', '.$customer->first_name);
$fpdf->Cell(200, 5, 'Tachi@hotmail.com');
$fpdf->Cell(200, 5, 'Sra. Margarita Almeyda');

$fpdf->Ln(2);
//$fpdf->Cell(20, 2, $customer->job_title);
$fpdf->Cell(200, 5, '(01)2344613');
$fpdf->Cell(200, 5, 'Lima-Peru');

$fpdf->Ln(2);
//$fpdf->Cell(20, 2, $customer->business_phone);
$fpdf->Ln(2);
//$fpdf->Cell(20, 2, $customer->city);

$fpdf->AliasNbPages();
$fpdf->Write(5,'Pagina '.$fpdf->PageNo().' De '.'{nb}');



$fpdf->ln(15);
$fpdf->SetFont('Courier', 'B',45);
$fpdf->SetTextColor(80,80,80);
$fpdf->Write(10, 'Kardex Mensual');
$fpdf->SetTextColor(177,34,78);
$fpdf->Image('assets/images/LOGOTACHI.PNG',250,5,30,10,'png');
$fpdf->Image('assets/images/LOGOTACHI.PNG',5,195,30,10,'png');
$fpdf->SetY(30);
$fpdf->SetFont('Courier', 'B',8);
$fpdf->SetTextColor(0,0,0);
$fpdf->SetX(200);
$fpdf->Write(10, 'Número de pedido: ');
$fpdf->ln(7);
$fpdf->SetX(200);
$fpdf->Write(10, 'Cliente:  ');
$fpdf->ln(7);
$fpdf->SetX(200);
$fpdf->Write(10, 'Fecha del Entrada: ');
$fpdf->ln(7);
$fpdf->SetX(200);
$fpdf->Write(10, 'Fecha del Salida: ');
$fpdf->ln(7);


$fpdf->SetX(200);
$fpdf->ln(10);
$fpdf->SetFillColor(255,255,255);
$fpdf->SetLineWidth(1);
$fpdf->SetDrawColor(40, 146, 58 );
$fpdf->SetTextColor(177,34,78);
$fpdf->SetX(10);
$fpdf->Cell(5, 5, '#', 'T', 0, 'C', 0);
$fpdf->Cell(20, 5, 'FECHA ENTRADA', 'T', 0, 'C', 0);
$fpdf->Cell(30, 5, 'PRODUCTO', 'T', 0, 'C', 0);
$fpdf->Cell(20, 5, 'PROVEEDOR', 'T', 0, 'C', 0);
//$fpdf->Cell(20, 5, 'CALIDAD ', 'T', 0, 'C', 0);
$fpdf->Cell(20, 5, 'PRECIO U.', 'T', 0, 'C', 0);
$fpdf->Cell(20, 5, 'Nº OLLAS', 'T', 0, 'C', 0);
$fpdf->Cell(20, 5, 'STOCK EN.', 'T', 0, 'C', 0);
$fpdf->Cell(20, 5, 'STOCK US.', 'T', 0, 'C', 0);
$fpdf->Cell(30, 5, 'SUBTOTAL EN.', 'T', 0, 'R', 0);
$fpdf->Cell(30, 5, 'SUBTOTAL US.', 'T', 0, 'R', 0);
$fpdf->Cell(30, 5, 'STOCK RESTANTE', 'T', 0, 'R', 0);
$fpdf->Cell(30, 5, 'SUBTOTAL SALDO', 'T', 0, 'R', 0);
//$fpdf->Cell(25, 5, 'SUBTOTAL', 'T', 0, 'C', 0);
$fpdf->ln();

$i=1;

while($ver = mysqli_fetch_row($result)) {
    $fpdf->SetFont('Courier', '',7);
    $fpdf->SetLineWidth(0.1);
    $fpdf->SetFillColor(207, 207, 207 );
    $fpdf->SetTextColor(40, 40, 40, 40);
    $fpdf->SetDrawColor(255, 255, 255);
    $fpdf->Ln(0.5);
    ///LISTADO
    $fpdf->Cell(5, 5, $i, 1, 0, 'C', 1);
    $fpdf->Cell(20, 5, $ver[1], 1, 0, 'C', 1);
    $fpdf->Cell(30, 5, $ver[3], 1, 0, 'C', 1);
    $fpdf->Cell(20, 5, $ver[6], 1, 0, 'C', 1);

//    if ($ver[9]==1){
//        $calidad='Buena';
//    }else if($ver[9]==2){
//        $calidad='Intermedia';
//    }else{
//        $calidad='Mala';
//    }
//    $fpdf->Cell(20, 5,$calidad, 1, 0, 'C', 1);
    $fpdf->Cell(20, 5, $ver[8], 1, 0, 'C', 1);
    $fpdf->Cell(20, 5, $ver[12], 1, 0, 'C', 1);
    $fpdf->Cell(20, 5, number_format($ver[7],2), 1, 0, 'R', 1);
    $fpdf->Cell(20, 5, number_format($ver[11],2), 1, 0, 'R', 1);   
    $fpdf->Cell(30, 5, number_format($ver[8]* $ver[7],2), 1, 0, 'R', 1);
    $fpdf->Cell(30, 5, number_format($ver[8]* $ver[11],2), 1, 0, 'R', 1);
    $fpdf->Cell(30, 5, number_format($ver[7]- $ver[11],2), 1, 0, 'R', 1);
    $fpdf->Cell(30, 5, number_format(($ver[8]* $ver[7])-($ver[8]* $ver[11]),2), 1, 1, 'R', 1);
    $i++;
}

$conexion2 = conexion();
$sql2 = "call sp_Total();";
$result2 = mysqli_query($conexion2, $sql2);
while($ver = mysqli_fetch_row($result2)) {
$fpdf->ln();
$fpdf->SetFillColor(80,80,80);
$fpdf->SetTextColor(255,255,255);
$fpdf->Cell(275, 5, 'TOTAL: '.number_format($ver[0],2), 0, 0, 'R', 1);
$fpdf->Cell(25, 5, 0, 0, 'C', 1);
}
$fpdf->OutPut();


$fpdf->ln();
