<?php 
	$errors = $newcomment->errors;
 ?>

<div class="row">
	<div class="col-xs-12">
		<ol class="breadcrumb">
		  <li><a href=".\">Home</a></li>
		  <li><a href=".\?page=movies">Movies</a></li>
		  <li class="active"><?= $movie->title; ?></li>
		</ol>

		<h2><?= $movie->title; ?></h2>
		<p>Released in <?= $movie->year; ?></p>
		<?php if($movie->poster !=""):?>
			<a href="./?page=downloadposter&amp;filename=<?= $movie->poster ?>">
				<img src="./images/poster/300h/<?= $movie->poster ?>" alt="movie poster for <?= $movie->title ?>">
			</a>
		<?php else: ?>
			<p><small>No poster found</small></p>
		<?php endif; ?>

		<p><?= $movie->description; ?></p>
		<ul class="list-inline">
			<?php foreach ($tags as $tag): ?>
				<span class="label label-default"><?= $tag->tag;?></span>
			<?php endforeach; ?>
		</ul>

		<?php if(static::$auth->isAdmin()): ?>
			<p>
				<br>
				<a href=".\?page=movie.edit&amp;id=<?= $movie->id; ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Edit Movie</a>
			</p>
		<?php endif; ?>

		<h3>Comments</h3>

		<?php if(count($comments) > 0) : ?>

			<?php foreach($comments as $comment) : ?>
				<div class="media">
					<div class="media-left">
						<img class="media-object" src="<?= $comment->user()->gravatar(40); ?>" alt="avatar">
					</div>
					<div class="media-body">
						<h4 class="media-heading"><?= $comment->id;?> <?=$comment->user()->username;?></h4>
						<p><?= $comment->comment;?></p>
					</div>
				</div>
			<?php endforeach; ?>

		<?php else: ?>
			<p>No Comments</p>
		<?php endif; ?>
 		
 		<?php if(static::$auth->check()): ?>
 			<h4>Add Comment to '<?= $movie->title ?>'</h4>
			<form id="comments" action=".\?page=comment.create" method="POST" class="form-horizontal">


				 

				<input type="hidden" id="movie_id" name='movie_id' value=<?= $movie->id;?>>
				
				<div class="form-group <?php if ($errors['comment']): ?> has-error <?php endif; ?>">
					<div class="col-md-12">
					 	<textarea class="form-control" id="comment" name="comment" rows="5" placeholder="Your Comment..."></textarea>
					 	<div class="help-block"><?= $errors['comment']; ?></div>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-8 col-md-10">
					   <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Comment</button>
					</div>
				</div>

			</form>

		<?php endif; ?>




	</div>
	
</div>