		<div class="sidebar col-sm-2" id="sidebar">
			<ul class="nav nav-pills nav-stacked">
				<?php
				foreach($test_list as $entry){
				?>
				<li><a href="/GongQ/central/<?=$entry->id?>"><?=$entry->title?><span class="sr-only">(current)</span></a></li>
				<?php
				}
				?>

			</ul>
		</div>
			
		<div class="col-sm-10">
 