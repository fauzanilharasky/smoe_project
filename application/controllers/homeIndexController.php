<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property InternshipModel $InternshipModel
 * @property ProjekModel $ProjekModel
 * @property LogbookModel $LogbookModel
 */
class HomeIndexController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); // <-- tambahkan ini
		$this->load->model('InternshipModel');
		$this->load->model('ProjekModel');
		$this->load->model('LogbookModel');
	}

	public function index()
	{
		$InternData = $this->InternshipModel->get_with_departemen();

		//dataTables configuration
		$dataTable = "
        <script>
            $(document).ready(function () {
                $('.table').DataTable({
                    info: true,
                    order: [],
                    dom: '<\"row\"<\"col-sm-6 d-flex justify-content-center justify-content-sm-start mb-2 mb-sm-0\"l><\"col-sm-6 d-flex justify-content-center justify-content-sm-end\"f>>rt<\"row\"<\"col-sm-6 mt-0\"i><\"col-sm-6 mt-2\"p>>'
                });
            });
        </script>
    ";

		// Ambil view konten
		$content = $this->load->view('home/index', [
			'dataIntern' => $InternData,
			'dataTable' => $dataTable
		], TRUE);

		// Load layout utama, kirim konten ke dalamnya
		$this->load->view('layouts/main', [
			'content' => $content
		]);
	}
}
