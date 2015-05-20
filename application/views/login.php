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
