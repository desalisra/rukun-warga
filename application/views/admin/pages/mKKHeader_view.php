<!-- HEADER TITLE -->
<div class="main-content">
	<div class="main-content-inner">
		<script>
			function ubahData(id){
				$("#m_kategori").modal('show');
				$.ajax({
	                url: '<?php echo base_url('mJurusan/edit'); ?>',
	                method : "POST",
	                data : {id: id},
	                async : false,
	                dataType : 'json',
	                success : function(data){				
	                    var i;
	                    for(i=0; i<data.length; i++){
							$("#id").val(data[i].id_jurusan);
							$("#nama").val(data[i].nama_jurusan);
	                    }
	                }
	            });
				return false;
			}
		</script>
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-desktop"></i>
					<a href="#">Master Web</a>
				</li>
				<li class="active">Jurusan</li>
			</ul><!-- /.breadcrumb -->
			<div class="nav-search" id="nav-search">
			</div><!-- /.nav-search -->
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<div class="clearfix">
						<h4 class="pink">
							<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
							Daftar Jurusan
							<?= $this->session->flashdata('message'); ?>
							<div class="pull-right tableTools-container"></div>
						</h4>
					</div>
					<div class="table-header">
							Hasil untuk "Data Jurusan"
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>
		
					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>    
								<th class="center" width="10%">No</th>
								<th class="center" width="80%">Nama Jurusan</th>
								<th class="center" >
									<a href="#m_kategori" onclick="return tambah_kategori('0');" class="tooltip-info" data-toggle="modal" data-rel="tooltip" title="Tambah">
									<span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a>
								</th>
							</tr>
						</thead>	
							<?php 
								$no=1;
								foreach ($data as $row) { ?>
							<tr>
								<td align="center"><?php echo $no; ?></td>
								<td><?= $row->nama_jurusan; ?></td>
								<td align="center">
									<a href="#" class="tooltip-success" data-rel="tooltip" title="Ubah" 
										onclick="ubahData(<?= $row->id_jurusan; ?>)">
										<span class="green">
											<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
										</span>
									</a>
									<a href="<?php echo site_url(); ?>/mJurusan/hapus/<?= $row->id_jurusan; ?>" class="tooltip-error" data-rel="tooltip" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus akun ini')">
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
			<form class="form-horizontal" role="form" name="f_modal" id="f_modal" action="<?php echo base_url('mJurusan/add'); ?>" method="post" enctype="multipart/form-data">

						<div id="konfirmasi"></div>
						<table class="table table-form">
							<input type="hidden" class="form-control" name="id" id="id" value="">
							<tr>
								<td style="width: 25%">
									<label for="nama">Nomor KK</label>
								</td>
								<td style="width: 75%">
									<input type="text" class="form-control" name="nama" id="nama" required value="">
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
									<label for="nama">Telepon</label>
								</td>
								<td style="width: 75%">
									<input type="text" class="form-control" name="nama" id="nama" required value="">
								</td>
							</tr>
              <tr>
								<td style="width: 25%">
									<label for="nama">Alamat (Sesuai KK)</label>
								</td>
								<td style="width: 75%">
									<input type="text" class="form-control" name="nama" id="nama" required value="">
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