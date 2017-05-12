<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo bloginfo('description');?>">
	<meta name="author" content="">
<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
	<?php wp_head();?>
	
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	
	

</head>

<body <?php body_class(); ?>>
<div id="header">
 <!--<div id="headerimg">
   <h1>
    <a href="<?php echo home_url(); ?>">
       <?php bloginfo('name'); ?></a>
   </h1>
     <div class="description">
       <?php bloginfo('description'); ?>
     </div>
  </div>
  
</div>-->
<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
    <div class='site-logo'>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
    </div>
<?php else : ?>
    <hgroup>
        <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
        <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
    </hgroup>
<?php endif; ?>
<script src="https://use.fontawesome.com/6e2d41cf15.js"></script>

<input type="checkbox" id="navbar-checkbox" class="navbar-checkbox meee">


<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>


</div>
<script>
jQuery('.navbar-checkbox').each(function(){
    jQuery(this).hide().after('<div class="class_checkbox" />');

});

jQuery('.class_checkbox').on('click',function(){
    jQuery(this).toggleClass('checked').prev().prop('checked',$(this).is('.checked'))
});
</script>