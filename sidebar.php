<div id="sidebar">
<div id="side-sidebar">
<?php
get_sidebar('side-sidebar');
?>
<?php
if (is_active_sidebar('side-sidebar')) {
    dynamic_sidebar('side-sidebar');
}
?>
</div>
<div id="side-sidebar1">
<?php
if (is_active_sidebar('side-sidebar-1')) {
    dynamic_sidebar('side-sidebar-1');
}
?>
</div>
<div id="side-sidebar2">
<?php
if (is_active_sidebar('side-sidebar-2')) {
    dynamic_sidebar('side-sidebar-2');
}
?>
</div>
<?php
function triple_c_register_sidebars()
{
    register_sidebar($args);
}
add_action('widgets_init', 'triple_c_register_sidebars');
?>