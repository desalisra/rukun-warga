<?php $userAkses = $this->session->userdata('user_akses'); ?>

<!-- HEADER TITLE -->
<div class="main-content">
	<div class="main-content-inner">
		<script>
			function ubahData(id) {
				$("#m_modal").modal('show');
				$.ajax({
					url: '<?php echo base_url('MKKHeader/edit'); ?>',
					method: "POST",
					data: {
						id: id
					},
					async: false,
					dataType: 'json',
					success: function(data) {
						var i;
						for (i = 0; i < data.length; i++) {
							$("#id").val(data[i].KKH_ID);
							$("#nokk").val(data[i].KKH_NoKK);
							$("#nama").val(data[i].KKH_KepalaKK);
							$("#telepon").val(data[i].KKH_Tlp);
							$("#alamat").val(data[i].KKH_Alamat);
							if (data[i].KKH_DomisiliYN == "Y") {
								$("#domisili").attr("checked", "checked");
							}
						}
					}
				});
				return false;
			}

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
					<a href="#">Master</a>
				</li>
				<li class="active">Data KK</li>
			</ul><!-- /.breadcrumb -->
			<div class="nav-search" id="nav-search">
			</div><!-- /.nav-search -->
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<div class="clearfix">
						<h4 class="pink">
							Data Kartu Keluarga
							<div class="pull-right tableTools-container"></div>
						</h4>
					</div>

					<div class="table-header">
						Daftar KK
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>
					
					<!-- Flash Message -->
					<?= $this->session->flashdata('message'); ?>

					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="dataTable" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th width="10%" class="center">
									<?php if($userAkses == "USER"){ ?>
										<a href="#m_modal" onclick="tambahData();" class="tooltip-info" data-toggle="modal" data-rel="tooltip" title="Tambah">
											<span class="blue"><i class="ace-icon fa fa-plus bigger-120"></i> Add Data</span>
										</a>
									<?php }else{ echo "Action"; } ?>
								</th>
								<th width="20%">No KK</th>
								<th width="20%">Kepala Keluarga</th>
								<th width="10%" class="center">Telepon</th>
								<th width="25%">Alamat</th>
								<th width="5%" class="center">Domisili</th>
								<th width="5%" class="center">Status</th>
							</tr>
						</thead>
						<?php
						foreach ($data as $row) { ?>
							<tr>
								<td>
									<?php if($userAkses == "ADMIN"){ ?>
										<a href="<?= base_url(); ?>/MKKHeader/confirm/<?= $row->KKH_ID; ?>" class="tooltip-primary" data-rel="tooltip" title="Confirm">
											<i class="ace-icon fa fa-check-square-o bigger-140"></i>
										</a> |
									<?php } ?>
									<a href="<?= base_url(); ?>MKKDetail/index/<?= $row->KKH_ID; ?>" class="tooltip-primary" data-rel="tooltip" title="Detail">
										<i class="ace-icon fa fa-file-o bigger-140"></i>
									</a> |
									<?php if($userAkses == "USER"){ ?>
										<a href="#" class="tooltip-success" data-rel="tooltip" title="Ubah" onclick="ubahData(<?= $row->KKH_ID; ?>)">
											<i class="ace-icon fa fa-pencil-square-o bigger-150"></i>
										</a> |
										<a href="<?= base_url(); ?>/MKKHeader/hapus/<?= $row->KKH_ID; ?>" class="tooltip-error" data-rel="tooltip" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus akun ini')">
											<i class="ace-icon fa fa-trash-o bigger-150"></i>
										</a>
									<?php } ?>
								</td>
								<td><?= $row->KKH_NoKK; ?></td>
								<td><?= $row->KKH_KepalaKK; ?></td>
								<td><?= $row->KKH_Tlp; ?></td>
								<td><?= $row->KKH_Alamat; ?></td>
								<td class="center"><?= $row->KKH_DomisiliYN; ?></td>
								<td><?= $row->KKH_Status == "C" ? "Data Terverifikasi" : "Menunggu Verifikasi"; ?></td>
							</tr>
						<?php } ?>
					</table>
					<!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="m_modal" tabindex="-1">
	<div class="modal-dialog">
		<form class="form-horizontal" role="form" name="f_modal" id="f_modal" action="<?php echo base_url('MKKHeader/add'); ?>" method="post" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header no-padding">
					<div class="table-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="white">&times;</span>
						</button>
						Add Data Kartu Keluarga
					</div>
				</div>
				<div id="konfirmasi"></div>
				<table class="table table-form">
					<input type="hidden" class="form-control" name="id" id="id" value="">
					<tr>
						<td style="width: 25%">
							<label for="nokk">Nomor KK</label>
						</td>
						<td style="width: 75%">
							<input type="text" class="form-control" name="nokk" id="nokk" required value="">
						</td>
					</tr>
					<tr>
						<td style="width: 25%">
							<label for="nama">Kepala Keuaraga (Sesuai KK)</label>
						</td>
						<td style="width: 75%">
							<input type="text" class="form-control" name="nama" id="nama" required value="">
						</td>
					</tr>
					<tr>
						<td style="width: 25%">
							<label for="telepon">Telepon</label>
						</td>
						<td style="width: 75%">
							<input type="text" class="form-control" name="telepon" id="telepon" required value="">
						</td>
					</tr>
					<tr>
						<td style="width: 25%">
							<label for="alamat">Alamat (Sesuai KK)</label>
						</td>
						<td style="width: 75%">
							<input type="text" class="form-control" name="alamat" id="alamat" required value="">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" name="domisili" id="domisili" value="N">
								<label class="form-check-label" for="domisili">Status Domisili</label>
							</div>
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