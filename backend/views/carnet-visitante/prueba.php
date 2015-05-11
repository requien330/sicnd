<?php
require('/fpdf/fpdf.php');
class PDF extends FPDF
{
   //Cabecera de página
   function Header()
		{
			$this->Image('base_carnet.jpg',0,0,52,84,'JPG');
    		$this->Ln(20);
		}
}
$pdf=new PDF(); //nuevo archivo
$pdf->AddPage(); // adicionar pagina
$pdf->SetTopMargin(20); // margen superior
//$pdf->SetAutoPageBreak(1,0);
$pdf->SetLeftMargin(5); // margen izquierdo (el derecho es igual por defecto, si se quiere definir usar SetRightMargin)    
//$pdf->AliasNbPages(); 
$pdf->SetFont('arial','B',10); // fuente de la letra, negrita, tamaño
$pdf->SetTitle('CLASIFICACION DE PARTIDAS');
$cadconex="dbname=cng_corporativa host=localhost port=5432 user=postgres password=postgres"; 
$conexion = pg_connect($cadconex); 
$cadbusca = "SELECT * FROM public.operacion"; 
    $result=pg_query($cadbusca) or die('La consulta fallo: ' . pg_last_error()); 
        
        
        $j=1; 
   $pdf->AddPage();     
         
         while($row = pg_fetch_array($result)) 
        { 
      		$id = $row["id"];
			$nombre = $row["nombre"];
			$descripcion = $row["descripcion"];
			
      $pdf->Text(10,$pdf->GetY(),($j)); 
			$pdf->Text(20,$pdf->GetY(),$id); 
			$pdf->Text(40,$pdf->GetY(),$nombre); 
			$pdf->Text(50,$pdf->GetY(),$descripcion); 
      $pdf->cell(0,8,'','',1,'C'); //celdas: ancho, alto. texto impreso, borde, posicion de linea, aliniacion del texto, fondo de cellda, url.
       
        $j=$j+1; 
        }  
          /* $pdf->cell(0,8,'',0,1); 
          $pdf->Text(30,$pdf->GetY(),'Nombre'); 
           $pdf->Text(115,$pdf->GetY(),'Fecha'); 
           $pdf->Text(160,$pdf->GetY(),'Firma'); 
           
           $pdf->cell(0,5,'',0,1); 
           $pdf->Text(15,$pdf->GetY(),'_________________________________________'); 
           $pdf->Text(30,$pdf->GetY(),'________________________'); 
           $pdf->Text(44,$pdf->GetY(),'________________________'); */
           $pdf->Ln(1);
$pdf->Cell(23);         $pdf->Cell(0,3,'SOLICITANTE',0,0,'L');
$pdf->Cell(-49);        $pdf->Cell(0,3,'COMISIÓN AUTORIZADA POR',0,1,'L');
 
$pdf->Ln(2);
$pdf->Cell(8);          $pdf->Cell(0,4,'solicitante',0,0,'L'); //Nombre Solicitante
$pdf->Cell(-49);        $pdf->Cell(0,4,'firma',0,1,'L'); //Nombre Persona Autoriza Comisión
 
$pdf->Ln(4);
$pdf->Cell(26);         $pdf->Cell(0,2,'REGISTRO',0,0,'L');    
$pdf->Cell(-35);        $pdf->Cell(0,2,'Vo.Bo.',0,1,'L');
$pdf->Cell(5);          $pdf->Cell(0,3,'DEPARTAMENTO DE RECURSOS FINANCIEROS',0,0,'L');
$pdf->Cell(-49);        $pdf->Cell(0,3,'EL SUBJEFE ADMINISTRATIVO',0,1,'L');
 
$pdf->Ln(2);
$pdf->Cell(8);          $pdf->Cell(0,4, 'aprobado' ,0,0,'L'); //Nombre Responsable Registro Depto R.H.
$pdf->Cell(-49);        $pdf->Cell(0,4,'firma',0,1,'L'); //Nombre Subjefe Admtivo.
 
$pdf->Ln(2);            $pdf->SetFont('Times','',5);
$pdf->Cell(2);          $pdf->Cell(0,2,'AL COMPROBAR ANEXAR INFORME DE ACTIVIDADES Y RELACIÓN DE COMPROBANTES',0,1,'L');
$pdf->Cell(2);          $pdf->Cell(0,2,'ESTE DOCUMENTO NO ES VÁLIDO CON TACHADURAS Y/O ENMENDADURAS',0,1,'L');
$pdf->Output();
?>