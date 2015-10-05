<?php
/**
 * Default Page Header
 *
 * @package WordPress
 * @subpackage jpqpress
 * @since jpmpress 1.0
 *
 * Last Revised: Oct 5, 2015
 */
global $childDir;
$childDir = dirname(get_bloginfo('stylesheet_url'));
?><!DOCTYPE html>
<!-- Jqmpress -->
<!-- http://www.anomalous.co.za/bootpresswp -->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php print $childDir; ?>/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php print $childDir; ?>/assets/ico/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php print $childDir; ?>/assets/ico/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php print $childDir; ?>/assets/ico/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php print $childDir; ?>/assets/ico/apple-touch-icon-57x57-precomposed.png">
    <?php wp_head(); ?>
    <!--[if lt IE 9]>
        <script src="<?php print $childDir; ?>/assets/js/vendor/html5shiv.js"></script>
    <![endif]-->
</head>
<body <?php body_class(''); ?>>
    <div data-role="page">
	<div data-role="header">
		<h1><?php bloginfo('name'); ?></h1>
	</div><!-- /header -->

