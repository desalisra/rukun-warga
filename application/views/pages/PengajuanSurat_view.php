<div class="navbar-top"></div>

<!-- Form PPDB -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<?= $this->session->flashdata('message'); ?>
				<form action="<?= base_url('Pages/daftar')?>" method="post">
					<h3>PENGAJUAN SURAT PENGANTAR RT</h3>
					<hr>
					<div class="form-group">
						<label for="nik">NIK</label>
						<input type="text" class="form-control" name="nik" id="nik" placeholder="NIK" required>
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
					</div>
					<div class="form-group">
						<label for="tmp_lahir">Tempat Lahir</label>
						<input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" placeholder="Tempat Lahir"required>
					</div>
					<div class="form-group">
						<label for="tgl_lahir">Tanggal lahir</label>
						<small id="emailHelp" class="form-text text-muted">(Klik untuk mengganti tanggal)</small>
						<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder=""required>
					</div>
					<div class="form-group">
						<label for="">Jenis Kelamin</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="jk" id="jk1" value="L" checkedrequired>
					  <label class="form-check-label" for="jk1"required>Laki-Laki</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="jk" id="jk1" value="P"required>
					  <label class="form-check-label" for="jk2"required>Perempuan</label>
					</div>
					
					<div class="form-group mt-2">
						<label for="agama">Agama</label>
						<select class="form-control" name="agama" id="agama"required>
						  <option>-- Piliih Agama --</option>
						  <option>Islam</option>
						  <option>Kristen</option>
						  <option>Hindu</option>
						  <option>Budha</option>
						</select>
					</div>

					<div class="form-group">
						<label for="alamat">Alamat Sesuai KTP</label>
						<textarea class="form-control" name="alamat" id="alamat" placeholder="Alamar" required></textarea>
					</div>

					<div class="form-group">
						<label for="keperluan">Untuk Keperluan</label>
						<input type="text" class="form-control" name="keperluan" id="keperluan" placeholder="Keperluan (Pembuatan KTP, Pengurusan Pernikahan, dll)" required>
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