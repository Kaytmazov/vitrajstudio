<?php
/*
Template Name: Шаблон для страницы Панно
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

			<section class="panno-list products-list container-fluid">
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
								<a href="<?php the_permalink(); ?>" class="panno-item products-item">
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