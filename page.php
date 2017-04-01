<?php get_header(); ?>

	<div class="row">
		<div class="fulll">
		<div class="singlr">

			<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

		the_content();	
		endwhile;
		?>
</div>
		</div> <!-- /.col -->
	</div> <!-- /.row -->
<?php comments_template(); ?> 
<?php wp_list_comments();?>
<?php get_footer(); ?>