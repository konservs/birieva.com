<?php
?>
<main class="main-wrapper" id="container">   
	<!-- image Gallery -->  
	<div class="wrapper">
		<div class="">
			<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-3 masonry">
				<?php foreach($this->items as $item): ?>
					<li class="masonry-item grid">
						<figure class="effect-sarah">
							<img src="<?php echo $item->image; ?>" alt="<?php echo $item->imageAlt; ?>" />
							<figcaption>
								<h2><?php echo $item->name; ?></h2>
								<p class="description"><?php echo $item->description; ?></p>
								<?php if($item->linkDetails): ?>
									<a href="<?php echo $item->linkDetails; ?>">View more</a>
								<?php endif; ?>
							</figcaption>
						</figure>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</main>
