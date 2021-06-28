<div class="navbar-top"></div>

<!-- Visi Misi -->
<section class="jarak">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>BERITA TERBARU</h2>
				<hr>

				<!-- Bagian Berita -->
				<?php foreach ($data as $row) { ?>
					<div class="card mb-3">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-2">
									<img src="<?= base_url() . 'assets/img/berita/' . $row->img_berita ?>" class="img-thumbnail" alt="">
								</div>
								<div class="col-lg-10">
									<a href="<?= base_url() . 'Pages/detail/' . $row->id_berita; ?>">
										<h4 class="font-weight-lighter"><?= $row->judul_berita ?></h4>
									</a>
									<small>Publish : <?= $row->tgl_berita ?></small>
									<p><?= substr(trim($row->post_berita), 0, 200) ?>... <a href="<?= base_url() . 'Pages/detail/' . $row->id_berita; ?>">Selengkapnya</a></p>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<!-- Misi -->