<?php get_header(); ?>

<div class="container page">
	<div class="row">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1">
			<?php if (have_posts()) : ?>
		 	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php /* If this is a category archive */ if (is_category()) { ?>				
				<h2 class="pagetitle">Entradas en <?php echo single_cat_title(); ?></h2>
		
 	  		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2 class="pagetitle">Entradas en <?php the_time('F jS, Y'); ?></h2>
		
	 		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2 class="pagetitle">Entradas en <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle">Entradas en <?php the_time('Y'); ?></h2>
		
	  		<?php /* If this is a search */ } elseif (is_search()) { ?>
				<h2 class="pagetitle">Resultados</h2>
		
	  		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle">Archivo de autor</h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle">Archivo del blog</h2>
			<?php } ?>


			<?php while (have_posts()) : the_post(); ?>
			<div class="post">
				<?php 
					the_post_thumbnail('large-thumbnail',
					array( 'class' => "img-responsive")); 
				?>
					<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<small><?php the_time('l, F jS, Y') ?></small>
					
					<div class="entry">
						<?php the_excerpt() ?>
					</div>
			
					<p class="postmetadata">Posteado en <?php the_category(', ') ?></p> 

				</div>
		
			<?php endwhile; ?>

			<?php
				if ( function_exists('wp_bootstrap_pagination') )
			    wp_bootstrap_pagination();
			?>
	
			<?php else : ?>
				<h2 class="center">No hay resultados, intentalo nuevamente</h2>
			<?php endif; ?>
		</div>
	</div>
</div>
		
<?php get_footer(); ?>