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
$cadconex="dbname=cng_corporativa host=localhost port=5432 user=postgres password=postgres"; 
$conexion = pg_connect($cadconex);


$cadbusca1 = "SELECT * FROM sicnd.carnet_visitante cv JOIN sicnd.carnet_plantilla cp ON (cv.idcarnet_plantilla =  cp.idcarnet_plantilla) JOIN sicnd.reg_visitantes rv ON (cv.ced_visitante = rv.ced_visitante) JOIN sicnd.carnet_colores cl ON (cp.visitante_color = cl.color) WHERE idcarnet_visitante = $idc"; 
$result=pg_query($cadbusca1) or die('La consulta fallo: ' . pg_last_error());  

        $j=1;
			while($row = pg_fetch_array($result)) 
        	{ 
        		$orientacion = $row["orientacion"];
				$pdf=new PDF($orientacion,'mm',array(52,84));
				$pdf->AddPage(); // adicionar pagina
				$pdf->SetTopMargin(0); // margen superior
				$pdf->SetLeftMargin(0); // margen izquierdo (el derecho es igual por defecto, si se quiere definir usar SetRightMargin)    
				$pdf->SetAutoPageBreak(0);
				$pdf->SetFont('arial','B',8); // fuente de la letra, negrita, tamaño
     			$cedvit = $row["ced_visitante"];
     			$pdf->SetXY(10, 59);
        		$pdf->Cell(30,5,'CI: '.$cedvit,0,0,'C');
     			$pdf->SetFont('arial','B',8); // fuente de la letra, negrita, tamaño
     			$nomvit = $row["nombre_visitante"];
     			$pdf->SetXY(10, 65);
        		$pdf->Cell(30,5,$nomvit,0,0,'C');
     			$pdf->SetFont('arial','B',8); // fuente de la letra, negrita, tamaño
     			$apevit = $row["apellido_visitante"];
     			$pdf->SetXY(10, 70);
        		$pdf->Cell(30,5,$apevit,0,0,'C');
     			$urlvit = $row["url_foto"];
     			$pdf->Image('../'.$urlvit,11,22,30,34,'JPG');
     			$cvr = $row["R_color"];
				$cvg = $row["G_color"];
				$cvb = $row["B_color"];
				$pdf->SetFillColor($cvr,$cvg,$cvb);
				$pdf->Rect(2,19,4,39,'F');
        		$pdf->Rect(2,19,15,1,'F');
        		$pdf->Rect(7,23,3,23,'F');
        		$pdf->Rect(42,31,3,23,'F');
        		$pdf->Rect(46,31,4,27,'F');
        		$pdf->Rect(35,57,15,1,'F');
        		$pdf->Rect(2,75,48,1,'F');
        		$pdf->SetFont('arial','B',8);
        		$pdf->SetXY(10, 76);
        		$pdf->Cell(30,5,'Centro Nacional de Despacho',0,0,'C');
			}



$pdf->Output();
?>
