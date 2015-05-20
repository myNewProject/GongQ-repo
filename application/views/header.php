<!DOCTYPE html>
<html>
<head>
    <title>공큐 포럼</title>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?=site_url('/')?>static/lib/bootstrap/css/bootstrap.min.css" media="screen">
	<!-- <link rel="stylesheet" href="<?=site_url('/')?>static/lib/bootstrap/css/bootstrap-theme.min.css"> -->

	<!-- <link rel="stylesheet" href="<?=site_url('/')?>static/lib/bootstrap/css/bootstrap-responsive.css"> -->
	<script src="<?=site_url('/')?>static/js/jquery/1.11.2/jquery.js"></script>
 	<script src="<?=site_url('/')?>static/lib/bootstrap/js/bootstrap.min.js"></script>



	<style>
		body {
			padding-top: 80px;
		}
		.my_form_control {
			padding-top: 40px;
		}
		.footer {
			padding-top: 100px;
		}
	</style>

	<script>
		function navActivator() {
			var page = '<?=$pagenum?>';
			if (page == 'about_us') {
				$("#nav-button1").addClass("active");
			} else if (page == 'news') {
				$("#nav-button2").addClass("active");
			} else if (page == 'forum') {
				$("#nav-button3").addClass("active");
			} else if (page == 'business') {
				$("#nav-button4").addClass("active");
			} else if (page == 'hr') {
				$("#nav-button5").addClass("active");
			} else if (page == 'education') {
				$("#nav-button6").addClass("active");
			}
		}
	</script>
</head>
<body>
	<?php
	if ($this->session->flashdata('message')) { ?>
	<script>
		alert('<?=$this->session->flashdata('message') ?>');
	</script>
	<? }
	?>
	<div> <!-- 네비게이션바 묶음 -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?=site_url('/Central')?>">GongQ</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<?php 
					if ($this->session->userdata('is_login')) {	?>
						<li><a href="<?=site_url('/')?>auth/logout">LOGOUT</a></li>
					<?php
					} else {	?>
						<li><a data-toggle="modal" href="#login_form">LOGIN</a></li>
						<div class="modal fade" id="login_form" role="dialog" aria-labelledby="login_title" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<div class="modal-title" id="login_title">
											<h3>로그인</h3>
										</div>
									</div>
									<div class="modal-body">
										<div class="container-fluid">
											<div class="row">
											<form class="form-horizontal" method="post" action="<?=site_url('/')?>auth/authentication<?=empty($returnURL) ? '' : '?returnURL='.rawurlencode($returnURL) ?>">	
												<div class="form-group">
													<label class="control-label col-sm-2" for="inputEmail">아이디</label>
													<div class="col-sm-10">
														<input class="form-control" type="text" id="email" name="email" placeholder="이메일">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-2" for="inputPassword">비밀번호</label>
													<div class="col-sm-10">
														<input class="form-control" type="password" id="password" name="password" placeholder="비밀번호">
													</div>
												</div>
											
												<div class="modal-footer">
													<button type="submit" class="btn btn-primary">로그인</button>
												</div>
											</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<li><a href="<?=site_url('/Auth/register')?>">JOIN US</a></li>
					<?php
					}
					?>


					<li><a href="#">MY PAGE</a></li>
					<li><a href="#">FAQ</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<ul class="nav nav-pills nav-justified">
		<li id="nav-button1" role="presentation"><a href="<?=site_url('/Central/about_us')?>">About Us</a></li>
		<li id="nav-button2" role="presentation"><a href="<?=site_url('/Central/news')?>">News</a></li>
		<li id="nav-button3" class="dropdown" role="presentation"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Forum <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="<?=site_url('/Central/forum')?>">K-SW포럼</a></li>
				<li><a href="<?=site_url('/Central/reg_forum')?>">포럼제안</a></li>
			</ul>
		</li>
		<li id="nav-button4" class="dropdown" role="presentation"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Business <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="<?=site_url('/Central/ksw_business')?>">K-SW사업</a></li>
				<li><a href="#">사업공고</a></li>
			</ul>
		</li>
		<li id="nav-button5" class="dropdown" role="presentation"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">HR <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="<?=site_url('/Central/hr')?>">채용공고</a></li>
				<li><a href="<?=site_url('/Central/intern')?>">청년인턴제</a></li>
			</ul>
		</li>
		<li id="nav-button6" class="dropdown" role="presentation"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Education <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#">워크샵</a></li>
				<li><a href="#">교육일정</a></li>
			</ul>
		</li>
	</ul>
	<script>
		navActivator();
	</script>
	</div>

	<div class="container">
	