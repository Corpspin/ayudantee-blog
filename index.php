<?php get_header(); ?>

<div class="container page">
	<div class="row">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1">
			<div class="row">
			<?php if (have_posts()) : ?>
				<?php while ( have_posts() ) : the_post();  ?>
				<div class="col-<?php echo (( $wp_query->current_post == 0 ) ? 'sm-12 big-post' : 'sm-6 small-post' ); ?>">
					<div class="post" id="post-<?php the_ID(); ?>">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
							<?php 
								the_post_thumbnail('large-thumbnail',
								array( 'class' => "img-responsive")); 
							?>
							
							<h2><?php the_title(); ?></h2>

							<div class="author">
								<?php echo get_avatar( get_the_author_meta( 'ID' ), 28 ); ?>
								<?php the_author() ?>
							</div>
								
							<small>
								<?php the_time('F j, Y') ?>
							</small>
										
							<div class="entry">
								<?php the_excerpt('Leer más... &raquo;'); ?>
							</div><!--cierre class entry-->
						</a>
					</div><!--cierre class post-->
				</div>
				<?php endwhile; ?>

				<?php
				  if ( function_exists('wp_bootstrap_pagination') )
				    wp_bootstrap_pagination();
				?>
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>