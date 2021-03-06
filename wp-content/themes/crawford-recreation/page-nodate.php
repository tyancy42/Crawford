<?php
/*
	Template Name: No Date
*/
?>
<?php get_header(); ?>

<div class="container">
	<div class="row" role="main">			
			
		<div class="col-md-8 col-md-offset-2">	

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<h3 class="post-title"><?php the_title(); ?></h3>
					<p><?php the_content(); ?></p>





				<?php endwhile; else : ?>

					<p><?php _e( 'Sorry, no pages found.' ); ?></p>

				<?php endif; ?>

	</div>
			
		<div class="pager"></div>		
	</div>
</div>

<?php get_footer(); ?>