<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Telkom Login</title>
		
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
									<i class="ace-icon fa fa-graduation-cap white"></i>
									<span class="white">Telkom School</span>
								</h1>
								<h4 class="white lighter" id="id-company-text">Administrator</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												Login Aplikasi
											</h4>
											

											<div class="space-6"></div>
											
											<!-- Flash Message -->
											 <?= $this->session->flashdata('message'); ?>

											<form name="logForm" id="theform" action="<?php echo base_url('admin/login'); ?>" method="post">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="email" required="required" id="email" name="email" autofocus />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" required="required" id="password" name="password"  />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<button type="submit" name="btnLogin" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-sign-in"></i>
															<span class="bigger-110">Login</span>
															</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
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

