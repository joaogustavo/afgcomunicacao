<?php
/* Template Name: 1-Home */
 get_header();
?>
<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/home.css">
<?php while ( have_posts() ) : the_post(); //INÍCIO DO LOOP    
    the_content();
   endwhile; //FINAL DO LOOP ?>
<div class="clearfix"></div>
<?php get_footer(); ?>