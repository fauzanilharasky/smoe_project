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
				<table class="dataTable table table-striped table-hover border table-bordered align-middle">
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
									<button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal<?= $data->id ?>">
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

<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5">Edit Data</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<input type="hidden" name="id_internship" id="editId">

				<div class="mb-3">
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
					<label for="exampleFormControlInput1" class="form-label">Project Name</label>
					<select class="form-select" name="project_name[]">
						<?php foreach($dataAllProject as $index => $project ): ?>
							<option value="<?= $project->id ?>"><?= $project->nama ?></option>
						<?php endforeach ?>
					</select>
				</div>
				
			</div>
			<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Simpan</button>
			</div>
		</div>
	</div>
</div>

<!-- Detail Modal -->
<?php foreach ($dataIntern as $indexIntern => $intern): ?>
	<div class="modal fade" id="detailModal<?= $intern->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5">Detail intern <?= $intern->no_badge ?></h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
