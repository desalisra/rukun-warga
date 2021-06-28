<div class="navbar-top"></div>

<!-- Form PPDB -->
<section>
	<div class="container mb-3">
		<div class="row">
			<div class="col-lg-6">
				<?= $this->session->flashdata('message'); ?>
				<form action="<?= base_url('Pages/daftar') ?>" method="post">
					<h3>PENGAJUAN SURAT PENGANTAR RT</h3>
					<hr>
					<div class="form-group">
						<label for="nik">NIK</label>
						<input type="text" class="form-control" name="nik" id="nik" placeholder="NIK" required>
					</div>

					<div class="form-group">
						<label for="keperluan">Untuk Keperluan</label>
						<select class="form-control" name="keperluan" id="keperluan" required>
							<option value="">--- Pilih Keperluan ---</option>
							<option value="Pembuatan KTP">Surat Pengantar Pembuatan KTP</option>
							<option value="Pembuatan KK">Surat Pengantar Pembuatan KK</option>
							<option value="Pembuatan Surat Nikah">Surat Pengantar Surat Nikah</option>
							<option value="Domisili">Surat Pengantar Domisili</option>
						</select>
					</div>

					<small>Saya setuju dan menyatakan bahwa data yang dimasukkan adalah benar dan dapat dipertanggungjawabkan.</small>
					<small>Data yang sudah disimpan tidak dapat diubah lagi, sehingga pastikan data yang akan disimpan sudah benar.</small>
					<br><br>
					<button type="submit" class="btn btn-tombol btn-md">Ajukan Surat</button>
					<button type="reset" class="btn btn-tombol btn-md">Batal</button>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- End Form PPDB -->