<div class="row">
	<div class="col-xs-12">
		<h1>Movies</h1>
		<ol class="breadcrumb">
		  <li><a href=".\">Home</a></li>
		  <li  class="active">Movies</li>
		</ol>

		<?php if(static::$auth->isAdmin()): ?>
			<p>
				<a href=".\?page=movie.create" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Movie</a>
			</p>
		<?php endif; ?>

		<?php if(count($movies) > 0): ?>
		<ul>
		<?php
			foreach($movies as $movie): ?>
				<li><a href=".\?page=movie&amp;id=<?= $movie->id?>"><?= $movie->title; ?> (<?= $movie->year?>)</a></li>
			<?php endforeach; ?>
		</ul>
		<?php else: ?>
			<p>Weridly enough, there are no movies to be displayed</p>
		<?php endif; ?>

		<?php $this->paginate(".\?page=movies", $pageNumber, $pageSize, $recordCount); ?>

	</div>
	
</div>