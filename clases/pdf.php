<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require '../vendor/autoload.php';
include dirname(__FILE__) . '/../clases/cartaPorte.php';

$pdf = new PDF();
$pdf->generar();

class PDF
{
	private $pdf;

	//datos
	private $folio;
	/*
    private $fecha;
    private $origen;
    private $remitente;
    private $remitenteRFC;
    private $remitenteDomicilio;
    private $recoger;
    private $destino;
    private $destinatario;
    private $destinatarioRFC;
    private $destinatarioDomicilio;
    private $entregar;
    private $cuotaTonelada;
    private $valorDeclarado;
    private $condicionesPago;
    private $bultosNumero;
    private $bultosEmbalaje;
    private $contienen;
    private $peso;
    private $metrosCubicos;
    private $pesoEstimado;
    private $concepto;
    private $importe;
    private $subTotal;
    private $IVA;
    private $retIVA;
    private $total;
    private $cantidadConLetra;
    private $reembarco;
    private $reembarcarse;
    private $tractor;
    private $operario;
	private $conducira;
	*/
	//termina datos
	public function __construct()
	{
		$this->pdf = new FPDF('P','mm','A4');
		//$cartaPorte = new CartaPorte();
		$this->folio = "31231";
	}

	public function generar()
	{
		$this->pdf->AddPage();
/*output the result*/

/*set font to arial, bold, 14pt*/
$this->pdf->SetFont('Arial','B',20);

/*Cell(width , height , text , border , end line , [align] )*/

$this->pdf->Cell(71 ,10,'',0,0);
$this->pdf->Cell(59 ,5,'Cartaporte',0,0);
$this->pdf->Cell(59 ,10,'',0,1);

$this->pdf->SetFont('Arial','B',11);
$this->pdf->Cell(35 ,5,$this->folio,0,0);
$this->pdf->Cell(35 ,5,'Fecha',0,0);
$this->pdf->Cell(35 ,5,'Origen',0,0);
$this->pdf->Cell(35 ,5,'Remitente',0,0);
$this->pdf->Cell(35 ,5,'RFC',0,1);

$this->pdf->SetFont('Arial','',10);

$this->pdf->Cell(35 ,5,'12345',0,0);
$this->pdf->Cell(35 ,5,'27/03/2020',0,0);
$this->pdf->Cell(35 ,5,'Nuevo Laredo',0,0);
$this->pdf->Cell(35 ,5,'Nuevo Laredo',0,0);
$this->pdf->Cell(35 ,5,'R12319283012983901823901283',0,1);

//$pdf->Cell(130 ,5,'Delhi, 751001',0,0);
//$pdf->Cell(25 ,5,'Invoice Date:',0,0);
//$pdf->Cell(34 ,5,'12th Jan 2019',0,1);
 
//$pdf->Cell(130 ,5,'',0,0);
//$pdf->Cell(25 ,5,'Invoice No:',0,0);
//$pdf->Cell(34 ,5,'ORD001',0,1);


$this->pdf->SetFont('Arial','B',11);
$this->pdf->Cell(45 ,5,'Remitente domicilio',0,0);
$this->pdf->Cell(35 ,5,'Recoger',0,0);
$this->pdf->Cell(35 ,5,'Destino',0,0);
$this->pdf->Cell(35 ,5,'Destinatario',0,0);
$this->pdf->Cell(35 ,5,'Destinatario RFC',0,1);

$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(45 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,1);

$this->pdf->setFont('Arial','B',11);
$this->pdf->Cell(45 ,5,'Destinatario domicilio',0,0);
$this->pdf->Cell(35 ,5,'Entregar',0,0);
$this->pdf->Cell(35 ,5,'Tonelada',0,0);
$this->pdf->Cell(35 ,5,'Valor declarado',0,0);
$this->pdf->Cell(35 ,5,'Condiciones pago',0,1);

$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(45 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,1);

$this->pdf->setFont('Arial','B',11);
$this->pdf->Cell(45 ,5,'Bultos numero',0,0);
$this->pdf->Cell(35 ,5,'Bultos embalaje',0,0);
$this->pdf->Cell(35 ,5,'Contiene',0,0);
$this->pdf->Cell(35 ,5,'Peso',0,0);
$this->pdf->Cell(35 ,5,'Metros cubicos',0,1);

$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(45 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,1);

$this->pdf->setFont('Arial','B',11);
$this->pdf->Cell(45 ,5,'Peso estimado',0,0);
$this->pdf->Cell(35 ,5,'Concepto',0,0);
$this->pdf->Cell(35 ,5,'Importe',0,0);
$this->pdf->Cell(35 ,5,'Subtotal',0,0);
$this->pdf->Cell(35 ,5,'IVA',0,1);

$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(45 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,1);

$this->pdf->setFont('Arial','B',11);
$this->pdf->Cell(45 ,5,'Ret IVA',0,0);
$this->pdf->Cell(35 ,5,'Total',0,0);
$this->pdf->Cell(35 ,5,'Cantidad con letra',0,0);
$this->pdf->Cell(35 ,5,'Reembarco',0,0);
$this->pdf->Cell(35 ,5,'Reembarcarse',0,1);

$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(45 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,1);

$this->pdf->setFont('Arial','B',11);
$this->pdf->Cell(45 ,5,'Tractor',0,0);
$this->pdf->Cell(35 ,5,'Operario',0,0);
$this->pdf->Cell(35 ,5,'Conducira',0,0);
$this->pdf->Cell(35 ,5,'Valor declarado',0,0);
$this->pdf->Cell(35 ,5,'Condiciones pago',0,1);

$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(45 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,0);
$this->pdf->Cell(35 ,5,'PRiv asdasdasd',0,1);



$this->pdf->Cell(50 ,10,'',0,1);

$this->pdf->SetFont('Arial','B',10);
/*Heading Of the table
$this->pdf->Cell(10 ,6,'Sl',1,0,'C');
$this->pdf->Cell(80 ,6,'Description',1,0,'C');
$this->pdf->Cell(23 ,6,'Qty',1,0,'C');
$this->pdf->Cell(30 ,6,'Unit Price',1,0,'C');
$this->pdf->Cell(20 ,6,'Sales Tax',1,0,'C');
$this->pdf->Cell(25 ,6,'Total',1,1,'C');/*end of line*/

/*Heading Of the table end*/
/*
$pdf->SetFont('Arial','',10);
    for ($i = 0; $i <= 10; $i++) {
		$pdf->Cell(10 ,6,$i,1,0);
		$pdf->Cell(80 ,6,'HP Laptop',1,0);
		$pdf->Cell(23 ,6,'1',1,0,'R');
		$pdf->Cell(30 ,6,'15000.00',1,0,'R');
		$pdf->Cell(20 ,6,'100.00',1,0,'R');
		$pdf->Cell(25 ,6,'15100.00',1,1,'R');
	}
		
*/
/*
$this->pdf->Cell(118 ,6,'',0,0);
$this->pdf->Cell(25 ,6,'Subtotal',0,0);
$this->pdf->Cell(45 ,6,'151000.00',1,1,'R');
*/

$this->pdf->Output();
	}
}

?>