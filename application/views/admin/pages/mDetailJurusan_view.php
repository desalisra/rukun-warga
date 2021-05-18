<!-- HEADER TITLE -->
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-desktop"></i>
					<a href="#">Master Web</a>
				</li>
				<li class="active">Detail Jurusan</li>
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
							<div class="pull-right tableTools-container"></div>
						</h4>
					</div>
					<div class="mb-3">
						<a href="<?= base_url('mDetailJurusan/add')?>" class="btn btn-primary">
							<i class="fa fa-plus" aria-hidden="true"></i>
							Tambah Detail
						</a>
					</div>
					<br>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>
		
					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>    
								<th class="center" width="10%">No</th>
								<th class="center" width="80%">Nama Jurusan</th>
								<th class="center" >
									Action
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
									<a href="<?= base_url().'mDetailJurusan/edit/'.$row->id_jurusan; ?>" class="tooltip-success" data-rel="tooltip" title="Ubah" >
										<span class="green">
											<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
										</span>
									</a>
									<a href="<?= base_url().'mDetailJurusan/hapus/'.$row->id_detailJurusan; ?>" class="tooltip-error" data-rel="tooltip" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus akun ini')">
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


