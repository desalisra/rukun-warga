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
							Hasil untuk "Peserta Didik Baru"
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
								<th class="center" >Action</th>
							</tr>
						</thead>	
							<?php 
								$no=1;
								foreach ($data as $row) { ?>
							<tr>
								<td><?php echo $no; ?></td>
								<td class="center"><?= $row->srt_noSurat; ?></td>
								<td class="center"><?= $row->srt_nik; ?></td>
								<td><?= $row->srt_nama; ?></td>
								<td class="center"><?= $row->srt_jk == "L" ? "Laki-Laki" : "Perempuan" ?></td>
								<td><?= $row->srt_keperluan; ?></td>
								
								<td>
									<a href="<?php echo base_url(); ?>MSurat/print/<?= $row->srt_id; ?>" class="tooltip-success" data-rel="tooltip" title="Print" >
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

<div class="modal fade" id="m_kategori" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header no-padding">
				<div class="table-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="white">&times;</span>
					</button>
					Management Account
				</div>
			</div>
			<form class="form-horizontal" role="form" name="f_modal" id="f_modal" action="<?php echo base_url('mProfil/add'); ?>" method="post" enctype="multipart/form-data">

						<div id="konfirmasi"></div>
						<table class="table table-form">
							<input type="hidden" class="form-control" name="id" id="id" value="">
							<tr>
								<td style="width: 25%">
									<label for="nama">Nama Admin</label>
								</td>
								<td style="width: 75%">
									<input type="text" class="form-control" name="nama" id="nama" required value="">
								</td>
							</tr>
							<tr>
								<td style="width: 25%">
									<label for="email">Email</label>
								</td>
								<td style="width: 25%">
									<input type="text" class="form-control" name="email" id="email" required value="">
								</td>
							</tr>
							<tr>
								<td style="width: 25%">
									<label for="password">Password</label>
								</td>
								<td style="width: 25%">
									<input type="password" class="form-control" name="password" id="password" required value="">
								</td>
							</tr>
							<tr>
								<td style="width: 25%">
									<label for="gambar">Profil Picture</label>
								</td>
								<td style="width: 25%">
									<input type="file" name="gambar" class="form-control-file" id="gambar">
								</td>
							</tr>
							
						</table>
				</div>
				<div class="modal-footer">
					<button class="btn btn-white btn-info btn-bold" type="submit">
					<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
				<button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
					<i class="fa fa-minus-circle"></i> Tutup</button>
				</div>
			</form>
		</div>
	</div>
</div>
