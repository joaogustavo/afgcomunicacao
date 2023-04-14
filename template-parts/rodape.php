<!-- rodape -->
<footer id="rodape" class="col-md-12">  
  <div class="rodape">
    <!-- quem somos -->
    <div class="col-xs-12 col-sm-4 rodape-quemsomos" data-mh="nome">
      <p class="uppercase">
        <?php if(qtrans_getLanguage() == "pb") : ?>
          <?php echo get_theme_mod( 'quemsomos_tit_pt', '<i class="fa fa-spinner fa-pulse fa-fw"></i> Inserir informação no menu personalizar...' ); ?>
        <?php endif ?> 
        <?php if(qtrans_getLanguage() == "en") : ?>
          <?php echo get_theme_mod( 'quemsomos_tit_en', '<i class="fa fa-spinner fa-pulse fa-fw"></i> Insert info on customize menu...' ); ?>
        <?php endif ?>
      </p>
      <a href="home" title="Ir para página inicial..." style="max-width:102px"><img src="<?=get_template_directory_uri()?>/img/afg-comunicacao-logo-02.svg" alt="AFG Comunicação" width="102"></a>
      <div>
        <?php if(qtrans_getLanguage() == "pb") : ?>
          <?php echo get_theme_mod( 'quemsomos_txt_pt', '<i class="fa fa-spinner fa-pulse fa-fw"></i> Inserir informação no menu personalizar...' ); ?>
        <?php endif ?> 
        <?php if(qtrans_getLanguage() == "en") : ?>
          <?php echo get_theme_mod( 'quemsomos_txt_en', '<i class="fa fa-spinner fa-pulse fa-fw"></i> Insert info on customize menu...' ); ?>
        <?php endif ?>
      </div>
      <a href="quem-somos" title="Conheça a AFG Comunicação...">
        <strong>
          <?php if(qtrans_getLanguage() == "pb") : ?>
          <?php echo get_theme_mod( 'quemsomos_ch_pt', '<i class="fa fa-spinner fa-pulse fa-fw"></i> Inserir informação no menu personalizar...' ); ?>
          <?php endif ?> 
          <?php if(qtrans_getLanguage() == "en") : ?>
            <?php echo get_theme_mod( 'quemsomos_ch_en', '<i class="fa fa-spinner fa-pulse fa-fw"></i> Insert info on customize menu...' ); ?>
          <?php endif ?>
        </strong>
      </a>
    </div>
    <!-- contato -->
    <div class="col-xs-12 col-sm-4 rodape-contato" data-mh="nome">
      <p class="uppercase">
        <?php if(qtrans_getLanguage() == "pb") : ?>
          <?php echo get_theme_mod( 'contatos_tit_pt', '<i class="fa fa-spinner fa-pulse fa-fw"></i> Inserir informação no menu personalizar...' ); ?>
        <?php endif ?> 
        <?php if(qtrans_getLanguage() == "en") : ?>
          <?php echo get_theme_mod( 'contatos_tit_en', '<i class="fa fa-spinner fa-pulse fa-fw"></i> Insert info on customize menu...' ); ?>
        <?php endif ?>
      </p>      
      <div>
        <?php if(qtrans_getLanguage() == "pb") : ?>
          <?php echo get_theme_mod( 'contatos_sub_pt', '<i class="fa fa-spinner fa-pulse fa-fw"></i> Inserir informação no menu personalizar...' ); ?>
        <?php endif ?> 
        <?php if(qtrans_getLanguage() == "en") : ?>
          <?php echo get_theme_mod( 'contatos_sub_en', '<i class="fa fa-spinner fa-pulse fa-fw"></i> Insert info on customize menu...' ); ?>
        <?php endif ?>
      </div>
      <!-- localizacao -->
      <a href="https://goo.gl/maps/JWcWAUhVdyR2" title="AFG Comunicação no Mapas" class="rodape-contato-local"><i class="fa fa-map-marker" aria-hidden="true"></i> Av. Dep. Jamel Cecílio, 2929, sala 504-A. Ed. Brookfield Towers. Jardim Goiás. 74.810-100 Goiânia-GO</a><br>
      <!-- telefone -->
      <a href="tel:+556236262930" title="Telefone AFG Comunicação" class="rodape-contato-telefone"><i class="fa fa-mobile" aria-hidden="true"></i> +55 (62) 3626.2930</a><br>
      <!-- email -->
      <a href="mailto:afg@afgcomunicacao.com.br" title="Email AFG Comunicação" class="rodape-contato-email"><i class="fa fa-envelope-o" aria-hidden="true"></i> afg@afgcomunicacao.com.br</a>
    </div>
    <!-- mapa -->
    <div class="col-xs-12 col-sm-4 rodape-mapa" data-mh="nome">
      <p class="uppercase">
        <?php if(qtrans_getLanguage() == "pb") : ?>
          <?php echo get_theme_mod( 'localizacao_pt', '<i class="fa fa-spinner fa-pulse fa-fw"></i> Inserir informação no menu personalizar...' ); ?>
        <?php endif ?> 
        <?php if(qtrans_getLanguage() == "en") : ?>
          <?php echo get_theme_mod( 'localizacao_en', '<i class="fa fa-spinner fa-pulse fa-fw"></i> Insert info on customize menu...' ); ?>
        <?php endif ?>
      </p>
      <iframe style="width:100%;height:80%;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;q=Av.%20Dep.%20Jamel%20Cec%C3%ADlio%2C%202929&amp;aq=0&amp;ie=UTF8&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
    </div>
  </div>
  <!-- chat -->   
</footer>
<footer id="rodapeLinha2" class="col-md-12">
  <div class="rodape">
    <!-- copyright -->
    <div class="col-xs-12 col-sm-4 rodape-copyright">&copy; <?php echo date("Y"); ?> 
    <?php if(qtrans_getLanguage() == "pb") : ?>
      <?php echo get_theme_mod( 'copyright_pt', '<i class="fa fa-spinner fa-pulse fa-fw"></i> Inserir informação no menu personalizar...' ); ?>
    <?php endif ?> 
    <?php if(qtrans_getLanguage() == "en") : ?>
      <?php echo get_theme_mod( 'copyright_en', '<i class="fa fa-spinner fa-pulse fa-fw"></i> Insert info on customize menu...' ); ?>
    <?php endif ?>
    </div>
    <!-- navegacao -->
    <div class="col-xs-12 col-sm-8 rodape-nav" id="rodapeNav">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu-footer', 'menu_class' => 'rodape-menu' ) ); ?>
    </div>
  </div>
</footer>
<!-- /rodape -->