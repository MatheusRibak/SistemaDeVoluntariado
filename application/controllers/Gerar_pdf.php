<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gerar_pdf extends CI_Controller {

    public function index() {

      $id_voluntario = $this->session->userdata('id_voluntario');

      $data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row(),
      "minhasVagas" => $this->Candidato_model->minhasVagasAtuais(),
      "vagasFinalizadas" =>$this->Candidato_model->minhasVagasFinalizadas(),
      "dadosHistoricoPdf" => $this->Historico_model->getHistoricoPdf($id_voluntario));


             //load the view and saved it into $html variable
             $html=$this->load->view('voluntario/pdf', $data, true);

             //this the the PDF filename that user will get to download
             $pdfFilePath = "RelatorioEuVoluntário.pdf";

             //load mPDF library
             $this->load->library('m_pdf');

            //generate the PDF from the given html
             $this->m_pdf->pdf->WriteHTML($html);

             //download it.
             $this->m_pdf->pdf->Output($pdfFilePath, "D");

    }




}
