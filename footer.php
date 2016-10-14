	<!-- FOOTER HOME -->
	<footer class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="footer">
					<li>Ayudantee 2016.</li>
				</ul>
				
				<?php wp_nav_menu( 
					array( 
						'theme_location' => 'footer-menu',
						'container'       => 'ul',
						'container_id'    => FALSE,
						'menu_class'      => 'footer',
						'menu_id'         => FALSE,
						'depth'           => 1,
						)
					);
				?>
			</div>
		</div>
	</footer>
	<!-- FIN FOOTER HOME -->

	<?php wp_footer(); ?>
	<!-- jQuery (requerido)-->
    <script src="<?php echo get_bloginfo('template_directory');?>/js/jquery.min.js"></script>
    <!-- Bootstrap plugins -->
    <script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
	</body>
</html>