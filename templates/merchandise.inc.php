<div class="row">
	<div class="col-xs-12">
		<h1>Merchandise</h1>
		<?php if(count($products) > 0): ?>
			
			<?php 
				foreach($products as $item):?>
				<h2><?= $item->name;?> - $<?= $item->price;?></h2>
				<p><?= $item->description; ?></p>
			<?php endforeach; ?>

			<?php else: ?>
			<p>Weridly enough, there are no movies to be displayed</p>
		<?php endif; ?>
	</div>
</div>
