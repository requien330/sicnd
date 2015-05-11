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


$cadbusca1 = "SELECT * FROM sicnd.carnet_empleado ce JOIN sicnd.carnet_plantilla cp ON (ce.idcarnet_plantilla =  cp.idcarnet_plantilla) JOIN m_general_admin.m_empleados ga ON (ce.ced_empleado = ga.ced_empleado) WHERE idcarnet_empleado = $idc"; 
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
     			$cedemp = $row["ced_empleado"];
     			$pdf->SetXY(10, 59);
        		$pdf->Cell(30,5,'CI: '.$cedemp,0,0,'C');
     			$pdf->SetFont('arial','B',8); // fuente de la letra, negrita, tamaño
     			$nomemp = $row["nom_empleado"];
     			$pdf->SetXY(10, 65);
        		$pdf->Cell(30,5,$nomemp,0,0,'C');
     			$pdf->SetFont('arial','B',8); // fuente de la letra, negrita, tamaño
     			$apeemp = $row["ape_empleado"];
     			$pdf->SetXY(10, 70);
        		$pdf->Cell(30,5,$apeemp,0,0,'C');
     			$urlemp = $row["url_foto"];
     			$pdf->Image('../'.$urlemp,11,22,30,34,'JPG');
			}

$cadbusca2 = "SELECT * FROM sicnd.carnet_empleado ce JOIN sicnd.carnet_cargo cc ON (ce.idcarnet_cargo =  cc.idcarnet_cargo) JOIN sicnd.carnet_colores cl ON (cc.cargo_color = cl.color) WHERE idcarnet_empleado = $idc"; 
$result=pg_query($cadbusca2) or die('La consulta fallo: ' . pg_last_error());
		 $j=1;
			while($row = pg_fetch_array($result)) 
        	{ 
        	$ccr = $row["R_color"];
			$ccg = $row["G_color"];
			$ccb = $row["B_color"];
        	$pdf->SetFillColor($ccr,$ccg,$ccb);
        	$pdf->Rect(2,19,4,39,'F');
        	$pdf->Rect(2,19,15,1,'F');
        	}

$cadbusca3 = "SELECT * FROM sicnd.carnet_empleado ce JOIN sicnd.carnet_departamento cd ON (ce.idcarnet_departamento =  cd.idcarnet_departamento) JOIN sicnd.carnet_colores cl ON (cd.departamento_color = cl.color) WHERE idcarnet_empleado = $idc"; 
$result=pg_query($cadbusca3) or die('La consulta fallo: ' . pg_last_error());
		 $j=1;
			while($row = pg_fetch_array($result)) 
        	{ 
        	$cdr = $row["R_color"];
			$cdg = $row["G_color"];
			$cdb = $row["B_color"];
        	$pdf->SetFillColor($cdr,$cdg,$cdb);
        	$pdf->Rect(7,23,3,23,'F');
        	$pdf->Rect(42,31,3,23,'F');
        	$pdf->Rect(2,75,48,1,'F');
        	}
$cadbusca4 = "SELECT * FROM sicnd.carnet_empleado ce JOIN sicnd.carnet_grupoytiempo gt ON (ce.idcarnet_grupoytiempo =  gt.idcarnet_grupoytiempo) JOIN sicnd.carnet_colores cl ON (gt.grupoytiempo_color = cl.color) WHERE idcarnet_empleado = $idc"; 
$result=pg_query($cadbusca4) or die('La consulta fallo: ' . pg_last_error());
		 $j=1;
			while($row = pg_fetch_array($result)) 
        	{
        	$cgr = $row["R_color"];
			$cgg = $row["G_color"];
			$cgb = $row["B_color"];
        	$pdf->SetFillColor($cgr,$cgg,$cgb);
        	$pdf->Rect(46,31,4,27,'F');
        	$pdf->Rect(35,57,15,1,'F');
        	$pdf->SetFont('arial','B',8);
        	$pdf->SetXY(10, 76);
        	$pdf->Cell(30,5,'Centro Nacional de Despacho',0,0,'C');
        	}

$pdf->Output();
?>
