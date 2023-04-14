<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tema_Desenvolvido
 */

?>

<section class="conteudos">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nada foi encontrado...', 'afgc' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'afgc' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Desculpe, mas nada combina com seus termos de pesquisa. Por favor, tente novamente com algumas palavras-chave diferentes...', 'afgc' ); ?></p>
			<?php
				get_search_form();

		else : ?>

			<p><?php esc_html_e( 'Parece que não consegue encontrar o que você está procurando. Talvez a pesquisa possa ajudar...', 'afgc' ); ?></p>
			<?php
				get_search_form();

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->