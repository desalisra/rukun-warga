<!-- HEADER TITLE -->
<div class="main-content">
	<div class="main-content-inner">
		<script>
			function ubahData(id){
				$("#m_modal").modal('show');
				$.ajax({
								url: '<?php echo base_url('MKKDetail/edit'); ?>',
								method : "POST",
								data : {id: id},
								async : false,
								dataType : 'json',
								success : function(data){				
									var i;
									for(i=0; i<data.length; i++){
										$("#id").val(data[i].id_dkk);
										$("#nik").val(data[i].nik_dkk);
										$("#nama").val(data[i].nama_dkk);
										$("#jk").val(data[i].jk_dkk);
										$("#tmpLahir").val(data[i].tmpLahir_dkk);
                    $("#tglLahir").val(data[i].tglLahir_dkk);
                    $("#agama").val(data[i].agama_dkk);
                    $("#pendidikan").val(data[i].pendidikan_dkk);
                    $("#pekerjaan").val(data[i].pekerjaan_dkk);
									}
								}
	            });
				return false;
			}

			function tambahData(){
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
		
					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th width="20%">No KK</th>
								<th width="20%">Kepala Keluarga</th>
								<th width="10%" class="center">Telepon</th>
								<th width="30%">Alamat</th>
								<th width="5%" class="center">Status Domisili</th>
							</tr>
						</thead>	
							<?php 
                $idHeader = "";
								foreach ($header as $row) { ?>
                  <tr>
                    <td><?= $row->no_kk; ?></td>
                    <td><?= $row->kepala_kk; ?></td>
                    <td><?= $row->telp_kk; ?></td>
                    <td><?= $row->alamat_kk; ?></td>
                    <td  class="center"><?= $row->domisili_kk; ?></td>
                  </tr>
							<?php 
                  $idHeader = $row->id_kk;
                } 
              ?>  
					</table>
					<!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
          
          <div class="table-header">
							Daftar Anggota Keluarga 
					</div>
          <!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>    
								<th width="10%" class="center">
									<a href="#m_modal" onclick="tambahData();" class="tooltip-info" data-toggle="modal" data-rel="tooltip" title="Tambah">
									<span class="blue"><i class="ace-icon fa fa-plus bigger-120"></i> Add Data</span></a>
								</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>JK</th>
								<th>Tempat Lahir</th>
								<th>Tanggal Lahir</th>
								<th>Agama</th>
								<th>Pendidikan</th>
								<th>Pekerjaan</th>
							</tr>
						</thead>	
							<?php 
                if (count($detail) > 0) {
                  foreach ($detail as $row) { ?>
                  <tr>
                    <td>
                      <a href="#" class="tooltip-primary" data-rel="tooltip" title="Detail">
                        <i class="ace-icon fa fa-file-o bigger-140"></i>
                      </a>
                      | 
                      <a href="#" class="tooltip-success" data-rel="tooltip" title="Ubah" 
                        onclick="ubahData(<?= $row->id_dkk; ?>)">
                          <i class="ace-icon fa fa-pencil-square-o bigger-150"></i>
                      </a>
                      | 
                      <a href="<?= base_url(); ?>/MKKDetail/hapus/<?= $row->id_dkk; ?>" class="tooltip-error" data-rel="tooltip" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus akun ini')">
                        <i class="ace-icon fa fa-trash-o bigger-150"></i>
                      </a>									
                    </td>
                    <td><?= $row->nik_dkk; ?></td>
                    <td><?= $row->nama_dkk; ?></td>
                    <td><?= $row->jk_dkk; ?></td>
                    <td><?= $row->tmpLahir_dkk; ?></td>
                    <td><?= $row->tglLahir_dkk; ?></td>
                    <td><?= $row->agama_dkk; ?></td>
                    <td><?= $row->pendidikan_dkk; ?></td>
                    <td><?= $row->pekerjaan_dkk; ?></td>
                  </tr>
							<?php 
                  } 
                }else{
              ?>
                <tr>
                  <td colspan="9" class="center">Tidak Ada Data</td>
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
		<div class="modal-content">
			<div class="modal-header no-padding">
				<div class="table-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="white">&times;</span>
					</button>
					Add Data Kartu Keluarga
				</div>
			</div>
			<form class="form-horizontal" role="form" name="f_modal" id="f_modal" action="<?= base_url('MKKDetail/add'); ?>" method="post" enctype="multipart/form-data">
				<div id="konfirmasi"></div>
          <table class="table table-form">
            <input type="hidden" class="form-control" name="id" id="id" value="">
            <input type="hidden" class="form-control" name="idHeader" id="idHeader" value="<?= $idHeader; ?>">
            <tr>
              <td style="width: 25%">
                <label for="nik">NIK</label>
              </td>
              <td style="width: 75%">
                <input type="text" class="form-control" name="nik" id="nik" required value="">
              </td>
            </tr>
            <tr>
              <td style="width: 25%">
                <label for="nama">Nama</label>
              </td>
              <td style="width: 75%">
                <input type="text" class="form-control" name="nama" id="nama" required value="">
              </td>
            </tr>
            <tr>
              <td style="width: 25%">
                <label for="jk">Jenis Kelamin</label>
              </td>
              <td style="width: 75%">
                <select class="form-control" name="jk" id="jk" required>
                  <option value="">-- Pilih Jenis Kelamin --</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </td>
            </tr>
            <tr>
              <td style="width: 25%">
                <label for="tmpLahir">Tempat Lahir</label>
              </td>
              <td style="width: 75%">
                <input type="text" class="form-control" name="tmpLahir" id="tmpLahir" required value="">
              </td>
            </tr>
            <tr>
              <td style="width: 25%">
                <label for="tglLahir">Tanggal Lahir</label>
              </td>
              <td style="width: 75%">
                <input type="date" class="form-control" name="tglLahir" id="tglLahir" required>
              </td>
            </tr>
            <tr>
              <td style="width: 25%">
                <label for="agama">Agama</label>
              </td>
              <td style="width: 75%">
                <select class="form-control" name="agama" id="agama" required>
                  <option value="">-- Pilih Agama --</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Khatolik">Khatolik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                </select>
              </td>
            </tr>
            <tr>
              <td style="width: 25%">
                <label for="pendidikan">Pendidikan</label>
              </td>
              <td style="width: 75%">
                <input type="text" class="form-control" name="pendidikan" id="pendidikan" required value="">
              </td>
            </tr>
            <tr>
              <td style="width: 25%">
                <label for="pekerjaan">Pekerjaan</label>
              </td>
              <td style="width: 75%">
                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required value="">
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