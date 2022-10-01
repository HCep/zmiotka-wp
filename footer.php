<?php

?>
<?php if(is_page('kontakt')):?>
	
			
				<div class="footer-bottom-row">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="site-info text-center">
								<a class="text-white" href="https://coolbrand.pl/" target="_blank">Coolbrand 2022</a>
						</div><!-- .site-info -->
					</div> <!-- col-lg-12 -->
				<!-- .containr -->
				</div>
				</div>
				</div>
				</div>
		
				<?php else: ?>
					</div><!-- #content -->
	</div><!-- .row -->
			</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
<div class="wrapper-footer">


		
					
					<div class="wrap-cnt">
					<?php get_sidebar('footer'); ?> 
					</div>
					
				</div>
				

		<!-- prawa autorskie -->
		<div class="footer-bottom-row">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="site-info text-center">
								<a class="text-white" href="https://coolbrand.pl/" target="_blank">Coolbrand 2022</a>
						</div><!-- .site-info -->
					</div> <!-- col-lg-12 -->
				<!-- .containr -->
		</div>
		
		</div>
	</footer><!-- #colophon -->
	<?php endif;?>
</div><!-- #page -->

<?php wp_footer(); ?>
<?php if(is_front_page()): ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/splide.min.js"></script>
<script>
  new Splide( '.splide' ).mount();
</script>
<?php endif;?>
</body>
</html>
