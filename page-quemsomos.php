<?php
/* Template Name: 2-Quem Somos */
 get_header();
?>
<div id="titulos" class="col-sm-12 clearfix">
  <div class="titulos">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </div>
</div>
<?php while ( have_posts() ) : the_post(); //INÍCIO DO LOOP ?>    
  <?php the_content(); ?>
<?php endwhile; //FINAL DO LOOP ?>
<div class="clearfix"></div>
<?php get_footer(); ?>