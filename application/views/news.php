<div class="my_form_control">
<div id="news_slide" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#news_slide" data-slide-to="0" class="active"></li>
		<li data-target="#news_slide" data-slide-to="1"></li>
		<li data-target="#news_slide" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="<?=site_url('/')?>static/img/Intro1.png" alt="Intro1">
			<div class="carousel-caption">
				<h2>First</h2>
				<p>1234</p>
			</div>
		</div>
		<div class="item">
			<img src="<?=site_url('/')?>static/img/Intro2.png" alt="Intro2">
			<div class="carousel-caption">
				<h2>Second</h2>
				<p>1234</p>
			</div>
		</div>
		<div class="item">
			<img src="<?=site_url('/')?>static/img/Intro3.png" alt="Intro3">
			<div class="carousel-caption">
				<h2>Third</h2>
				<p>1234</p>
			</div>
		</div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#news_slide" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#news_slide" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
</div>

	<div class="row my_form_control">
		<? //foreach($poster_num as $poster)) ?>
		<div class="col-sm-6 col-md-4 col-lg-4">
			<div class="card-example post">
				<div class="thumbnail">
					<time> &nbsp;
					</time>
					<a href="#" class="capton"><img src="<?=site_url('/')?>static/img/test_img.jpg">
					<h4 class="list-group-item-heading">큐시즘 채용공고</h4>
					<p class="list-group-item-text">큐시즘 11기로 들어오세요! 저희들은 당신들을 기다립니다.</p>
					</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4 col-lg-4">
			<div class="card-example post">
				<div class="thumbnail">
					<time> &nbsp;
					</time>
					<a href="#" class="capton"><img src="<?=site_url('/')?>static/img/test_img.jpg">
					<h4 class="list-group-item-heading">큐시즘 채용공고</h4>
					<p class="list-group-item-text">큐시즘 11기로 들어오세요! 저희들은 당신들을 기다립니다.</p>
					</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4 col-lg-4">
			<div class="card-example post">
				<div class="thumbnail">
					<time> &nbsp;
					</time>
					<a href="#" class="capton"><img src="<?=site_url('/')?>static/img/test_img.jpg">
					<h4 class="list-group-item-heading">큐시즘 채용공고</h4>
					<p class="list-group-item-text">큐시즘 11기로 들어오세요! 저희들은 당신들을 기다립니다.</p>
					</a>
				</div>
			</div>
		</div>
		
</div>