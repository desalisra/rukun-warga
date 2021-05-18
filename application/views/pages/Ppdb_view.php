<div class="navbar-top"></div>

<!-- Form PPDB -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<?= $this->session->flashdata('message'); ?>
				<form action="<?= base_url('Pages/daftar')?>" method="post">
					<h3>DATA CALON PESERTA DIDIK</h3>
					<hr>
					<div class="form-group">
						<label for="nama_siswa">Nama Lengkap*</label>
						<input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Nama Lengkap Siswa" required>
					</div>
					<div class="form-group">
						<label for="tmp_lahir">Tempat Lahir</label>
						<input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" placeholder="Tempat Lahir"required>
					</div>
					<div class="form-group">
						<label for="tgl_lahir">Tanggal lahir*</label>
						<small id="emailHelp" class="form-text text-muted">(Klik untuk mengganti tanggal)</small>
						<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder=""required>
					</div>
					<div class="form-group">
						<label for="">Jenis Kelamin*</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="jk" id="jk1" value="L" checkedrequired>
					  <label class="form-check-label" for="jk1"required>Laki-Laki</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="jk" id="jk1" value="P"required>
					  <label class="form-check-label" for="jk2"required>Perempuan</label>
					</div>
					<div class="form-group">
						<label for="agama">Agama</label>
						<select class="form-control" name="agama" id="agama"required>
						  <option>-- Piliih Agama --</option>
						  <option>Islam</option>
						  <option>Kristen</option>
						  <option>Hindu</option>
						  <option>Budha</option>
						</select>
					</div>

					<h3>DATA ORANG TUA</h3>
					<hr>
					<div class="form-group">
						<label for="nama_ortu">Nama Orang Tua/Wali*</label>
						<input type="text" class="form-control" name="nama_ortu" id="nama_ortu" placeholder="Nama Orang Tua/Wali"required>
					</div>
					<div class="form-group">
						<label for="alamat_rumah">Alamat Rumah*</label>
						<textarea class="form-control" name="alamat_rumah" id="alamat_rumah" rows="3" placeholder="Masukan Alamat Lengkap"required></textarea>
					</div>
					<div class="form-group">
						<label for="no_tlp">No. HP Orang Tua*</label>
						<input type="text" class="form-control" name="no_tlp" id="no_tlp" placeholder="XXXXXXXX"required>
					</div>
					<h3>LATAR BELAKANG PENDIDIKAN</h3>
					<hr>
					<div class="form-group">
						<label for="asl_sekolah">Asal Sekolah*</label>
						<input type="text" class="form-control" name="asl_sekolah" id="asl_sekolah" placeholder="Nama Orang Tua/Wali"required>
					</div>
					<div class="form-group">
						<label for="alamat_sekolah">Alamat Rumah*</label>
						<textarea class="form-control" name="alamat_sekolah" id="alamat_sekolah" rows="3" placeholder="Masukan Alamat Lengkap"required></textarea>
					</div>

					<h3>NILAI SKHUN SMP</h3>
					<hr>
					<table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th width="70%" scope="col">Mata Pelajaran / Perolehan Nilai Untuk</th>
					      <th width="15%" scope="col">Nilai Sekolah</th>
					      <th width="15%" scope="col">Nilai UN</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Bahasa Indonesia</td>
					      <td>
					      	<div class="form-group">
								<input name="ns_indo" type="text" class="form-control" id=""required >
							</div>
					      </td>
					      <td>
							<div class="form-group">
								<input name="nu_indo" type="text" class="form-control" id=""required >
							</div>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>Bahasa Inggris</td>
					      <td>
					      	<div class="form-group">
								<input name="ns_ing" type="text" class="form-control" id=""required >
							</div>
					      </td>
					      <td>
							<div class="form-group">
								<input name="nu_ing" type="text" class="form-control" id=""required >
							</div>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td>Matematika</td>
					      <td>
					      	<div class="form-group">
								<input name="ns_mtk" type="text" class="form-control" id="" required>
							</div>
					      </td>
					      <td>
					      	<div class="form-group">
								<input name="nu_mtk" type="text" class="form-control" id=""required >
							</div>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">4</th>
					      <td>IPA</td>
					      <td>
					      	<div class="form-group">
								<input name="ns_ipa" type="text" class="form-control" id=""required >
							</div>
					      </td>
					      <td>
					      	<div class="form-group">
								<input name="nu_ipa" type="text" class="form-control" id="" required>
							</div>
					      </td>
					    </tr>
					  </tbody>
					</table>
					<div class="form-group">
						<label for="jurusan">Jurusan yang Diminati</label>
						<select class="form-control" id="jurusan" name="jurusan"required>
							<option>-- Piliih Jurusan --</option>
						  	<?php foreach($jurusan as $row ){ ?>
						  		<option value="<?= $row->id_jurusan?>"><?= $row->nama_jurusan?></option>
							<?php } ?>
						</select>
					</div>

					<small>Saya setuju dan menyatakan bahwa data yang dimasukkan adalah benar dan dapat dipertanggungjawabkan.</small>
					<small>Data yang sudah disimpan tidak dapat diubah lagi, sehingga pastikan data yang akan disimpan sudah benar.</small>
					<br><br>
					<button type="submit" class="btn btn-tombol btn-md">Daftar</button>
					<button type="reset" class="btn btn-tombol btn-md">Batal</button>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- End Form PPDB -->