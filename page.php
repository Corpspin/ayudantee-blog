<?php get_header(); ?>
<div id="cuerpo">
	<div id="centro">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entrytext">
				<?php the_content('<p class="serif">Leer más... &raquo;</p>'); ?>
	
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
	
			</div>
		</div>
	  <?php endwhile; endif; ?>
	<?php edit_post_link('Editar', '<p>', '</p>'); ?>
	</div>

<?php get_sidebar(); ?>
<br class="limpia" />
</div>
<?php get_footer(); ?>