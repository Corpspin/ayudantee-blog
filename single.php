<?php get_header(); ?>

<div class="container page">
	<div class="row">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 m30top">
			<div class="post" id="post-<?php the_ID(); ?>">
				<?php 
					the_post_thumbnail('large-thumbnail',
					array( 'class' => "img-responsive")); 
				?>
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1">
						<h2><?php the_title(); ?></h2>

						<small>
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 28 ); ?>
							<?php the_author() ?> 
						</small>

						<small><?php the_time('l, F j, Y') ?></small>

						<p class="postmetadata">Posteado en <?php the_category(', ') ?> | con las <?php the_tags(); ?> </p> 

						<div class="single-post">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
									
			</div>
					
			<?php comments_template(); ?>
				
		<?php endwhile; ?>			
		<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>