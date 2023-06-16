<?php

class excel extends CI_Controller{

  public function construct() {
    parent::__construct();
    $this->load->model('data_menu_m');
    $this->load->helper(array('url', 'date'));
  }

  public function index(){
    $data['list_menu'] = $this->data_menu_m->select_all_desc('tbl_menu', 'id_menu')->result();

    $this->load->view("table_menu", $data);
  }

  public function edit($id)
{
      $data['menu'] = $this->data_menu_m->select_x('tbl_menu', array('id_menu' => $id))->result();

      $this->load->view("edit_menu", $data);
}

public function aksiHapus($id)
{
    $this->data_menu_m->hapusmenu($id);

     redirect(base_url() . "index.php/data_menu");
}

public function aksiUpdate()
{
    $image_name = 'IMG_' . time() . '.png';
    $config['upload_path']   = './uploads/images/';
    $config['allowed_types'] = 'jpeg|jpg|png';
    $config['max_size']      = 7024;
    $config['file_name']     = $image_name;
    $url_image = base_url() . 'uploads/images/' . $image_name;

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('gambar')){
        $data['message'] =  $this->upload->display_errors();

        echo "gagal";
}

else {
  $data_insert = array(
    'nama'=> $this->input->post('nama'),
    'harga'=> $this->input->post('harga'),
    'ukuran'=> $this->input->post('ukuran'),
    'keterangan'=> $this->input->post('keterangan'),
    'image'=> $image_name,
      'id' => $this->input->post('id'),
  );
  $this->data_menu_m->updatemenu($data_insert);

redirect(base_url() . "index.php/data_menu");
}
}

public function downloadExcel(){
    $data = $this->product_m->selectPembayaran()->result();
    require_once("./application/libraries/PHPExcel/Classes/" . "PHPExcel.php");
    $objPHPExcel = new PHPExcel();
  // Set document properties
    $objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
                 ->setLastModifiedBy("Maarten Balliauw")
                 ->setTitle("Office 2007 XLSX Test Document")
                 ->setSubject("Office 2007 XLSX Test Document")
                 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
                 ->setKeywords("office 2007 openxml php")
                 ->setCategory("Test result file");


  // Add some data
  $styleArray = array(
      'font'  => array(
      'bold'  => true,
      'size'  => 15,
  ));
  $objPHPExcel->setActiveSheetIndex(0);
 // $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:E1');
 // $objPHPExcel->setActiveSheetIndex(0)->getStyle('A1:E1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
  $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('A')->setAutosize(true);
  $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('B')->setAutosize(true);
  $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('C')->setAutosize(true);

  //$objPHPExcel->setActiveSheetIndex(0)->getStyle('A1:E1')->applyFromArray($styleArray);
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', 'Tanggal Pembayaran');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1', 'Nama');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C1', 'Status Transaksi');
  $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D1', 'Total Pembayaran');
  $total=0;
    for ($i=1;$i<=count($data);$i++){
      $object = $data[$i-1];
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i+1), $object->tgl);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.($i+1), $object->nama);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.($i+1), $object->status);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.($i+1), $object->total);
      $total += $object->total;
    }
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i+1), 'Total');
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.($i+1), $total);

  // Rename worksheet
  $objPHPExcel->getActiveSheet()->setTitle('Simple');


  // Set active sheet index to the first sheet, so Excel opens this as the first sheet
  $objPHPExcel->setActiveSheetIndex(0);


  // Redirect output to a client’s web browser (Excel2007)
  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  header('Content-Disposition: attachment;filename="Produk.xlsx"');
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
}
}

?>
