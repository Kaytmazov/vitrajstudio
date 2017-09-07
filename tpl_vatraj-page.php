<?php
/*
Template Name: Шаблон для страницы Витражи
*/

get_header(); ?>

  <div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<?php
				while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="container">
						<header class="entry-header">
							<h1 class="section-title page-title"><?php the_title(); ?></h1>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->
					</div>
				</article><!-- #post-<?php the_ID(); ?> -->
				
			<?php endwhile; // End of the loop.
			?>
      
			<section class="vitraj-list products-list container-fluid">
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
							<div class="col-xs-6 col-md-4">
								<a href="<?php the_permalink(); ?>" class="vitraj-item products-item">
									<?php the_post_thumbnail('large'); ?>
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