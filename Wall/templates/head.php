<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  
<!--
|~)[~|~\|~|~)/~\(~~|~
|~\[_|_/|~|~\\_/_) | 
When you look into an abyss, the abyss also looks into you. 
-->   

<!-- Site info -->  
  <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="description" content="<?php echo SITE_DESC; ?>">
    <meta name="author" content="<?php echo SITE_AUTHOR; ?>">
    <meta name="publisher" content="<?php echo SITE_PUBLISHER; ?>"/>
    <meta name="keywords" content="<?php echo SITE_KEYWORDS; ?>">   
     
<!-- Favicon & Touch icon -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png"><!-- Matt -->  	
	
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

          <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
      
</head>
