<?php 
require_once ('../../libs/Classes/PHPExcel.php');
$objPHPExcel = new PHPExcel();

$objPHPExcel->
getProperties()
->setCreator("SIAC/MCM")
->setLastModifiedBy("user")
->setTitle("Ventas del mes")
->setDescription("Registro de las ventas realizadas en el mes de Enero 2019")
->setCategory("reportes");


$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:AI1');
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'CARTERA PARA EL MES DE ENERO 2019')
            ->setCellValue('A2', 'FECHA')
            ->setCellValue('B2', 'VEN #')
            ->setCellValue('C2', 'CUENTA')
            //DATOS CLIENTE
			->setCellValue('D2', 'CLIENTE')
			->setCellValue('E2', 'CEDULA')

			->setCellValue('F2', 'DIRECCIÓN')
            ->setCellValue('G2', 'CIUDAD')
            //DATOS CODEUDOR
            ->setCellValue('H2', 'TELÉFONO')
			->setCellValue('I2', 'CORREO')
			->setCellValue('J2', 'CODEUDOR')
			->setCellValue('K2', 'CÉDULA')
            ->setCellValue('L2', 'DIRECCIÓN')
            //DATOS PRODUCTO
            ->setCellValue('M2', 'CIUDAD')
			->setCellValue('N2', 'TELÉFONO')
			->setCellValue('O2', 'CORREO')
			->setCellValue('P2', 'PRODUCTO')
            ->setCellValue('Q2', 'PLAN')
            ->setCellValue('R2', 'VR VENTA')
			->setCellValue('S2', 'COSTO')
			->setCellValue('T2', 'UTILIDAD')
			->setCellValue('U2', 'INICIAL')
            ->setCellValue('V2', 'SALDO')
            ->setCellValue('W2', 'VR EN MORA')
			->setCellValue('X2', 'INTERESES POR MORA')
			->setCellValue('Y2', 'VR CUOTA')
			->setCellValue('Z2', 'FECHA DE VENCIMIENTO')
			->setCellValue('AA2', 'VR PAGO')
			->setCellValue('AB2', 'INTERÉS COBRADO')
			->setCellValue('AC2', 'VALOR ABONADO')
			->setCellValue('AD2', 'DIFERENCIA ENTRE COSTO Y ABONO')
			->setCellValue('AE2', 'VR PERDIDO')
			->setCellValue('AF2', 'CUOTAS EN MORA')
			->setCellValue('AG2', 'CUOTAS ABONADAS')
			->setCellValue('AH2', 'CUOTAS PENDIENTES')
			->setCellValue('AI2', 'DÍAS EN MORA');

			//AJUSTAMOS TAMAÑO DE LA CELDA


$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);	
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);	
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(30);	
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(15);	
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(30);	
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(15);	
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(30);	
$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(15);	
$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(30);	
$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(15);	
$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(30);	
$objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(15);	
$objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setWidth(30);	
$objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setWidth(15);	
$objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setWidth(20);	

$boldArray = array('font' => array('bold' => true,),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));
$sizeArray = array('font' => array( 'size'  => 16));

$objPHPExcel->getActiveSheet()->getStyle('A1:AI2')->applyFromArray($boldArray);
$objPHPExcel->getActiveSheet()->getStyle('A1:AI1')->applyFromArray($sizeArray);
			
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="reporte.xls"');
header('Cache-Control: max-age=0');
// Si usted está sirviendo a IE 9 , a continuación, puede ser necesaria la siguiente
header('Cache-Control: max-age=1');
 
// Si usted está sirviendo a IE a través de SSL , a continuación, puede ser necesaria la siguiente
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;

 ?>