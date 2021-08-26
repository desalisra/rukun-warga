


<div class="navbar-top"></div>

<!-- Berita -->
<section class="jarak">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>BERITA TERBARU</h2>
				<hr>

				<!-- Bagian Berita -->
				<?php if(is_null($data)){?>
					<div class="card mb-5">
						<div class="card-body">
							<h4 class="font-weight-lighter">Tidak Ada Kegiatan</h4>
						</div>
					</div>
				<?php  } else { ?>
					<?php foreach ($data as $row) { ?>
						<div class="card mb-3">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-2">
										<img src="<?= base_url() . 'assets/img/berita/' . $row->Berita_Img ?>" class="img-thumbnail" alt="">
									</div>
									<div class="col-lg-10">
										<a href="<?= base_url() . 'Pages/detail/' . $row->Berita_Id; ?>">
											<h4 class="font-weight-lighter"><?= $row->Berita_Judul ?></h4>
										</a>
										<small>Publish : <?php echo $row->Berita_UpdateTime ?></small>
										<small>Publish : <?php echo time_since(strtotime('2021-08-21 11:01:09')) ?></small>
										<p><?= substr(trim($row->Berita_Konten), 0, 200) ?>... <a href="<?= base_url() . 'Pages/detail/' . $row->Berita_Id; ?>">Selengkapnya</a></p>
									</div>
								</div>
							</div>
						</div>
					<?php	} ?>
				<?php	} ?>
			</div>
		</div>
	</div>
</section>



<?php
 
 function time_since($original)
 {
	 date_default_timezone_set('Asia/Jakarta');
	 $chunks = array(
			 array(60 * 60 * 24 * 365, 'tahun'),
			 array(60 * 60 * 24 * 30, 'bulan'),
			 array(60 * 60 * 24 * 7, 'minggu'),
			 array(60 * 60 * 24, 'hari'),
			 array(60 * 60, 'jam'),
			 array(60, 'menit'),
	 );
	
	 $today = time();
	 $since = $today - $original;
	
	 if ($since > 604800)
	 {
		 $print = date("M jS", $original);
		 if ($since > 31536000)
		 {
			 $print .= ", " . date("Y", $original);
		 }
		 return $print;
	 }
	
	 for ($i = 0, $j = count($chunks); $i < $j; $i++)
	 {
		 $seconds = $chunks[$i][0];
		 $name = $chunks[$i][1];
	
		 if (($count = floor($since / $seconds)) != 0)
			 break;
	 }
	
	 $print = ($count == 1) ? '1 ' . $name : "$count {$name}";

	 if($since < 0) {
		return 'Update terbaru';	 
	 }else{
		return $print . ' yang lalu';
	 }
 }
 
 ?>