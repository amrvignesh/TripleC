<?php get_header(); ?>

<div id="main">
<div id="content">



<div id="slides">
			<div class="slides_container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

		 	$args = array(
			   'post_type' => 'attachment',
			   'numberposts' => -1,
			   'orderby'=> 'menu_order',
			   'order' => 'ASC',
			   'menu_order'=>0,
			   'post_mime_type' => 'image/jpeg',
			   'post_status' => null,
			   //'post_parent' => $post->ID//
			  );

			  $attachments = get_posts( $args );
			     if ( $attachments ) {
					 
			        foreach ( $attachments as $attachment ) {
						echo '<div class="imgg">';
						echo wp_get_attachment_image( $attachment->ID , 'full' );
						echo '</div>';
			          }
			     }
			 endwhile; endif; ?>
			</div>
			<a href="#" class="prev"><img src="<?php bloginfo('template_directory')?>/images/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
			<a href="#" class="next"><img src="<?php bloginfo('template_directory')?>/images/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
		</div>
		<div id="cont">
<div class="ttile"><h1> Recent Post</h1></div>
<?php get_the_post_thumbnail( $post_id );?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="third">
<a href="<?php the_post_thumbnail_url( $size ); ?>">
<?php
if ( has_post_thumbnail() ) {
	the_post_thumbnail('medium');
} 
?></a>
<a href="<?php the_permalink(); ?> "><h1> <?php the_title();?></h1></a>
<p><?php the_excerpt(); ?></p>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<h4>Posted by <?php the_author(); ?></h4>

<?php 
foreach(get_the_category() as $category)
{
    echo '<a href="'.get_category_link($category->cat_ID).'"><p class="catt">'.$category->cat_name.'</p></a>';
}
?>

</div>
 <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>

<div class="slled2">
<div id="cont">
<?php query_posts('category_name=sports&showposts=6');
$category_name="sports";
?>
<div class="catt-title"><a href="/theme1/category/sports/"><h2><?php echo $category_name; ?></h2></a></div>
<?php 
while (have_posts()) : the_post();
  // do whatever you want

?>

<div class="third white">
<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
<p><?php the_excerpt(); ?></p>
</div>
<?php
endwhile;
?>
</div>
</div>

<div class="slled3">
<div id="cont">
<?php query_posts('category_name=state&showposts=6');
$category_name="state";
?>
<div class="catt-title black"><a href="/theme1/category/state/"><h2><?php echo $category_name; ?></h2></a></div>
<?php 
while (have_posts()) : the_post();
  // do whatever you want

?>

<div class="third black">
<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
<p><?php the_excerpt(); ?></p>
</div>
<?php
endwhile;
?>
</div>
</div>
<div class="slled2">
<div id="cont">
<?php query_posts('category_name=region&showposts=6');
$category_name="region";
?>
<div class="catt-title"><a href="/theme1/category/region/"><h2><?php echo $category_name; ?></h2></a></div>
<?php 
while (have_posts()) : the_post();
  // do whatever you want

?>

<div class="third white">
<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
<p><?php the_excerpt(); ?></p>
</div>
<?php
endwhile;
?>
</div>
</div>
<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>

</body>
</html>