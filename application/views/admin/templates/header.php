<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Management RT - Admin</title>
		
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/4.5.0/css/font-awesome.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fonts.googleapis.com.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ace.min.css');?>" class="ace-main-stylesheet" id="main-ace-style" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ace-skins.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ace-rtl.min.css');?>">

	<!-- Include Editor style. -->
	<link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.5/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
	<link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.5/css/froala_style.min.css' rel='stylesheet' type='text/css' />

	<!-- Datatabeles -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	
</head>
	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="" class="navbar-brand">
						<small>
							<i class="fa fa-graduation-cap"></i>
							Management RT
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?= base_url().'assets/images/avatars/default.gif' ?>" alt="user" />
								<span class="user-info">
									<small>Selamat datang</small>
									<?= $this->session->userdata("admin_nama"); ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<?php if ($this->session->userdata('user_akses') == "ADMIN") { ?>
								<li>
									<a href="<?php echo base_url('MProfil')?>">
										<i class="ace-icon fa fa-user"></i>
										Management Admin
									</a>
								</li>
								<?php } ?>
								<li>
									<a href="<?php echo base_url('auth/logout')?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>