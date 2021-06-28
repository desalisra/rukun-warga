<!-- HEADER TITLE -->
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-desktop"></i>
					<a href="#">Master Web</a>
				</li>
				<li class="active">Surat</li>
			</ul><!-- /.breadcrumb -->
			<div class="nav-search" id="nav-search">
			</div><!-- /.nav-search -->
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<div class="clearfix">
						<h4 class="pink">
							Pengajuan Surat
							<div class="pull-right tableTools-container"></div>
						</h4>
					</div>
					<div class="table-header">
						Hasil untuk "Pengajuan Surat"
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>

					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="dataTable" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th class="center" width="5%">#</th>
								<th class="center" width="13%">No Surat</th>
								<th class="center" width="10%">NIK</th>
								<th class="center" width="20%">Nama</th>
								<th class="center" width="15%">Jenis Kelamin</th>
								<th class="center" width="20%">Jenis Surat</th>
								<th class="center" width="20%">Status</th>
								<th class="center">Action</th>
							</tr>
						</thead>
						<?php
						$no = 1;
						foreach ($data as $row) { ?>
							<tr>
								<td><?php echo $no; ?></td>
								<td class="center"><?= $row->srt_noSurat; ?></td>
								<td class="center"><?= $row->srt_nik; ?></td>
								<td><?= $row->srt_nama; ?></td>
								<td class="center"><?= $row->srt_jk == "L" ? "Laki-Laki" : "Perempuan" ?></td>
								<td><?= $row->srt_keperluan; ?></td>
								<td><?= $row->srt_stsPrint == 0 ? "Belum Print" : "Sudah Print"; ?></td>
								<td>
									<a href="<?php echo base_url(); ?>MSurat/print/<?= $row->srt_id; ?>" class="tooltip-success" data-rel="tooltip" title="Print">
										<span class="green">
											<i class="ace-icon fa fa-print bigger-120"></i>
										</span>
									</a>
									<a href="<?php echo base_url(); ?>MSurat/hapus/<?= $row->srt_id; ?>" class="tooltip-error" data-rel="tooltip" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus akun ini')">
										<span class="red">
											<i class="ace-icon fa fa-trash-o bigger-120"></i>
										</span>
									</a>
								</td>

							</tr>
						<?php
							$no++;
						} ?>
					</table>
					<!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
				</div>
			</div>
		</div>
	</div>
</div>