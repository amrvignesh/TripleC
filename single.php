<?php get_header(); ?>

	<div class="row">
		<div class="fulll">
		<div class="singlr">

			<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		?>
<?php
if ( has_post_thumbnail() ) {
	the_post_thumbnail('full');
} 

		the_content();	
		endwhile;
		?>
		<?php wp_link_pages(); ?>
</div>
		</div> <!-- /.col -->
	</div> <!-- /.row -->
<div class="navigation">
<div class="alignleft"><?php previous_posts_link( '&laquo; Previous Entries' ); ?></div>
<div class="alignright"><?php next_posts_link( 'Next Entries &raquo;', '' ); ?></div>
</div>
<?php get_footer(); ?>