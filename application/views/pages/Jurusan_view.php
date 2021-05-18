<div class="navbar-top"></div>

<!-- Visi Misi -->
<section class="jarak"> 
	<div class="container">
		<div class="row">
			<div class="col-lg-11">
				<h2><?= $row->nama_jurusan?></h2>
				<p class=""><?= $row->deskripsi_jurusan?></p>
				<p class="font-weight-bold">Kompetensi</p>
				<p class=""><?= $row->kompetensi_jurusan?></p>
			</div>
			<div class="col-lg-1 vline">
				<p class="">Didukung Oleh</p>
				<img src="<?= base_url('assets/img/family/telkom1.png')?>" alt="">
				<img src="<?= base_url('assets/img/family/telkom2.png')?>" alt="">
				<img src="<?= base_url('assets/img/family/telkom3.png')?>" alt="">
				<img src="<?= base_url('assets/img/family/telkom4.png')?>" alt="">
			</div>
		</div>
	</div>
</section>
<!-- Misi -->