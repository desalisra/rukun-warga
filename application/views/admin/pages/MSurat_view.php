<?php $akses = $this->session->userdata('user_akses'); ?>

<!-- HEADER TITLE -->
<div class="main-content">
	<div class="main-content-inner">
		<script>
			function tambahData() {
				$("#id").val('');
				$("#nokk").val('');
				$("#nama").val('');
				$("#telepon").val('');
				$("#alamat").val('');
				$("#domisili").val('');
				return true
			}
		</script>

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
						Daftar Pengajuan Surat	
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>					

					<!-- Flash Message -->
					<?= $this->session->flashdata('message'); ?>

					<?php  if(is_null($status) && $akses == "USER"){ ?>
						<div class="alert alert-block alert-info">
							<strong class="green"><b>Harap Mengisi Data Kartu Keluarga Terlebih Dahulu</b></strong>,<br><br>
						</div>
					<?php }else{ ?>
						<?php 
							$status = is_null($status) ? "ADMIN" : $status->KKH_Status;
							if($status == "I"){ 
						?>
							<div class="alert alert-block alert-info">
								<strong class="green"><b>Menunggu Verifikasi Data Oleh Ketua RT</b></strong>,<br><br>
							</div>
						<?php }else{ ?>
							
							<a href="#m_modal" onclick="tambahData();" class="btn btn-primary tooltip-info mt-2 mb-2" data-toggle="modal" data-rel="tooltip" title="Tambah">
								<span class="white"><i class="ace-icon fa fa-plus bigger-120"></i> Add Data</span>
							</a>

							<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
							<table id="dataTable" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th class="center" >Action</th>
										<th class="center" width="10%">No Surat</th>
										<th class="center" width="10%">NIK</th>
										<th class="center" width="20%">Nama</th>
										<th class="center" width="15%">Jenis Kelamin</th>
										<th class="center" width="20%">Jenis Surat</th>
										<th class="center" width="15%">Status</th>
										<th class="center" width="15%">Tgl Pengajuan</th>
									</tr>
								</thead>
								<?php
								$no = 1;
								foreach ($data as $row) { ?>
									<tr>
										<td>
											<?php if($akses == 'ADMNIN'){ ?>
											<a href="<?php echo base_url(); ?>MSurat/print/<?= $row->Surat_ID; ?>" class="tooltip-success" data-rel="tooltip" title="Print">
												<span class="green">
													<i class="ace-icon fa fa-print bigger-120"></i>
												</span>
											</a> - 
											<a href="<?php echo base_url(); ?>MSurat/hapus/<?= $row->Surat_ID; ?>" class="tooltip-error" data-rel="tooltip" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus akun ini')">
												<span class="red">
													<i class="ace-icon fa fa-trash-o bigger-120"></i>
												</span>
											</a>
											<?php }else{echo $no;} ?>
										</td>
										<td class="center"><?= $row->Surat_Numb; ?></td>
										<td class="center"><?= $row->KKD_NIK; ?></td>
										<td><?= $row->KKD_Nama; ?></td>
										<td class="center"><?= $row->KKD_Jk == "L" ? "Laki-Laki" : "Perempuan" ?></td>
										<td><?= $row->Surat_Keperluan; ?></td>
										<td><?= $row->Surat_PrintYN == 'N' ? "Belum Print" : "Sudah Print"; ?></td>
										<td>
											<?php 
												$date = date_create($row->Surat_TglPengajuan);
												echo date_format($date, "d/m/Y"); 
											?>
										</td>
									</tr>
								<?php $no++; } ?>
							</table>
							<!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
						<?php } ?>						
					<?php } ?>					
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="m_modal" tabindex="-1">
	<div class="modal-dialog">
		<form class="form-horizontal" role="form" name="f_modal" id="f_modal" action="<?php echo base_url('MSurat/add'); ?>" method="post" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header no-padding">
					<div class="table-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="white">&times;</span>
						</button>
						Pengajuan Surat Pengantar RT
					</div>
				</div>
				<div id="konfirmasi"></div>
				<table class="table table-form">
					<input type="hidden" class="form-control" name="id" id="id" value="">
					<tr>
						<td style="width: 25%">
							<label for="nik">Anggota Keluarga</label>
						</td>
						<td style="width: 75%">
							<select  class="form-control" name="nik" id="nik" required>
								<option value=""> -- Pilih NIK -- </option>
								<?php foreach($nik as $row) { ?>
									<option value="<?= $row->KKD_NIK; ?>"><?= $row->KKD_NIK . " - " . $row->KKD_Nama; ?></option>
								<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td style="width: 25%">
							<label for="keperluan">Untuk Keperluan</label>
						</td>
						<td style="width: 75%">
							<select class="form-control" name="keperluan" id="keperluan" required>
								<option value="">--- Pilih Keperluan ---</option>
								<option value="Pembuatan KTP">Surat Pengantar Pembuatan KTP</option>
								<option value="Pembuatan KK">Surat Pengantar Pembuatan KK</option>
								<option value="Pembuatan Surat Nikah">Surat Pengantar Surat Nikah</option>
								<option value="Domisili">Surat Pengantar Domisili</option>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<small>Saya setuju dan menyatakan bahwa data yang dimasukkan adalah benar dan dapat dipertanggungjawabkan.</small>
							<small>Data yang sudah disimpan tidak dapat diubah lagi, sehingga pastikan data yang akan disimpan sudah benar.</small>
						</td>
					</tr>
				</table>
			</div>
			<div class="modal-footer">
				<button class="btn btn-white btn-info btn-bold" type="submit">
					<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Ajukan</button>
				<button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
					<i class="fa fa-minus-circle"></i> Tutup</button>
			</div>
		</form>
	</div>
</div>