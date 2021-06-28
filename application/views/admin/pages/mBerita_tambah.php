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
				<div class="col-xs-8">

					<div class="clearfix">
						<h4 class="pink">
							Tambah Pengumuman
							<div class="pull-right tableTools-container"></div>
						</h4>
					</div>

					<?php if ($edit) { ?>
						<form action="<?= base_url('mBerita/edit') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<input type="hidden" name="id" class="form-control" value="<?= $row->id_berita; ?>">
							</div>
							<div class="form-group">
								<input type="text" id="judul" name="judul" class="form-control" placeholder="Judul Berita" value="<?= $row->judul_berita; ?>">
								<?= form_error('judul', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group">
								<textarea id="froala-editor" name="berita" rows="10"><?= $row->post_berita; ?></textarea>
								<?= form_error('berita', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group">
								<input type="file" id="judul" name="gambar" multiple>
							</div>
							<button type="submit" class="btn btn-primary">
								<i class="fa fa-upload" aria-hidden="true"></i>
								Update
							</button>
						</form>
					<?php } else { ?>
						<form action="<?= base_url('mBerita/add') ?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" class="form-control">
							<div class="form-group">
								<input type="text" id="judul" name="judul" class="form-control" placeholder="Judul Berita">
								<?= form_error('judul', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group">
								<textarea id="froala-editor" name="berita" rows="10"></textarea>
								<?= form_error('berita', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group">
								<input type="file" id="judul" name="gambar" multiple>
							</div>
							<button type="submit" class="btn btn-primary">
								<i class="fa fa-upload" aria-hidden="true"></i>
								Publish
							</button>
						</form>
					<?php } ?>
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