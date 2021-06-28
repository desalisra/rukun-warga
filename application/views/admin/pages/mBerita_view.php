<!-- HEADER TITLE -->
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-desktop"></i>
					<a href="#">Master Web</a>
				</li>
				<li class="active">Pengumuman RT</li>
			</ul><!-- /.breadcrumb -->
			<div class="nav-search" id="nav-search">
			</div><!-- /.nav-search -->
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<div class="clearfix">
						<h4 class="pink">
							Pengumuman Kegiatan
							<div class="pull-right tableTools-container"></div>
						</h4>

						<?= $this->session->flashdata('message'); ?>
					</div>
					<div class="">
						<a href="<?= base_url('mBerita/add') ?>" class="btn btn-primary">
							<i class="fa fa-plus" aria-hidden="true"></i>
							Tambah Kegiatan
						</a>
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"><br></div>

					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="dataTable" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th class="center" width="10%">No</th>
								<th class="center" width="60%">Judul</th>
								<th class="center" width="20%">Tanggal Post</th>
								<th class="center">Action</th>
							</tr>
						</thead>
						<?php
						$no = 1;
						foreach ($data as $row) { ?>
							<tr>
								<td align="center"><?= $no; ?></td>
								<td><?= $row->judul_berita; ?></td>
								<td class="center"><?= $row->tgl_berita; ?></td>
								<td align="center">
									<a href="<?= base_url() . 'mBerita/edit/' . $row->id_berita; ?>" class="btn btn-success btn-sm" title="Edit" terget="_blank">
										<i class="ace-icon fa fa-pencil-square-o"></i>
									</a>
									<a href="<?php echo base_url(); ?>mBerita/hapus/<?= $row->id_berita; ?>" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')">
										<i class="ace-icon fa fa-trash-o"></i>
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
					Kategori Produk
				</div>
			</div>
			<form name="f_kategori" id="f_kategori" action="<?php echo site_url('groupProduct/add'); ?>" method="post">
				<div class="modal-body">
					<input type="hidden" name="id" id="id" value="">
					<div id="konfirmasi"></div>
					<table class="table table-form">
						<input type="hidden" class="form-control" name="txtKodeProduk" id="txtKodeProduk" value="">
						<tr>
							<td style="width: 25%">Kategori Produk</td>
							<td style="width: 75%">
								<input type="text" class="form-control" name="txtGroupProduk" id="txtGroupProduk" required value="">
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