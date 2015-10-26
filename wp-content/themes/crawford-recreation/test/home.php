<?php get_header(); ?>

<div class="container">
	<div class="row" role="main">			
			
		<div class="col-md-8 col-md-offset-2">	

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<p class="post-date"><?php the_date(); ?></p> 
					<h3 class="post-title"><?php the_title(); ?></h3>
					<p><?php the_content(); ?></p>
					<p class="excerpt-link"><a href="<?php the_permalink(); ?>">&sim;&nbsp;Continue Reading&nbsp;&sim;</a></p>

					<?php
					if (($wp_query->current_post + 1) < ($wp_query->post_count)) {
					   echo '<div class="divider">• • •</div>';
					} ?>
				<?php endwhile; else : ?>

					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

					<?php
					
?>
				<?php endif; ?>

	</div>
			
		<div class="pager"></div>		
	</div>
</div>

<?php get_footer(); ?>