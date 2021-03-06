<!doctype html>
<html <?php language_attributes(); ?> >
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script>document.getElementsByTagName("html")[0].className += " js";</script>

    <title><?php wp_title('|'); ?> <?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
