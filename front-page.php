<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<!-- Слайдер -->
			<div class="home-slider-wrapper">
        <div class="home-slider">
					<?php 
					$images = get_field('slider');

					foreach( $images as $image ): 
					$image_url = $image['sizes']['slider-photo']; ?>
						<div class="slide">
							<img src="<?php echo $image_url; ?>" alt="<?php echo $image['alt']; ?>">
							<h2 class="slide-title"><?php echo $image['title']; ?></h2>
						</div>
					<?php
					endforeach; ?>
				</div>
			</div><!-- .home-slider-wrapper -->
			
			<!-- Advantages -->
			<section class="advantages">
				<?php 
				$advantages = get_field('advantages');
				foreach( $advantages as $advantage ): ?>
					<div class="advantages-item">
						<div class="advantages-photo">
							<img src="<?php echo $advantage['advantages-photo']; ?>" alt="Преимущество">
						</div>
						<span class="advantages-title"><?php echo $advantage['advantages-title']; ?></span>
						<p class="advantages-desc"><?php echo $advantage['advantages-desc']; ?></p>
					</div>
				<?php endforeach; ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
