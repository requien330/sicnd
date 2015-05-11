<?php
require('/fpdf/fpdf.php');
$idc=($_GET['idc']);
class PDF extends FPDF
{
   //Cabecera de página
   function Header()
   {
       $this->Image('base_carnet.jpg',0,0,52,84,'JPG');
          
   }
}
$pdf=new PDF(); //nuevo archivo
$pdf->AddPage(); // adicionar pagina
$pdf->SetTopMargin(20); // margen superior
$pdf->SetLeftMargin(5); // margen izquierdo (el derecho es igual por defecto, si se quiere definir usar SetRightMargin)    
$pdf->SetFont('arial','B',10); // fuente de la letra, negrita, tamaño
$pdf->SetTitle('CLASIFICACION DE PARTIDAS');


$cadconex="dbname=cng_corporativa host=localhost port=5432 user=postgres password=postgres"; 
$conexion = pg_connect($cadconex);
$cadbusca = "SELECT * FROM public.imagen JOIN sicnd.carnet_colores ON (imagen.color_crg = carnet_colores.color) WHERE imagen.id=$idc"; 
	$result=pg_query($cadbusca) or die('La consulta fallo: ' . pg_last_error());       
        $j=1;
			while($row = pg_fetch_array($result)) 
        	{ 
	      		$clasif = $row["id"];
				$pdf->Text(40, 70,"CI: " .$clasif);
				$color_crg = $row["R_color"];
				$color_dpt = $row["G_color"];
				$color_gyt = $row["B_color"];
				$pdf->SetFillColor($color_crg,$color_dpt,$color_gyt);
				$pdf->Rect(2,19,4,39,'F');
				$pdf->SetFillColor($color_dpt,$color_crg,$color_gyt);
				$pdf->Rect(7,23,3,23,'F');
				$pdf->SetFillColor($color_dpt,$color_crg,$color_gyt);
				$pdf->Rect(42,31,3,23,'F');
				$pdf->SetFillColor($color_gyt,$color_dpt,$color_crg);
				$pdf->Rect(46,31,4,27,'F');

				$j=$j+1;
			}  
$pdf->Output();
?>

