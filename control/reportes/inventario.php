<?php 
require_once ('../../libs/Classes/PHPExcel.php');
$objPHPExcel = new PHPExcel();

$objPHPExcel->
getProperties()
->setCreator("SIAC/MCM")
->setLastModifiedBy("user")
->setTitle("Ventas del mes")
->setDescription("INVENTARIO")
->setCategory("reportes");


$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:i1');
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'INVENTARIO')
            ->setCellValue('A2', 'CÓDIGO')
            ->setCellValue('B2', 'REFERENCIA')
            ->setCellValue('C2', 'DESCRIPCIÓN')
          	->setCellValue('D2', 'MARCA')
			->setCellValue('E2', 'SERIAL')
			->setCellValue('F2', 'COSTO')
            ->setCellValue('G2', 'ENTRADA')
            ->setCellValue('H2', 'SALIDA')
			->setCellValue('I2', 'DISPONIBLE');
			
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
	


$boldArray = array('font' => array('bold' => true,),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));
$sizeArray = array('font' => array( 'size'  => 16));

$objPHPExcel->getActiveSheet()->getStyle('A1:I2')->applyFromArray($boldArray);
$objPHPExcel->getActiveSheet()->getStyle('A1:I1')->applyFromArray($sizeArray);
			
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="INVENTARIO.xls"');
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