<?php
 get_header();
?>
<div id="titulos" class="col-sm-12 clearfix">
  <div class="titulos">
    <h1>Besides <span class="oculto">Arquivos</span></h1> <small><i class="fa fa-angle-double-right" aria-hidden="true"></i></small> <span>Arquivos</span>
  </div>
</div>
<div class="besides conteudos">

	<div class="col-xs-12 col-sm-9 besides-articles" data-mh="nome">
  <?php if( have_posts() ){
              while( have_posts() ){
                the_post(); ?>
      <!-- besides post -->
    <article class="besides-article-categoria">
      <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">  
        <div class="col-xs-3 col-sm-3">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-responsive">
        </div>
        <div class="col-xs-9 col-sm-9">
          <div class="besides-article-infos-category">
            <time><?php $post_date = get_the_date('d// F //Y'); echo $post_date; ?></time> - <i class="fa fa-user" aria-hidden="true"></i><span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></span>
          </div>
          <h4 class="besides-article-categoria-tit"><?php echo esc_html( the_title() ); ?></h4>                    
        </div>
      </a> 
    </article>
      <?php }
          } ?>
  </div>

	<div class="col-xs-12 col-sm-3 besides-aside" data-mh="nome">		
		<?php get_template_part( 'template-parts/arquivos' ); ?>
		<div class="clearfix"></div>
		<?php the_widget( 'WP_Widget_Categories' ); ?>
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