<?php
if ( ! defined( 'ABSPATH' ) ) { exit;}
?>

<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="content">