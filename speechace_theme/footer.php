		<footer class="footer">
			<div class="container">
				<div class="footer__logo">
				<?php $footer_image = get_theme_mod('footer_image'); ?>
					<img src="<?php echo esc_url($footer_image)?>" data-rjs="3" />
				</div>
				<div class="footer__privacy">
					<div class="footer__privacy-wrapper">
					<?php 
					$articles = array();
					array_push($articles, get_theme_mod('footer_terms'), get_theme_mod('footer_privacy'));
					for( $i=0; $i<2; $i++){
						$query = new WP_Query (array('page_id'=>absint($articles[$i])));
						if( $query->have_posts() ): while($query->have_posts()) : $query->the_post();
					?>
						<a src="<?php echo esc_url(get_permalink()); ?>"><?php echo the_title(); ?></a>
					<?php 
					endwhile;
        			endif;
        			wp_reset_postdata();
					}
					 ?>	
					</div>
				</div>
				<div class="footer__social">
					<ul>
						<li>
						<?php $fb = get_theme_mod('fb_link'); ?>
							<a href="<?php echo esc_html($fb); ?>">
								<i class="icon-facebook"></i>
							</a>
						</li>
						<li>
						<?php $tw = get_theme_mod('tw_link'); ?>
							<a href="<?php echo esc_html($tw); ?>">
								<i class="icon-twitter"></i>
							</a>
						</li>
						<li>
						<?php $linkedin = get_theme_mod('linkedin_link'); ?>
							<a href="<?php echo esc_html($linkedin); ?>">
								<i class="icon-linkedin2"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="footer__copyrigth">
					<?php $copyright = get_theme_mod('copyright'); ?>
					<p class="text-center"><?php echo esc_html($copyright); ?></p>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>