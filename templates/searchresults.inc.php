<div class="row">
	<div class="col-xs-12">
		<ol class="breadcrumb">
		  <li><a href=".\">Home</a></li>
		  <li><a href=".\?page=movies">Movies</a></li>
		  <li class="active">Search Results</li>
		</ol>
		<h1>Search Results '<em><?= $q?></em>' </h1>
		<?php if(count($movies) > 0): ?>
			<ol>
				<?php foreach ($movies as $movie) :?>
					<li>
						<h3><a href="./?page=movie&amp;id=<?= $movie->id;?>">
						<?= $movie->title; ?>(<?= $movie->year?>)</a>
						</h3>
						<p><?= $movie->description?></p>
						<ul class="list-inline">
							<?php foreach ($movie->getTags() as $tag): ?>
								<span class="label label-default"><?= $tag->tag;?></span>
							<?php endforeach; ?>
						</ul>

					</li>
				<?php endforeach; ?>
			</ol>
		<?php else: ?>
				<p>Weridly enough, there are no movies to be displayed</p>
		<?php endif; ?>


	</div>
</div>
