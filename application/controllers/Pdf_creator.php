<?php
defined('BASEPATH') OR exit('No direct script access allowed');

		require_once('vendor/autoload.php');
		use Spipu\Html2Pdf\Html2Pdf;

class Pdf_creator extends CI_Controller {


		public function index()
		{
			echo "404";
		}// /index()

		public function create()
		{
			// Génération du PDF
			// $html2pdf = new Html2Pdf('P', 'A4', 'fr', 'true', 'UTF-8');
			$html2pdf = new HTML2PDF('P','A4','fr', array(0, 0, 0, 0));
			$data["html2pdf"] = $html2pdf;
			$this->load->view('cv', $data);
		}
}
