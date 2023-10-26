<?php
/**
 * The template for displaying single toolkits
 */
get_header();
?>
<div id="cbat-single-ct">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>
