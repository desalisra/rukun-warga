<!-- HEADER TITLE -->
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-desktop"></i>
					<a href="#">Master Web</a>
				</li>
				<li class="active">Berita Sekolah</li>
			</ul><!-- /.breadcrumb -->
			<div class="nav-search" id="nav-search">
			</div><!-- /.nav-search -->
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-xs-8">
					<?php if($edit){ ?>
						<form action="<?= base_url('mVisiMisi/edit')?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" class="form-control" value="<?= $data->Visimisi_ID?>">
							<div class="form-group">
								<label class="pink">Visi</label>
								<textarea id="froala-editor" name="text1" rows="10"><?= $data->Visimisi_Visi; ?></textarea>
								<?= form_error('berita','<small class="text-danger">','</small>')?>
							</div>
							<div class="form-group">
								<label class="pink">Misi</label>
								<textarea id="froala-editor" name="text2" rows="10"><?= $data->Visimisi_Misi; ?></textarea>
								<?= form_error('berita','<small class="text-danger">','</small>')?>
							</div>
							<button type="submit" class="btn btn-primary">
								<i class="fa fa-upload" aria-hidden="true"></i>
								Update
							</button>
						</form>
					<?php } ?>
				</div>
			</div>
		</div>
	</div> 
</div> 


