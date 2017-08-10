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
			<div class="advantages">
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
			</div>

			<!-- vitraj-list -->
			<section class="vitraj-list container-fluid">
				<h2 class="section-title">Витражи</h2>
				<div class="row">
					<?php
					$loop = new WP_Query( array( 
						'post_type' => array('vitraj'),
						'posts_per_page' => 6,
						'orderby' => 'date',
						'order' => 'ASC'
					) );
					if ( $loop->have_posts() ) :
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="col-sm-6 col-md-4">
								<a href="<?php the_permalink(); ?>" class="vitraj-item">
									<?php the_post_thumbnail('large'); ?>
									<h3 class="title"><?php the_title(); ?></h3>
								</a>
							</div>
						<?php endwhile; ?>
					<?php endif; wp_reset_postdata(); ?>
				</div>
			</section>

			<section class="vitraj-list container-fluid">
				<h2 class="section-title">Панно</h2>
				<div class="row">
					<?php
					$loop = new WP_Query( array( 
						'post_type' => array('panno'),
						'posts_per_page' => 2,
						'orderby' => 'date',
						'order' => 'ASC'
					) );
					if ( $loop->have_posts() ) :
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="col-sm-6">
								<a href="<?php the_permalink(); ?>" class="vitraj-item">
									<?php the_post_thumbnail('full'); ?>
									<h3 class="title"><?php the_title(); ?></h3>
								</a>
							</div>
						<?php endwhile; ?>
					<?php endif; wp_reset_postdata(); ?>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
