<div class="navbar-top"></div>

<!-- Visi Misi -->
<section class="jarak .bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2><?= $row->judul_berita ?></h2>
				<hr>

				<!-- Bagian Berita -->
				<img width="50%" src="<?= base_url() . 'assets/img/berita/' . $row->img_berita ?>" alt="">
				<p><?= $row->post_berita ?></p>

			</div>
		</div>
	</div>
</section>
<!-- Misi 