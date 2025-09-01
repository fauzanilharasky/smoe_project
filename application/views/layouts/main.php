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
            color: black !important;
        }

    </style>

	<?php if (isset($css)) echo $css; ?>
</head>

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
														$projekIntern = $this->ProjekModel->get_by_internship_id($data->id);
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
														<i class="bi bi-info-circle"></i> detail
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

				<!-- Detail Modal -->
				<?php foreach ($dataIntern as $indexIntern => $intern): ?>
					<div class="modal fade" id="detailModal<?= $intern->id ?>" data-bs-backdrop="static"
						data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5">Detail intern <?= $intern->no_badge ?></h1>
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
													$InternProjek = $this->ProjekModel->get_by_internship_id($intern->id);
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
        $(document).ready(function () {
            var table = $(".dataTable").DataTable({
                columnDefs: [
                    {
                        orderable: false,
                        render: DataTable.render.select(),
                        targets: 0
                    }
                ],
                order: [],
                select: {
                    style: "os",
                    selector: "td:first-child"
                },
                info: true,
    			autoWidth: false, // biar auto hitung ulang lebar kolom
            });

			$("#btnEdit").on("click", function () {
				var selectedRows = table.rows({ selected: true }).data();

				if (selectedRows.length === 0) {
					Swal.fire({
						text: "Tidak ada data yang dipilih",
						icon: "warning",
						confirmButtonText:"OK",
						showCloseButton: true,
						timer: 2000,
					});
				} else {
					$("#editFormContainer").empty(); // reset modal

					selectedRows.each(function (rowData) {
						console.log(rowData[0])
						var internId = rowData[0]; // ambil id_internship dari kolom pertama

						$.ajax({
							url: "<?= base_url('index.php/internship/get_intern_detail/') ?>" + internId,
							type: "GET",
							dataType: "json",
							success: function (res) {
								var intern = res.intern;
								console.log(intern)
								
								var projects = res.projects;

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
									projects.forEach(function (proj) {
										var projectItem = $('<div class="d-flex align-items-center mb-2 project-item"></div>');

										var projectSelect = $('<select class="form-select me-2" name="project_name['+internId+'][]"></select>');
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
									var projectSelect = $('<select class="form-select mb-2" name="project_name['+internId+'][]"></select>');
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

			// Tambah project baru
			$(document).on("click", ".add-project", function () {
				var section = $(this).closest(".intern-section");
				var internId = section.find("input[name='id_internship[]']").val();

				var projectItem = $('<div class="d-flex align-items-center project-item mb-2"></div>');
				var projectSelect = $('<select class="form-select me-2" name="project_name['+internId+'][]"></select>');

				<?php foreach ($dataAllProject as $project): ?>
					projectSelect.append('<option value="<?= $project->id ?>"><?= $project->nama ?></option>');
				<?php endforeach ?>

				var removeBtn = $('<button type="button" class="btn btn-sm btn-outline-danger remove-project"><i class="bi bi-dash-circle"></i></button>');
				projectItem.append(projectSelect).append(removeBtn);

				section.find(".project-container").append(projectItem);
			});

			// Hapus project
			$(document).on("click", ".remove-project", function () {
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
</body>

</html>
