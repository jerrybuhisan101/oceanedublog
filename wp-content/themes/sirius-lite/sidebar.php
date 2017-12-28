<!-- Sidebar -->

<div class = "widget">

<?php if (is_category()) {
  $current_cat = get_category($cat);
  if (get_category_children($current_cat->cat_ID) != "") {

echo "<h4>Choose your category</h4>";
    echo "<ul>";
    wp_list_categories('orderby=id&show_count=0&title_li=&use_desc_for_title=1&child_of='.$current_cat->cat_ID);
    echo "</ul>";
  }
} ?>



</div>

<?php 
if(is_single()) 
    if(is_active_sidebar('sidebar-single')) { ?><div class="sidebar-single"><?php dynamic_sidebar('sidebar-single'); ?></div><?php } 
if(is_page())   
    if(is_active_sidebar('sidebar-page'))   { ?><div class="sidebar-page"><?php dynamic_sidebar('sidebar-page'); ?></div><?php } 

if(is_active_sidebar('sidebar-default')) { ?><div class="sidebar-default"><?php dynamic_sidebar('sidebar-default'); ?></div><?php } ?>





<!-- /Sidebar -->