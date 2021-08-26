
<?php $akses = $this->session->userdata('user_akses'); ?>
<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try {
			ace.settings.loadState('main-container')
		} catch (e) {}
	</script>

	<div id="sidebar" class="sidebar responsive ace-save-state">
		<script type="text/javascript">
			try {
				ace.settings.loadState('sidebar')
			} catch (e) {}
		</script>

		<ul class="nav nav-list">
			<li class="active">
				<a href="<?= base_url('admin') ?>">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>
				<b class="arrow"></b>
			</li>

			<?php if ($akses == "ADMIN") { ?>
			<li class="">
				<a href="<?= base_url('mVisiMisi') ?>">
					<i class="menu-icon fa fa-building"></i>
					<span class="menu-text">
						Profil
					</span>
					<b class="arrow fa fa-angle-right"></b>
				</a>
			</li>
			<?php }?>
			

			<li class="">
				<a href="<?= base_url('MKKHeader') ?>">
					<i class="menu-icon fa fa-book"></i>
					<span class="menu-text">
						Data Warga
					</span>
					<b class="arrow fa fa-angle-right"></b>
				</a>
			</li>
			
			<?php if ($akses == "ADMIN" || $akses == "OPRATION") { ?>
			<li class="">
				<a href="<?= base_url('mBerita') ?>">
					<i class="menu-icon fa fa-newspaper-o"></i>
					<span class="menu-text">
						Pengumuman
					</span>
					<b class="arrow fa fa-angle-right"></b>
				</a>
			</li>
			<?php }?>

			<li class="">
				<a href="<?= base_url('MSurat') ?>">
					<i class="menu-icon fa fa-envelope"></i>
					<span class="menu-text">
						Surat
					</span>
					<b class="arrow fa fa-angle-right"></b>
				</a>
			</li>

			<?php if ($akses == "ADMIN") { ?>
			<li class="">
				<a href="<?= base_url('MKeuangan') ?>">
					<i class="menu-icon fa fa-file-text"></i>
					<span class="menu-text">
						Keuangan
					</span>
					<b class="arrow fa fa-angle-right"></b>
				</a>
			</li>
			<?php }?>

		</ul><!-- /.nav-list -->
	</div>