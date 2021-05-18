<div class="navbar-top"></div>

<!-- Visi Misi -->
<section class="jarak"> 
	<div class="container">
		<div class="row">
			<div class="col-lg-11">
				<h2>BERITA TERBARU</h2>
				<hr>
				
				<!-- Bagian Berita -->
				<?php foreach($data as $row){ ?>
				<div class="card mb-3">
				  <div class="card-body">
				    <div class="row">
				    	<div class="col-lg-4">
				    		<img src="<?= base_url().'assets/img/berita/'.$row->img_berita ?>" class="img-fluid" alt="">
				    	</div>
				    	<div class="col-lg-8">
				    		<a href="<?= base_url().'Pages/detail/'.$row->id_berita; ?>"><h3 class="font-weight-lighter"><?= $row->judul_berita?></h3></a>
				    		<small>Publish : <?= $row->tgl_berita?></small>
				    		<p><?= substr(trim($row->post_berita), 0,200)?>... <a href="<?= base_url().'Pages/detail/'.$row->id_berita; ?>">Selengkapnya</a></p>
				    	</div>
				    </div>
				  </div>
				</div>
				<?php } ?>
				
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