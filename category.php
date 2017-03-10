
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
?>
		<p><?php the_content();	?></p>
		<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<h4>Posted by <?php the_author(); ?></h4>
		<?php
		endwhile;
		?>
</div>
		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>

