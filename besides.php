<?php
/* Template Name: 5-Besides */
 get_header();
?>
<div id="titulos" class="col-sm-12 clearfix">
  <div class="titulos">
    <h1>Besides</h1>
  </div>
</div>
<div class="besides conteudos">

	<div class="col-xs-12 col-sm-9 besides-articles" data-mh="nome">
  
  <?php 
  $custom_args = array(
      'post_type' => 'post'
    );

  $custom_query = new WP_Query( $custom_args ); ?>

  <?php if ( $custom_query->have_posts() ) : ?>

    <!-- besides post -->
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
      <article class="besides-article-categoria">
       <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
         <h3 class="besides-article-titulo"><?php the_title(); ?></h3>
       </a>
        <div class="besides-article-infos">
          <time><?php $post_date = get_the_date('d// F //Y'); echo $post_date; ?></time> - Besides  <?php the_category( $post_id ); ?>
        </div>
        <div class="besides-article-img">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-responsive">
          </a>
        </div>
        <div class="besides-article-resumo">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_excerpt(); ?>
          </a>
        </div>
        <div class="besides-article-infos-footer">
          <i class="fa fa-user" aria-hidden="true"></i> Por <span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></span> | <span class="besides-article-infos-footer-mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>  <a href="mailto:<?php the_author_email() ?>"><?php the_author_email() ?></a></span>
      </div>
      </a>
      </article>
    <?php endwhile; ?>
    <!-- loop -->


  <?php wp_reset_postdata(); ?>

  <?php else:  ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>


  </div>

	<div class="col-xs-12 col-sm-3 besides-aside" data-mh="nome">		
		<?php the_widget('WP_Widget_Categories'); ?>
		<div class="clearfix"></div>
		<?php get_template_part( 'template-parts/arquivos' ); ?>
    <div class="clearfix"></div>    
    <div class="widget widget_archive"><h2 class="widgettitle">Autores</h2>
      <ul class="autores">
        <?php wp_list_authors('show_fullname=1&optioncount=1&orderby=post_count'); ?>
      </ul>
    </div>
	</div>

</div>
<div class="clearfix"></div>
<?php get_footer(); ?>