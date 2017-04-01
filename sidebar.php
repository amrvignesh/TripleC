
<div id="sidebar">
<div id="side-sidebar">
<?php get_sidebar( 'side-sidebar' ); ?>
<?php
if(is_active_sidebar('side-sidebar')){
dynamic_sidebar('side-sidebar');
}
?>
</div>
<div id="side-sidebar1">
<?php
if(is_active_sidebar('side-sidebar-1')){
dynamic_sidebar('side-sidebar-1');
}
?>
</div>
<div id="side-sidebar2">
<?php
if(is_active_sidebar('side-sidebar-2')){
dynamic_sidebar('side-sidebar-2');
}
?>
</div>
<?php register_sidebar( $args ); ?>

</div>