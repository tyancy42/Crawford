<footer>
		<div id="footer-sidebar" class="container">
		<div class="row">
			<div class="col col-md-4 left">
				<aside id="text-2" class="widget widget_text"><h4>Welcome to WordPress</h4>			<div class="textwidget">Vis verear offendit invenire cu, nec ne etiam pericula inciderint, saepe veritus patrioque te mei. Te has quod bonorum, eam at timeam molestiae.</div>
		</aside>			</div>
			<div class="col col-md-4 middle">
				<aside id="search-2" class="widget widget_search"><form role="search" method="get" id="searchform" class="searchform" action="http://demo.wpmultiverse.com/crawford/">
				<div>
					<label class="screen-reader-text" for="s">Search for:</label>
					<input type="text" value="" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="Search" />
				</div>
			</form>
								<h2>Recent Posts</h2>
					<ul>
					<?php
						$args = array( 'numberposts' => '3' );
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
						}
					?>
					</ul>			</div>
			<div class="col col-md-4 right">
				<?php if ( is_active_sidebar( 'footer_right' ) ) : ?>
					<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer_right' ); ?>
					</div><!-- #primary-sidebar -->
				<?php endif; ?>			
			</div>
		</div>	
	</div>
	<div id="footer-meta" class="container">
		<div class="row">
			<p>&copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>" title="Crawford">Crawford</a> &bull; <a href="<?php bloginfo('url'); ?>" title="Crawford WordPress Theme" target="_blank">Crawford Theme</a></p>
			<nav></nav>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
   
</body>
</html>				