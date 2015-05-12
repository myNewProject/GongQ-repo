<div class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-title">
				<h3>로그인</h3>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="post" action="<?=site_url('/')?>auth/authentication<?=empty($returnURL) ? '' : '?returnURL='.rawurlencode($returnURL) ?>">	
					<div class="control-group">
						<label class="control-label" for="inputEmail">아이디</label>
						<div class="controls">
							<input type="text" id="email" name="email" placeholder="이메일">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">비밀번호</label>
						<div class="controls">
							<input type="password" id="password" name="password" placeholder="비밀번호">
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