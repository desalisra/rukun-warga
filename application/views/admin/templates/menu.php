<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try{ace.settings.loadState('main-container')}catch(e){}
	</script>

	<div id="sidebar" class="sidebar responsive ace-save-state">
		<script type="text/javascript">
			try{ace.settings.loadState('sidebar')}catch(e){}
		</script>

		<ul class="nav nav-list">
			<li class="active">
				<a href="<?= base_url('admin')?>">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>

				<b class="arrow"></b>
			</li>

			<li class="">
				<a href="<?= base_url('mVisiMisi')?>">
					<i class="menu-icon fa fa-building"></i>
					<span class="menu-text">
						Profil
					</span>
					<b class="arrow fa fa-angle-right"></b>
				</a>
			</li>

			<li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-book"></i>
					<span class="menu-text"> Data Warga </span>
					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li class="">
						<a href="<?= base_url('MKKHeader')?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Master KK
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="<?= base_url('mDetailJurusan')?>">
							<i class="menu-icon fa fa-caret-right"></i>
							KK Detail
						</a>
						<b class="arrow"></b>
					</li>
				</ul>
			</li>	

			<li class="">
				<a href="<?= base_url('mBerita')?>">
					<i class="menu-icon fa fa-newspaper-o"></i>
					<span class="menu-text">
						Pengumuman
					</span>
					<b class="arrow fa fa-angle-right"></b>
				</a>
			</li>

			<li class="">
				<a href="<?= base_url('MSurat')?>">
					<i class="menu-icon fa fa-file-text"></i>
					<span class="menu-text">
						Surat
					</span>
					<b class="arrow fa fa-angle-right"></b>
				</a>
			</li>

			
			<li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-list"></i>
					<span class="menu-text"> LAPORAN </span>
					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">

			<li class="">
				<a href="<?php echo site_url('laporan');?>">
					<i class="menu-icon fa fa-caret-right"></i>
						Laporan
				</a>
					<b class="arrow"></b>
			</li>

          	<li class="">
            	<a href="#">
                <i class="menu-icon fa fa-caret-right"></i>
                Sub Menu 2.2
            	</a>
            	<b class="arrow"></b>
        </li>
    </ul>
</li>


		</ul><!-- /.nav-list -->
	</div>
