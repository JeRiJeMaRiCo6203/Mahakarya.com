<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_test extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library("Pdf");
        $this->load->model('crud_m');
    }

    public function create_pdf() {
      $id=$this->input->get('id');
      $where=array('id'=>$id);
      $data = $this->crud_m->selectX('article',$where);
      $hasil=$data->row();

    // create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->AddPage();
    $Picture = "assets/images/".$hasil->picture;
    // Set some content to print
    $html = '<h1>'.$hasil->title.'</h1>'.'<br><img src=http://127.0.0.1/PLPW/project-akhir/assets/images/097518800_1479094640-Lorenzo_Rossi.jpg><br><p>'.$hasil->content.'</p>';

    // Print text using writeHTMLCell()
    $pdf->writeHTML($html);

    // ---------------------------------------------------------

    // Close and output PDF document
    $pdf->Output('test.pdf', 'I');
    }
}
