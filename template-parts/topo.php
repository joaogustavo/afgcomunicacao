<!-- topo -->
<header id="topo" class="col-md-12">
  <h1 class="oculto">AFG Comunicação</h1>
  <!-- contatos -->
  <div class="col-xs-12 topo-linha1-container">
    <div class="topo-linha1">
      <!-- email -->
      <a href="mailto:afg@afgcomunicacao.com.br" title="Email AFG Comunicação" class="topo-email"><i class="fa fa-envelope-o" aria-hidden="true"></i> afg@afgcomunicacao.com.br</a>
      <!-- telefone -->
      <a href="tel:+556236262930" title="Telefone AFG Comunicação" class="topo-telefone"><i class="fa fa-mobile" aria-hidden="true"></i> +55 (62) 3626.2930</a>
      <!-- idiomas -->
      <div class="idiomas"><span><i class="fa fa-globe" aria-hidden="true"></i></span><span><?php echo qtranxf_generateLanguageSelectCode(‘both’); ?></span></div>    
      <!-- redes sociais -->
      <div class="topo-redes-sociais">
        <!-- linkedin -->
        <a href="https://www.linkedin.com/company/afg-comunica%C3%A7%C3%A3o" title="AFG Comunicação no LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <!-- facebook -->
        <a href="https://www.facebook.com/afgcomunicacao/" title="AFG Comunicação no Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <!-- instagram -->
        <a href="https://www.instagram.com/afgcomunicacao/" title="AFG Comunicação no Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <!-- twitter -->
        <a href="https://twitter.com/afgcomunicacao" title="AFG Comunicação no Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      </div>        
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="col-md-12 topo">
    <!-- logo -->
    <span class="col-xs-4 col-sm-4 col-md-5" id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Ir para a p&aacute;gina inicial" class="logo">AFG Comunicação</a></span>    
    <!-- chamada do menu mobile -->
    <div id="dl-menu" class="mobile dl-menuwrapper">
      <button class="dl-trigger">Menu</button>
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu','container'=> false, 'menu_class' => 'dl-menu' ) ); ?>
    </div>
    <!-- navegacao menu -->
    <div class="navegacao" id="navegacao">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'lista-menu' ) ); ?>  
    </div>
    <!-- busca -->
    <a href="#busca" class="fullscreen busca-chamando"><i class="fa fa-search" aria-hidden="true"></i></a>
    <?php get_search_form(); ?>
  </div>
</header>