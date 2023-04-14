<?php
/**
 * Theme Customizer.
 *
 * @package Tema_Desenvolvido
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tema_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'tema_customize_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tema_customize_preview_js() {
	wp_enqueue_script( 'tema_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'tema_customize_preview_js' );


////////////////////////////////////////////////////////////////////////////////

//QUEM SOMOS PAINEL PERSONALIZAR

function QuemSomos( $wp_customize ) {  
class QuemSomos extends WP_Customize_Control {
  public $type = 'textarea';
  public function render_content() {
?>
  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="2" style="width:100%;" placeholder="texto"<?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
  </label>
<?php
  }
}
$wp_customize->add_setting('quemsomos_tit_pt', array('default' => 'Quem Somos',));
$wp_customize->add_control(new QuemSomos($wp_customize, 'quemsomos_tit_pt', array(
  'label' => 'Título Português',
  'section' => 'quemsomos',
  'settings' => 'quemsomos_tit_pt',
)));
$wp_customize->add_setting('quemsomos_tit_en', array('default' => 'Who We Are',));
$wp_customize->add_control(new QuemSomos($wp_customize, 'quemsomos_tit_en', array(
  'label' => 'Título Inglês',
  'section' => 'quemsomos',
  'settings' => 'quemsomos_tit_en',
)));
$wp_customize->add_setting('quemsomos_txt_pt', array('default' => 'A <strong>AFG Comunicação</strong> é uma empresa voltada para consultoria nas áreas de comunicação e gestão estratégicas. A prestação de serviços se dá de forma personalizada e segue metodologia própria, que contempla todas as etapas do processo, desde análise à execução.',));
$wp_customize->add_control(new QuemSomos($wp_customize, 'quemsomos_txt_pt', array(
  'label' => 'Texto Português',
  'section' => 'quemsomos',
  'settings' => 'quemsomos_txt_pt',
)));
$wp_customize->add_setting('quemsomos_txt_en', array('default' => '<strong>AFG Comunicação</strong> is a company focused on consulting services in strategic communication and management. Every work is done in a personalized way. AFG follows its own methodology, which includes all stages of the consulting process, from analysis to execution.',));
$wp_customize->add_control(new QuemSomos($wp_customize, 'quemsomos_txt_en', array(
  'label' => 'Texto Inglês',
  'section' => 'quemsomos',
  'settings' => 'quemsomos_txt_en',
)));
$wp_customize->add_setting('quemsomos_ch_pt', array('default' => 'Saiba mais...',));
$wp_customize->add_control(new QuemSomos($wp_customize, 'quemsomos_ch_pt', array(
  'label' => 'Texto link Português',
  'section' => 'quemsomos',
  'settings' => 'quemsomos_ch_pt',
)));
$wp_customize->add_setting('quemsomos_ch_en', array('default' => 'Read more...',));
$wp_customize->add_control(new QuemSomos($wp_customize, 'quemsomos_ch_en', array(
  'label' => 'Texto link Inglês',
  'section' => 'quemsomos',
  'settings' => 'quemsomos_ch_en',
)));
$wp_customize->add_section('quemsomos' , array(
  'title' => __('Quem Somos (Rodapé)','Qs'),
));
}
add_action( 'customize_register', 'QuemSomos' );

////////////////////////////////////////////////////////////////////////////////

//CONTATOS PAINEL PERSONALIZAR

function Contatos( $wp_customize ) {  
class Contatos extends WP_Customize_Control {
  public $type = 'textarea';
  public function render_content() {
?>
  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="2" style="width:100%;" placeholder="texto"<?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
  </label>
<?php
  }
}
$wp_customize->add_setting('contatos_tit_pt', array('default' => 'Contato',));
$wp_customize->add_control(new Contatos($wp_customize, 'contatos_tit_pt', array(
  'label' => 'Título Português',
  'section' => 'contatos',
  'settings' => 'contatos_tit_pt',
)));
$wp_customize->add_setting('contatos_tit_en', array('default' => 'Contact',));
$wp_customize->add_control(new Contatos($wp_customize, 'contatos_tit_en', array(
  'label' => 'Título Inglês',
  'section' => 'contatos',
  'settings' => 'contatos_tit_en',
)));
$wp_customize->add_setting('contatos_sub_pt', array('default' => 'Para mais informações ou esclarecer dúvidas, entre em contato conosco.',));
$wp_customize->add_control(new Contatos($wp_customize, 'contatos_sub_pt', array(
  'label' => 'Subtítulo Português',
  'section' => 'contatos',
  'settings' => 'contatos_sub_pt',
)));
$wp_customize->add_setting('contatos_sub_en', array('default' => 'For more information, please contact us.',));
$wp_customize->add_control(new Contatos($wp_customize, 'contatos_sub_en', array(
  'label' => 'Subtítulo Inglês',
  'section' => 'contatos',
  'settings' => 'contatos_sub_en',
)));
$wp_customize->add_section('contatos' , array(
  'title' => __('Contato (Rodapé)','Ctt'),
));
}
add_action( 'customize_register', 'Contatos' );

////////////////////////////////////////////////////////////////////////////////

//lOCALIZACAO PAINEL PERSONALIZAR

function Localizacao( $wp_customize ) {  
class Localizacao extends WP_Customize_Control {
  public $type = 'textarea';
  public function render_content() {
?>
  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="2" style="width:100%;" placeholder="texto"<?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
  </label>
<?php
  }
}
$wp_customize->add_setting('localizacao_pt', array('default' => 'Localização',));
$wp_customize->add_control(new Localizacao($wp_customize, 'localizacao_pt', array(
  'label' => 'Título Português',
  'section' => 'localizacao',
  'settings' => 'localizacao_pt',
)));
$wp_customize->add_setting('localizacao_en', array('default' => 'Location',));
$wp_customize->add_control(new Localizacao($wp_customize, 'localizacao_en', array(
  'label' => 'Título Inglês',
  'section' => 'localizacao',
  'settings' => 'localizacao_en',
)));
$wp_customize->add_section('localizacao' , array(
  'title' => __('Localização (Rodapé)','Loc'),
));
}
add_action( 'customize_register', 'Localizacao' );

////////////////////////////////////////////////////////////////////////////////
//COPYRIGHT PAINEL PERSONALIZAR

function Copyright( $wp_customize ) {  
class Copyright extends WP_Customize_Control {
  public $type = 'textarea';
  public function render_content() {
?>
  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="2" style="width:100%;" placeholder="texto"<?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
  </label>
<?php
  }
}
$wp_customize->add_setting('copyright_pt', array('default' => 'AFG Comunicação, Todos os direitos reservados.',));
$wp_customize->add_control(new Copyright($wp_customize, 'copyright_pt', array(
  'label' => 'Texto Português',
  'section' => 'copyright',
  'settings' => 'copyright_pt',
)));
$wp_customize->add_setting('copyright_en', array('default' => 'AFG Comunicação, All rights reserved.',));
$wp_customize->add_control(new Copyright($wp_customize, 'copyright_en', array(
  'label' => 'Texto Inglês',
  'section' => 'copyright',
  'settings' => 'copyright_en',
)));
$wp_customize->add_section('copyright' , array(
  'title' => __('Copyright (Rodapé)','Cop'),
));
}
add_action( 'customize_register', 'Copyright' );

////////////////////////////////////////////////////////////////////////////////

// REMOVENDO SECOES NO PERSONALIZAR

function mytheme_customize_register( $wp_customize ) {
  $wp_customize->remove_section( 'title_tagline');
  $wp_customize->remove_section( 'colors');
  $wp_customize->remove_section( 'header_image');
  $wp_customize->remove_section( 'background_image');
  //$wp_customize->remove_panel  ( 'nav_menus');
  $wp_customize->remove_section( 'static_front_page');
  $wp_customize->remove_panel  ( 'widgets' );
  $wp_customize->remove_section( 'custom_css');

}
add_action( 'customize_register', 'mytheme_customize_register',50 );




