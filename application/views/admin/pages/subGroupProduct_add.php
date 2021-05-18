<!-- HEADER TITLE -->
<div class="main-content">
	<div class="main-content-inner">
		<script>
			function ubahData(id){
				$("#m_subkategori").modal('show');
				$.ajax({
	                url: '<?php echo site_url(); ?>/subgroupProduct/edit/',
	                method : "POST",
	                data : {id: id},
	                async : false,
	                dataType : 'json',
	                success : function(data){				
	                    var i;
	                    for(i=0; i<data.length; i++){
							$("#txtKodeProduk").val(data[i].sSub_Auto);
							$("#txtGroupProduk").val(data[i].sSub_Name);
							$("#cmbGroup").val(data[i].ssub_groupid);		
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
				<li class="active">Sub Group Produk</li>
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
							Sub Group Produk
							<div class="pull-right tableTools-container"></div>
						</h4>
					</div>
					<div class="table-header">
							Hasil untuk "Sub Group Produk"
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>

					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>    
								<th class="center" width="6%">No</th>
								<th class="center" width="40%">Group Produk</th>
								<th class="center" width="40%">Sub Group Produk</th>
								<th class="center" >
									<a href="#m_subkategori" onclick="return tambah_kategori('0');" class="tooltip-info" data-toggle="modal" data-rel="tooltip" title="Tambah">
									<span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a>
								</th>
							</tr>
						</thead>	
							<?php 
								$no=1;
								foreach ($data as $row) { ?>
							<tr>
								<td align="center"><?php echo $no; ?></td>
								<td><?= $row->sSub_Name; ?></td>
								<td><?= $row->GroupProduct_Name; ?></td>
								<td align="center">
									<a href="#" class="tooltip-success" data-rel="tooltip" title="Ubah" 
										onclick="ubahData(<?= $row->sSub_Auto; ?>)">
										<span class="green">
											<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
										</span>
									</a>
									<a href="<?= site_url(); ?>/subGroupProduct/hapus/<?= $row->sSub_Auto; ?>" class="tooltip-error" data-rel="tooltip" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini')">
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

<div class="modal fade" id="m_subkategori" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header no-padding">
				<div class="table-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="white">&times;</span>
					</button>
					Kategori Sub Produk
				</div>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form" name="f_modal" id="f_modal" action="<?php echo site_url('subGroupProduct/add'); ?>" method="post" enctype="multipart/form-data">

					<input type="hidden" name="id" id="id" value="">
					<div id="konfirmasi"></div>
					<table class="table table-form">
						<input type="hidden" class="form-control" name="txtKodeProduk" id="txtKodeProduk" value="">
						<tr>
							<td style="width: 25%">Kelompok Produk</td>
							<td style="width: 75%">
								<select name="cmbGroup" id="cmbGroup" class="form-control" required data-parsley-error-message="Field ini harus diisi">
									<option value=""></option>
									<?php
									foreach ($groupProduct as $row) { ?>
										<option value='<?= $row->GroupProduct_auto;?>' $cek>
											<?= $row->GroupProduct_Name; ?>
										</option>";
									<?php }
									?>
								</select>
							</td>
						</tr>
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

