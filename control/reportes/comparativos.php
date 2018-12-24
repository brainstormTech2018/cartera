
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


$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:X1');
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'ACUMULADO RESULTADOS AÑO 2018')
            ->setCellValue('A2', 'FECHA')
            ->setCellValue('B2', 'VENDEDOR')
            ->setCellValue('C2', 'CUENTA')
            //DATOS CLIENTE
			->setCellValue('D2', 'CLIENTE')
			->setCellValue('E2', 'DIRECCION')

			->setCellValue('F2', 'CIUDAD')
            ->setCellValue('G2', 'TELEFONOS')
            //DATOS CODEUDOR
            ->setCellValue('H2', 'CODEUDOR')
			->setCellValue('I2', 'CEDULA')
			->setCellValue('J2', 'DIRECCION')
			->setCellValue('K2', 'CIUDAD')
            ->setCellValue('L2', 'TELEFONOS')
            //DATOS PRODUCTO
            ->setCellValue('M2', 'PRODUCTO')
			->setCellValue('N2', 'SERIAL')
			->setCellValue('O2', 'PROVEEDOR')
			->setCellValue('P2', 'PLAN')
            ->setCellValue('Q2', 'VALOR VENTA')
            ->setCellValue('R2', 'UTILIDAD')
			->setCellValue('S2', 'INICIAL')
			->setCellValue('T2', 'SALDO')
			->setCellValue('U2', 'VALOR CUOTA')
            ->setCellValue('V2', 'VENCIMIENTO')
            ->setCellValue('W2', '% COMISIÓN')
			->setCellValue('X2', 'COMISIÓN');

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


$boldArray = array('font' => array('bold' => true,),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));
$sizeArray = array('font' => array( 'size'  => 16));

$objPHPExcel->getActiveSheet()->getStyle('A1:X2')->applyFromArray($boldArray);
$objPHPExcel->getActiveSheet()->getStyle('A1:X1')->applyFromArray($sizeArray);
			
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