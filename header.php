<?php ?>
<!doctype html>
<html class="demo-3" <?php language_attributes(); ?>>
<head>
<!-- 17/05/2017 -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/mlmenu/css/default.css" />
<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/mlmenu/css/component.css" />
<script src="<?=get_template_directory_uri()?>/mlmenu/js/modernizr.custom.js"></script>
<?php favicon(); ?>
<?php wp_head(); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body <?php body_class(); ?>>
<?php get_template_part( 'template-parts/topo' ); ?>
<main class="col-sm-12 col-md-12 col-lg-12 clearfix wrap corpo">