<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Admin Register</title>
		
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/4.5.0/css/font-awesome.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fonts.googleapis.com.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ace.min.css');?>" class="ace-main-stylesheet" id="main-ace-style" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ace-skins.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ace-rtl.min.css');?>">
	
	
</head>
	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-book white"></i>
									<span class="white">RT 02 RW 04 Larangan Utara</span>
								</h1>
								<h4 class="white lighter" id="id-company-text">Administrator</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												Register Aplikasi
											</h4>
											

											<div class="space-6"></div>
											
											<!-- Flash Message -->
											 <?= $this->session->flashdata('message'); ?>

											<form name="logForm" id="theform" action="<?php echo base_url('auth/validasi_register'); ?>" method="post">
												<fieldset>
                          <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username" id="username" name="username" required="required" autofocus />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" id="email" name="email" required="required" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" id="password" name="password" required="required" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

                          <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Retype Password" id="valPassword" name="valPassword" required="required" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<button type="submit" name="btnLogin" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-sign-in"></i>
															<span class="bigger-110">Register</span>
														</button>
													</div>

													<div class="space-6"></div>
												</fieldset>
											</form>

											<a href="<?php echo base_url('auth'); ?>">Sudah Punya Akun ?</a>
										</div>									
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
							</div><!-- /.position-relative -->

						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->
		
		<script src="<?= base_url('assets/js/jquery-1.11.3.min.js')?>"></script> 
		<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
		<script type="text/javascript" src="<?= base_url('assets/js/ace-extra.min.js');?>"></script>

	</body>
</html>

