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
</div>
		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>