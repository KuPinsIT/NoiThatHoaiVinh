<?php $options = _WSH()->option();
//printr($options); 
 ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<meta name="author" content="Wow_themes">
    
    <!-- Favicons - Touch Icons -->
    <?php if( sh_set( $options, 'site_favicon' ) ):?>
    	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo sh_set( $options, 'site_favicon' );?>">
	<?php else:?> 
    	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-60x60.png">
    	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-72x72.png">
    	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-76x76.png">
    	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-114x114.png">
    	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-120x120.png">
    	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-144x144.png">
    	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-152x152.png">
    	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-180x180.png">
    	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/favicon/android-icon-192x192.png">
    	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
    	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-96x96.png">
    	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
	<?php endif;?>
	
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri()?>/js/html5shiv.min.js"></script>
        <script src="<?php echo get_template_directory_uri()?>/js/respond.min.js"></script>
    <![endif]-->
    
    <?php wp_head(); ?>
</head>

<body <?php body_class('customize-support'); ?>>

 <!--Header-->
 <?php if((sh_set($options, 'header_style') == 2) || (sh_set($_GET, 'header_style') == '2')):?>
 	<?php get_template_part( 'includes/modules/header/header', 'style2' );?>
 <?php else:?>
 	<?php get_template_part( 'includes/modules/header/header', 'style1' );?>
 <?php endif;?>	