<link rel="stylesheet" href="<?=site_url('/')?>static/css/qcard.css">
<link rel="stylesheet" href="<?=site_url('/')?>static/css/coloum.css">
<script>
	

	$(document).ready(function() {
		loadingList();
	});

	function loadingList() {
		$.ajax({
			type: 'POST',
			url: "<?=site_url('/Central/getForum/1')?>",
			data: { PAGE : '1' },
			cache: false,
			async: false
		})
		.done(function (html) {
			$("#tableBody").html(html);
		});
	}
</script>

<div class="row my_form_control">
	<script> loadingList(); </script>
	<div id="tableBody" name="tableBody">
		<!-- 포럼 일정 -->
	</div>
</div>