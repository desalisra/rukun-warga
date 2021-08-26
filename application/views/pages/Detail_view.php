<div class="navbar-top"></div>

<!-- Visi Misi -->
<section class="jarak .bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2><?= $row->Berita_Judul ?></h2>
				<small class="mr-5">Created By : <?= $row->User_Username ?></small> <br>
				<small>Publish : <?= $row->Berita_UpdateTime ?></small>
				<hr>

				<!-- Bagian Berita -->
				<img width="50%" src="<?= base_url() . 'assets/img/berita/' . $row->Berita_Img ?>" alt="">
				<p><?= $row->Berita_Konten ?></p>

			</div>
		</div>
	</div>
</section>
<!-- Misi 