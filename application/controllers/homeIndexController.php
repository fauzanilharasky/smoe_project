<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Input $input
 * @property CI_DB_query_builder $db
 * @property CI_Session $session
 * @property InternshipModel $InternshipModel
 * @property ProjekModel $ProjekModel
 * @property LogbookModel $LogbookModel
 * @property DepartemenModel $DepartemenModel
 * @property InternProjekModel $InternProjekModel
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
		$this->load->model('DepartemenModel');
		$this->load->model('InternProjekModel');
		 $this->load->library('session');
	}

	public function index()
	{
		$InternData = $this->InternshipModel->get_with_departemen();
		$allProject = $this->ProjekModel->get_all();
		$allDepartemen = $this->DepartemenModel->get_all();

// 		$css = '
//     <link href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css" rel="stylesheet">
//     <link href="https://cdn.datatables.net/select/3.0.0/css/select.bootstrap5.css" rel="stylesheet">
//     <style>
//         /* Jika ingin warna teks tetap hitam, gunakan ini */
//         .table.dataTable tbody tr.selected td {
//             color: black !important;
//         }

//     </style>
// ';

		//dataTables configuration
// 		$js = '
//     <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
//     <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>
//     <script src="https://cdn.datatables.net/select/3.0.0/js/dataTables.select.js"></script>
//     <script src="https://cdn.datatables.net/select/3.0.0/js/select.bootstrap5.js"></script>
//     <!-- datatables -->
//     <script>
//         $(document).ready(function () {
//             var table = $(".dataTable").DataTable({
//                 columnDefs: [
//                     {
//                         orderable: false,
//                         render: DataTable.render.select(),
//                         targets: 0
//                     }
//                 ],
//                 order: [],
//                 select: {
//                     style: "os",
//                     selector: "td:first-child"
//                 },
//                 info: true,
//     			autoWidth: false, // biar auto hitung ulang lebar kolom
//             });

//             $("#btnEdit").on("click", function () {
//                 var selectedRows = table.rows({ selected: true }).data();

//                 if (selectedRows.length === 0) {
//                     Swal.fire({
//                         text: "Tidak ada data yang dipilih",
//                         icon: "warning",
//                         confirmButtonText:"OK",
//                         showCloseButton: true,
//                         timer: 2000,
//                     });
//                 } else {
//                     var selectedIds = [];
//                     selectedRows.each(function (rowData) {
//                         console.log(rowData);
//                         selectedIds.push(rowData[0]); 
//                     });

//                     $("#editId").val(selectedIds.join(","));
//                     $("#editModal").modal("show");
//                 }
//             });
//         });
//     </script>
// ';



		// Ambil view konten
		// $content = $this->load->view('home/index', [
		// 	'dataIntern' => $InternData,
		// 	'dataAllProject' => $allProject,
		// 	// 'js' => $js,
		// 	// 'css' => $css,
		// ], TRUE);

		// Load layout utama, kirim konten ke dalamnya
		$this->load->view('layouts/main', [
			// 'content' => $content
			'dataIntern' => $InternData,
			'dataAllProject' => $allProject,
			'dataAllDepartemen' => $allDepartemen,
		]);
	}

	public function clinton()
	{
		$InternData = $this->InternshipModel->get_with_departemen();
		$allProject = $this->ProjekModel->get_all();
		$allDepartemen = $this->DepartemenModel->get_all();

// 		
		// Load layout utama, kirim konten ke dalamnya
		$this->load->view('home/index', [
			// 'content' => $content
			'dataIntern' => $InternData,
			'dataAllProject' => $allProject,
			'dataAllDepartemen' => $allDepartemen,
		]);
	}

	public function get_ajax_intern($id){
		// Ambil data intern
		$intern = $this->InternshipModel->get_by_id_with_departemen($id);

		// Ambil project-projectnya
		$projects = $this->InternProjekModel->get_projects_by_internship($id);

		echo json_encode([
			'intern' => $intern,
			'projects' => $projects
		]);
	}

	public function update_intern()
	{
		$id_internships   = $this->input->post('id_internship'); // array
		$no_badges        = $this->input->post('no_badge');
		$names            = $this->input->post('name');
		$departments      = $this->input->post('department');
		$emails           = $this->input->post('email');
		$addressCompanies = $this->input->post('address_company');
		$projects         = $this->input->post('project_name'); // bentuknya: project_name[id_internship][]

		if ($id_internships) {
			foreach ($id_internships as $i => $id_internship) {
				// 1. update data internship
				$dataIntern = [
					'no_badge'   => $no_badges[$i],
					'nama'       => $names[$i],
					'id_dept'    => $departments[$i],
					'email'      => $emails[$i],
					'alamat_pt'  => $addressCompanies[$i],
				];
				$this->InternshipModel->update($id_internship, $dataIntern);

				// 2. update relasi project via pivot
				if (isset($projects[$id_internship])) {
					// hapus semua relasi lama
					$this->InternProjekModel->delete_by_internship($id_internship);

					// insert relasi baru
					$dataBatch = [];
					foreach ($projects[$id_internship] as $projId) {
						$dataBatch[] = [
							'id_internship' => $id_internship,
							'id_projek'    => $projId,
						];
					}
					if (!empty($dataBatch)) {
						$this->InternProjekModel->insert_batch($dataBatch);
					}
				}
			}

			$this->session->set_flashdata('notifikasi', 'Intern data updated successfully!');
			$this->session->set_flashdata('type', 'success');
			redirect('/index.php');
		} else {
			// $this->session->set_flashdata('notifikasi', 'No data submitted');
			// $this->session->set_flashdata('type', 'error');
			redirect('/index.php');
		}
	}


	public function debug_intern_json()
	{
		$id_internships   = $this->input->post('id_internship'); // array
		$no_badges        = $this->input->post('no_badge');
		$names            = $this->input->post('name');
		$departments      = $this->input->post('department');
		$emails           = $this->input->post('email');
		$addressCompanies = $this->input->post('address_company');
		$projects         = $this->input->post('project_name'); // project_name[id_internship][]

		$result = [];

		if ($id_internships) {
			foreach ($id_internships as $i => $id_internship) {
				$result[] = [
					'internship' => [
						'id_internship' => $id_internship,
						'no_badge'      => $no_badges[$i],
						'nama'          => $names[$i],
						'id_dept'       => $departments[$i],
						'email'         => $emails[$i],
						'alamat_pt'     => $addressCompanies[$i],
					],
					'projects' => isset($projects[$id_internship]) 
						? $projects[$id_internship] 
						: [],
				];
			}

			echo json_encode([
				'status' => 'success',
				'data'   => $result
			], JSON_PRETTY_PRINT);
		} else {
			echo json_encode([
				'status'  => 'error',
				'message' => 'No data submitted'
			], JSON_PRETTY_PRINT);
		}
	}


}
