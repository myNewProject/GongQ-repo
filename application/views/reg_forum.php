<div class="row my_form_control">
	<form method="post" action=<?=site_url('/Central/add_forum')?> name="reg_forum" enctype="multipart/form-data">
		<!-- <div class="form-group">
			<label for="host">주최</label>
			<input type="text" class="form-control" id="host" name="host"><?=호스트아이디;?></input>
		</div> -->
		<hr>
		<div class="form-group">
			<label for="host">주최자</label>
			<input type="text" class="form-control" id="host" name="host">
		</div>	
		<div class="form-group">
			<label for="forum_date">포럼 날짜</label>
			<input type="date" class="form-control" id="forum_date" name="forum_date">
		</div>
		<div class="form-group">
			<label for="forum_hour">포럼 시작 시간</label>
			<div  class="form-inline" id="forum_hour">
				<label class="radio-inline"><input type="radio" name="day_night" id="day" value="day">오전</label>
				<label class="radio-inline"><input type="radio" name="day_night" id="night" value="night">오후</label>
				<input type="number" class="form-control" name="hour" min="1" max="12">시
			</div>
		<div class="form-group">
			<label for="title">포럼 제목</label>
			<input type="text" class="form-control" id="title" name="title">
		</div>
		<div class="form-group">
			<label for="context">포럼 내용</label>
			<textarea class="form-control" rows="6" id="context" name="context" style="resize:none"></textarea>
		</div>
		<div class="form-group">
			<label for="poster">포스터 사진</label>
			<input type="file" id="poster" name="poster"></input>
			<p class="help-block">지원되는 확장자 : ex)jpg, png....</p>
		</div>
		<hr>
		<button type="submit" class="btn btn-primary btn-lg">제출하기</button>
	</form>
</div>