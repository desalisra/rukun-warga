<div class="navbar-top"></div>

<!-- Visi Misi -->
<section class="jarak .bg-light"> 
	<div class="container">
		<div class="row">
			<div class="col-lg-11">
				<h2><?= $row->judul_berita?></h2>
				<hr>
				
				<!-- Bagian Berita -->
				<img width="25%" src="<?= base_url().'assets/img/gedung.jpg'?>" alt=""> 
				<img width="25%" src="<?= base_url().'assets/img/gedung1.jpg'?>" alt="">
				<p><?= $row->post_berita?></p>
				
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
<!-- Misi 