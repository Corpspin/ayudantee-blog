<?php get_header(); ?>

<div class="container page">
	<div class="row">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1">
			<?php if (have_posts()) : ?>
			<h2 class="pagetitle">Resultados de Búsqueda</h2>

			<?php while (have_posts()) : the_post(); ?>	
				<div class="post">
					<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<small><?php the_time('l, F jS, Y') ?></small>
					
					<div class="entry">
						<?php the_excerpt() ?>
					</div>
			
					<p class="postmetadata">En la categoría <?php the_category(', ') ?> <strong>|</strong> <?php edit_post_link('Edit','','<strong>|</strong>'); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				</div>
		
			<?php endwhile; ?>

			<?php
				if ( function_exists('wp_bootstrap_pagination') )
			    wp_bootstrap_pagination();
			?>
		
			<?php else : ?>
				<h2 class="center">No se encontraron resultados</h2>
			<?php endif; ?>
		</div>		
	</div>
</div>

<?php get_footer(); ?>