<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="description">
	<meta content="" name="keywords">

	<title><?= isset($title) ? $title : 'INTERNSHIP'; ?></title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.min.css" rel="stylesheet">
	<link
		href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.6/b-2.4.1/b-html5-2.4.1/b-print-2.4.1/r-2.5.0/datatables.min.css"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

	<link href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/select/3.0.0/css/select.bootstrap5.css" rel="stylesheet">
	<style>
		/* Jika ingin warna teks tetap hitam, gunakan ini */
		.table.dataTable tbody tr.selected td {
			color: white !important;
		}
	</style>

	<?php if (isset($css)) echo $css; ?>
</head>

<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm p-3 mb-5 bg-body-tertiary rounded fixed">
	<div class="container-fluid">
		<a class="navbar-brand mt-2 mt-lg-0 ml-4" href="">
			<img
				class=""
				src="data:image/png;base64,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"
				height="45"
				alt="	smoe Logo"
				loading="lazy"
				style="background: transparent; mix-blend-mode: multiply;" />
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active text-primary" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Options</a>
				</li>

			</ul>
			<form class="d-flex" role="search">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
				<button class="btn btn-outline-primary" type="submit">Search</button>
			</form>
		</div>
	</div>
</nav>
<!-- Navbar -->

<body>
	<div id="app">
		<div class="main-wrapper">

			<!-- Main Content -->
			<div class="main-content">
				<!-- <?= isset($content) ? $content : '' ?> -->
				<section class="container-xl my-5">
					<div class="card shadow-sm">
						<div class="card-header bg-primary text-white">
							<h4 class="mb-0">Master Data List</h4>
						</div>

						<div class="card-body">
							<div class="table-responsive">
								<div class="d-flex flex-row">
									<div class="ms-3">
										<button class="btn btn-warning btn-sm" id="btnEdit">
											<i class="bi bi-pencil"></i> Edit
										</button>
									</div>
									<div class="ms-3">
										<button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahModal">
											<i class="bi bi-plus"></i> Add
										</button>
									</div>
								</div>
								<table
									class="dataTable table table-striped table-hover border table-bordered align-middle">
									<thead>
										<tr>
											<th scope="col"></th>
											<th scope="col">No. Badge</th>
											<th scope="col">Name</th>
											<th scope="col" class="d-none d-sm-table-cell">Department</th>
											<th scope="col" class="d-none d-md-table-cell">Email</th>
											<th scope="col" class="d-none d-md-table-cell">Address Company</th>
											<th scope="col" class="d-none d-lg-table-cell">project name</th>
											<!-- <th scope="col" class="d-none d-lg-table-cell">Logbook</th> -->
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($dataIntern as $index => $data): ?>
											<tr>
												<td><?= $data->id ?></td>
												<td>
													<?= $data->no_badge ?>
												</td>
												<td>
													<?= $data->nama ?>
												</td>
												<td class="d-none d-sm-table-cell">
													<?= $data->nama_departemen ?>
												</td>
												<td class="d-none d-md-table-cell">
													<?= $data->email ?>
												</td>
												<td class="d-none d-md-table-cell">
													<?= $data->alamat_pt ?>
												</td>
												<td class="d-none d-lg-table-cell">
													<ul class="list-unstyled mb-0 ps-2">
														<?php
														$projekIntern = $this->InternProjekModel->get_projects_by_internship($data->id);
														if (!empty($projekIntern)) {
															foreach ($projekIntern as $projek) {
																echo '<li class="mb-1">• ' . htmlspecialchars($projek->nama) . '</li>';
															}
														} else {
															echo '<li>No records</li>';
														}
														?>
													</ul>

												</td>

												<!-- <td class="d-none d-lg-table-cell">
									<ul class="list-unstyled mb-0 ps-2">
										<?php
											if (!empty($projekIntern)):
												foreach ($projekIntern as $projek): ?>
												<li class="mb-1">
													<strong><?= htmlspecialchars($projek->nama ?? 'No records') ?></strong>
													<?php
													$logbookEntries = $this->LogbookModel->get_by_projek_and_intern_id($projek->id, $data->id);
													if (!empty($logbookEntries)): ?>
														<ul style="padding-left:15px;">
															<?php foreach ($logbookEntries as $logbook): ?>
																<li class="mb-1">
																	<?= htmlspecialchars($logbook->title ?? 'No records') ?>
																</li>
															<?php endforeach; ?>
														</ul>
													<?php endif; ?>
												</li>
											<?php endforeach;
											else: ?>
											<li>No records</li>
										<?php endif; ?>
									</ul>
								</td> -->

												<td>
													<button class="btn btn-sm btn-primary" data-bs-toggle="modal"
														data-bs-target="#detailModal<?= $data->id ?>">
														<i class="bi bi-info-circle"></i> details
													</button>
												</td>

											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</section>

				<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
					aria-labelledby="staticBackdropLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h1 class="modal-title fs-5">Edit Data</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>

							<div class="modal-body">
								<form id="editForm" action="<?= base_url('index.php/internship/update_intern') ?>" method="post">
									<!-- <input type="hidden" name="id_internship" id="editId"> -->

									<div id="editFormContainer"></div>


									<!-- <div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">No Badge</label>
									<input type="no_badge[]" class="form-control">
								</div>

								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Name</label>
									<input type="no_badge[]" class="form-control">
								</div>
								
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Department</label>
									<input type="no_badge[]" class="form-control">
								</div>

								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Email</label>
									<input type="no_badge[]" class="form-control">
								</div>

								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Address Company</label>
									<input type="no_badge[]" class="form-control">
								</div>

								<div class="mb-3">
									<div class="d-flex justify-content-between align-items-center mb-2">
										<label for="exampleFormControlInput1" class="form-label">Project Name</label>
										<div class="ps-3">
											<button type="button" id="add-project" class="btn btn-sm btn-outline-success">
												<i class="bi bi-plus-circle"></i> Add
											</button>
										</div>
									</div>
									<div id="project-container">
										<div class="d-flex align-items-center mb-2 project-item">
											<select class="form-select" name="project_name[]">
												<?php foreach ($dataAllProject as $index => $project): ?>
												<option value="<?= $project->id ?>"><?= $project->nama ?></option>
												<?php endforeach ?>
											</select>
										</div>
									</div>
								</div> -->

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-success">Save</button>
								</form>
							</div>
						</div>
					</div>
				</div>

				<!-- Modal Tambah Data -->
				<div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
					aria-labelledby="tambahModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
						<div class="modal-content">
							<div class="modal-header d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center">
									<h1 class="modal-title fs-5 mb-0">Add Data</h1>
									<!-- tombol tambah form -->
									<button type="button" id="add-form" class="btn btn-outline-primary btn-sm ms-3">
										<i class="bi bi-plus-circle"></i> Add New Form
									</button>
								</div>

								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>

							<div class="modal-body">
								<form id="tambahForm" action="<?= base_url('index.php/internship/insert_intern') ?>" method="post">

									<div id="form-container">
										<!-- blok form pertama -->
										<div class="intern-form border rounded p-3 mb-3">
											<div class="d-flex justify-content-between">
												<h5>Form 1</h5>
												<button type="button" class="btn btn-sm btn-outline-danger remove-form d-none">
													<i class="bi bi-trash"></i> Delete
												</button>
											</div>
											<div class="mb-2">
												<label>No Badge</label>
												<input type="text" name="no_badge[]" class="form-control">
											</div>
											<div class="mb-2">
												<label>Name</label>
												<input type="text" name="name[]" class="form-control">
											</div>
											<div class="mb-2">
												<label>Department</label>
												<select name="department[]" class="form-select">
													<?php foreach ($dataAllDepartemen as $dept): ?>
														<option value="<?= $dept->id ?>"><?= $dept->nama ?></option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="mb-2">
												<label>Email</label>
												<input type="email" name="email[]" class="form-control">
											</div>
											<div class="mb-2">
												<label>Address Company</label>
												<input type="text" name="address_company[]" class="form-control">
											</div>
											<div class="mb-2">
												<div class="d-flex justify-content-between align-items-center mb-2">
													<label>Project Name</label>
													<button type="button" class="btn btn-sm btn-outline-success add-project-tambah">
														<i class="bi bi-plus-circle"></i> Add Project
													</button>
												</div>
												<div class="project-container-tambah">
													<div class="d-flex align-items-center mb-2 project-item">
														<select class="form-select me-2" name="project_name[0][]">
															<?php foreach ($dataAllProject as $project): ?>
																<option value="<?= $project->id ?>"><?= $project->nama ?></option>
															<?php endforeach ?>
														</select>
														<button type="button" class="btn btn-sm btn-outline-danger remove-project">
															<i class="bi bi-dash-circle"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-success">Save</button>
									</div>
								</form>
							</div>

							<!-- Detail Modal -->
							<?php foreach ($dataIntern as $indexIntern => $intern): ?>
								<div class="modal fade" id="detailModal<?= $intern->id ?>" data-bs-backdrop="static"
									data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5">Details intern <?= $intern->no_badge ?></h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<table class="table table-striped table-hover border table-bordered align-middle">
													<tr>
														<th>No Badge</th>
														<td>
															<?= $intern->no_badge ?>
														</td>
													</tr>
													<tr>
														<th>Name</th>
														<td>
															<?= $intern->nama ?>
														</td>
													</tr>
													<tr>
														<th>Department</th>
														<td>
															<?= $intern->nama_departemen ?>
														</td>
													</tr>
													<tr>
														<th>Email</th>
														<td>
															<?= $intern->email ?>
														</td>
													</tr>
													<tr>
														<th>Address Company</th>
														<td>
															<?= $intern->alamat_pt ?>
														</td>
													</tr>
													<tr>
														<th>Project</th>
														<td>
															<ul class="list-unstyled mb-0 ps-2">
																<?php
																$InternProjek = $this->InternProjekModel->get_projects_by_internship($intern->id);
																if (!empty($InternProjek)) {
																	foreach ($InternProjek as $projekData) {
																		echo '<li class="mb-1">• ' . htmlspecialchars($projekData->nama) . '</li>';
																	}
																} else {
																	echo '<li>No records</li>';
																}
																?>
															</ul>
														</td>
													</tr>
													<!-- <tr>
							<th>Logbook</th>
							<td>
								<ul class="list-unstyled mb-0 ps-2">
										<?php
										if (!empty($InternProjek)):
											foreach ($InternProjek as $projekData): ?>
												<li class="mb-1">
													<strong><?= htmlspecialchars($projekData->nama ?? 'No records') ?></strong>
													<?php
													$logbookData = $this->LogbookModel->get_by_projek_and_intern_id($projekData->id, $intern->id);
													if (!empty($logbookData)): ?>
														<ul style="padding-left:15px;">
															<?php foreach ($logbookData as $log): ?>
																<li class="mb-1">
																	<?= htmlspecialchars($log->title ?? 'No records') ?>
																</li>
															<?php endforeach; ?>
														</ul>
													<?php endif; ?>
												</li>
											<?php endforeach;
										else: ?>
											<li>No records</li>
										<?php endif; ?>
									</ul>
							</td>
						</tr> -->
												</table>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach ?>

						</div>

					</div>
				</div>

				<!-- General JS Scripts -->
				<script src="https://code.jquery.com/jquery-3.7.1.js"
					integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
				<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.all.min.js"></script>
				<script
					src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.6/b-2.4.1/b-html5-2.4.1/b-print-2.4.1/r-2.5.0/datatables.min.js"></script>

				<?php
				$notifikasi = $this->session->flashdata('notifikasi');
				$type = $this->session->flashdata('type');
				?>

				<?php if (!empty($notifikasi)): ?>
					<script>
						Swal.fire({
							text: '<?= $notifikasi ?>',
							icon: '<?= $type ?>',
							confirmButtonText: 'OK',
							showCloseButton: true,
							timer: 2000,
						})
					</script>
				<?php endif; ?>


				<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
				<script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>
				<script src="https://cdn.datatables.net/select/3.0.0/js/dataTables.select.js"></script>
				<script src="https://cdn.datatables.net/select/3.0.0/js/select.bootstrap5.js"></script>
				<!-- datatables -->
				<script>
					$(document).ready(function() {
						var table = $(".dataTable").DataTable({
							columnDefs: [{
								orderable: false,
								render: DataTable.render.select(),
								targets: 0
							}],
							order: [],
							select: {
								style: "os",
								selector: "td:first-child"
							},
							info: true,
							autoWidth: false, // biar auto hitung ulang lebar kolom
						});

						$("#btnEdit").on("click", function() {
							var selectedRows = table.rows({
								selected: true
							}).data();

							if (selectedRows.length === 0) {
								Swal.fire({
									text: "Tidak ada data yang dipilih",
									icon: "warning",
									confirmButtonText: "OK",
									showCloseButton: true,
									timer: 2000,
								});
							} else {
								$("#editFormContainer").empty(); // reset modal

								selectedRows.each(function(rowData) {
									console.log(rowData[0])
									var internId = rowData[0]; // ambil id_internship dari kolom pertama

									$.ajax({
										url: "<?= base_url('index.php/internship/get_intern_detail/') ?>" + internId,
										type: "GET",
										dataType: "json",
										success: function(res) {
											var intern = res.intern;
											console.log('Intern: ', intern)

											var projects = res.projects;
											console.log('Projek: ', projects)

											var section = $(`
									<div class="intern-section border rounded p-3 mb-3">
										<h5>#${intern.no_badge}</h5>
										<input type="hidden" name="id_internship[]" value="${intern.id}">
										<div class="mb-2">
											<label>No Badge</label>
											<input type="text" name="no_badge[]" class="form-control" value="${intern.no_badge}">
										</div>
										<div class="mb-2">
											<label>Name</label>
											<input type="text" name="name[]" class="form-control" value="${intern.nama}">
										</div>
										<div class="mb-2">
											<label>Department</label>
											<select name="department[]" class="form-select">
												<?php foreach ($dataAllDepartemen as $dept): ?>
													<option value="<?= $dept->id ?>"
														${intern.id_dept == <?= $dept->id ?> ? "selected" : ""}>
														<?= $dept->nama ?>
													</option>
												<?php endforeach ?>
											</select>
										</div>
										<div class="mb-2">
											<label>Email</label>
											<input type="email" name="email[]" class="form-control" value="${intern.email}">
										</div>
										<div class="mb-2">
											<label>Address Company</label>
											<input type="text" name="address_company[]" class="form-control" value="${intern.alamat_pt}">
										</div>

										<div class="mb-2">
											<div class="d-flex justify-content-between align-items-center mb-2">
												<label>Project Name</label>
												<button type="button" class="btn btn-sm btn-outline-success add-project">
													<i class="bi bi-plus-circle"></i> Add
												</button>
											</div>
											<div class="project-container"></div>
										</div>
									</div>
								`);

											// render project select
											if (projects.length > 0) {
												projects.forEach(function(proj) {
													var projectItem = $('<div class="d-flex align-items-center mb-2 project-item"></div>');

													var projectSelect = $('<select class="form-select me-2" name="project_name[' + internId + '][]"></select>');
													<?php foreach ($dataAllProject as $project): ?>
														var option = $('<option value="<?= $project->id ?>"><?= $project->nama ?></option>');
														if (proj.id == <?= $project->id ?>) {
															option.attr("selected", "selected");
														}
														projectSelect.append(option);
													<?php endforeach ?>

													// tombol trash
													var removeBtn = $('<button type="button" class="btn btn-sm btn-outline-danger remove-project"><i class="bi bi-trash"></i></button>');

													projectItem.append(projectSelect).append(removeBtn);
													section.find(".project-container").append(projectItem);
												});
											} else {
												// jika belum ada project, kasih 1 select kosong
												var projectSelect = $('<select class="form-select mb-2" name="project_name[' + internId + '][]"></select>');
												<?php foreach ($dataAllProject as $project): ?>
													projectSelect.append('<option value="<?= $project->id ?>"><?= $project->nama ?></option>');
												<?php endforeach ?>
												section.find(".project-container").append(projectSelect);
											}

											$("#editFormContainer").append(section);
											$("#editModal").modal("show");
										}
									});
								});
							}
						});

						$(document).on("click", "#add-form", function() {
							var formIndex = $(".intern-form").length; // hitung form yang ada
							var newForm = $(".intern-form").first().clone();

							// reset input value
							newForm.find("input").val("");
							newForm.find("select").val("");

							// update judul form (Form 1, Form 2, dst)
							newForm.find("h5").text("Form " + (formIndex + 1));

							// update name attribute untuk project agar unik
							newForm.find(".project-container-tambah").html(`
        <div class="d-flex align-items-center mb-2 project-item">
            <select class="form-select me-2" name="project_name[${formIndex}][]">
                <?php foreach ($dataAllProject as $project): ?>
                    <option value="<?= $project->id ?>"><?= $project->nama ?></option>
                <?php endforeach ?>
            </select>
            <button type="button" class="btn btn-sm btn-outline-danger remove-project">
                <i class="bi bi-dash-circle"></i>
            </button>
        </div>
    `);

							// tampilkan tombol hapus form
							newForm.find(".remove-form").removeClass("d-none");

							$("#form-container").append(newForm);
						});

						// hapus form internship
						$(document).on("click", ".remove-form", function() {
							$(this).closest(".intern-form").remove();
						});

						// tambah project di dalam form tertentu
						$(document).on("click", ".add-project-tambah", function() {
							var formIndex = $(this).closest(".intern-form").index();
							var projectItem = `
        <div class="d-flex align-items-center mb-2 project-item">
            <select class="form-select me-2" name="project_name[${formIndex}][]">
                <?php foreach ($dataAllProject as $project): ?>
                    <option value="<?= $project->id ?>"><?= $project->nama ?></option>
                <?php endforeach ?>
            </select>
            <button type="button" class="btn btn-sm btn-outline-danger remove-project">
                <i class="bi bi-dash-circle"></i>
            </button>
        </div>
    `;
							$(this).closest(".intern-form").find(".project-container-tambah").append(projectItem);
						});

						// hapus project
						$(document).on("click", ".remove-project", function() {
							$(this).closest(".project-item").remove();
						});

						// Tambah project baru
						$(document).on("click", ".add-project", function() {
							var section = $(this).closest(".intern-section");
							var internId = section.find("input[name='id_internship[]']").val();

							var projectItem = $('<div class="d-flex align-items-center project-item mb-2"></div>');
							var projectSelect = $('<select class="form-select me-2" name="project_name[' + internId + '][]"></select>');

							<?php foreach ($dataAllProject as $project): ?>
								projectSelect.append('<option value="<?= $project->id ?>"><?= $project->nama ?></option>');
							<?php endforeach ?>

							var removeBtn = $('<button type="button" class="btn btn-sm btn-outline-danger remove-project"><i class="bi bi-dash-circle"></i></button>');
							projectItem.append(projectSelect).append(removeBtn);

							section.find(".project-container").append(projectItem);
						});

						// Hapus project
						$(document).on("click", ".remove-project", function() {
							$(this).closest(".project-item").remove();
						});




						// // ketika tombol Add ditekan
						// $('.add-project').on('click', function () {
						// 	let newSelect = `
						// 		<div class="d-flex align-items-center mb-2 project-item">
						// 		<select class="form-select" name="project_name[]">
						// 			<?php foreach ($dataAllProject as $index => $project): ?>
						// 			<option value="<?= $project->id ?>"><?= $project->nama ?></option>
						// 			<?php endforeach ?>
						// 		</select>
						// 		<button type="button" class="btn btn-sm btn-outline-danger ms-2 remove-project">
						// 			<i class="bi bi-dash-circle"></i>
						// 		</button>
						// 		</div>
						// 	`;
						// 	$('#project-container').append(newSelect);
						// });

						// // ketika tombol Remove ditekan
						// $('#project-container').on('click', '.remove-project', function () {
						// 	$(this).closest('.project-item').remove();
						// });

					});
				</script>

				<?php if (isset($js)) echo $js; ?>

				<footer class="text-center text-lg-start bg-primary">

					<div class="text-center text-white p-2" style="background-color: rgba(0, 0, 0, 0.05);">
						© 2025 Copyright:
						<a class=" text-white-50" href="https://github.com/fauzanilharasky/smoe_project">SMOE Project</a>
					</div>
				</footer>
</body>

</html>