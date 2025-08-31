<section class="container-lg mt-5 mb-5">
	<div class="card shadow-sm">
		<div class="card-header bg-primary text-white">
			<h4 class="mb-0 text-center">Master Data List</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-striped mb-0">
					<thead class="table-secondary">
						<tr>
							<th class="text-dark">No. Badge</th>
							<th class="text-dark">Name</th>
							<th class="text-dark">Department</th>
							<th class="text-dark">Email</th>
							<th class="text-dark">Address Company</th>
							<th class="text-dark">project name</th>
							<th class="text-dark">Logbook</th>
							<th class="text-dark">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($dataIntern as $index => $data): ?>
							<tr>
								<td>
									<?= $data->no_badge ?>
								</td>
								<td>
									<?= $data->nama ?>
								</td>
								<td>
									<?= $data->nama_departemen ?>
								</td>
								<td>
									<?= $data->email ?>
								</td>
								<td>
									<?= $data->alamat_pt ?>
								</td>
								<td>
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

								<td>
									<ul class="list-unstyled mb-0 ps-2">
										<?php
										$projekIntern = $this->ProjekModel->get_by_internship_id($data->id);
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

								</td>

								<td>
									<a href="#" class="btn btn-sm btn-warning">Edit</a>
									<a href="#" class="btn btn-sm btn-danger">Delete</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
