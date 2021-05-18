<!-- HEADER TITLE -->
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-desktop"></i>
					<a href="#">Master Web</a>
				</li>
				<li class="active">Visi Misi</li>
			</ul><!-- /.breadcrumb -->
			<div class="nav-search" id="nav-search">
			</div><!-- /.nav-search -->
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<div class="clearfix">
						<h4 class="pink">
							Visi Misi
							<?= $this->session->flashdata('message'); ?>
							<div class="pull-right tableTools-container"></div>
						</h4>
					</div>
					<div class="mb-3">
						<a href="<?= base_url().'mVisiMisi/edit/'.$data->id_visimisi; ?>" class="btn btn-primary">
							<i class="ace-icon fa fa-pencil-square-o bigger-120" aria-hidden="true"></i>
							Edit Visi Misi
						</a>
					</div>
					<br>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>
		
					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th class="center" width="50%">Visi</th>
								<th class="center" width="50%">Misi</th>
							</tr>
						</thead>
							<tr>
								<td><?= $data->visi_visimisi; ?></td>
								<td><?= $data->misi_visimisi; ?></td>
							</tr> 
					</table>
					<!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
				</div>
			</div>
		</div>
	</div> 
</div> 


