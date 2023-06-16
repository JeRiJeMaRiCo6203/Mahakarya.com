<?php
/** Include PHPExcel */
require_once 'Classes/PHPExcel.php';

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("PHPExcel Test Document")
							 ->setSubject("PHPExcel Test Document")
							 ->setDescription("Test document for PHPExcel, generated using PHP classes.")
							 ->setKeywords("office PHPExcel php")
							 ->setCategory("Test result file");


// Add some data
$cell=$objPHPExcel->setActiveSheetIndex(0);
$cell->setCellValue('A1', 'Nama Produk');
$cell->getStyle('A1')->getAlignment()
    ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$cell->getStyle('A1')->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$cell->setCellValue('B1', 'Harga Produk');
$cell->getStyle('B1')->getAlignment()
    ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$cell->getStyle('B1')->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$cell->setCellValue('C1', 'Stok');
$cell->getStyle('C1')->getAlignment()
    ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$cell->getStyle('C1')->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$cell->setCellValue('A2', 'Samsung Galaxy A5');
$cell->setCellValue('A3', 'Xiomi Remi Note 3');
$cell->setCellValue('A4', 'Lenovo A6600 Plus');
$cell->setCellValue('A5', 'Samsung Galaxy J5');
$cell->setCellValue('A6', 'Asus A456');
$cell->setCellValue('A7', 'Toshiba Satelite');
$cell->setCellValue('A8', 'Dell Inspiron');

$cell->setCellValue('B2', '4500000');
$cell->setCellValue('B3', '1449000');
$cell->setCellValue('B4', '1500000');
$cell->setCellValue('B5', '2900000');
$cell->setCellValue('B6', '7257000');
$cell->setCellValue('B7', '6399000');
$cell->setCellValue('B8', '5340000');


$cell->setCellValue('C2', '3');
$cell->setCellValue('C3', '8');
$cell->setCellValue('C4', '4');
$cell->setCellValue('C5', '2');
$cell->setCellValue('C6', '3');
$cell->setCellValue('C7', '5');
$cell->setCellValue('C8', '3');
// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Stock of Tiket');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Stock of DTProduk.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;


?>
