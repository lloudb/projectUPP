<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Herzen Football Union</title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_directory') ?> /css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?> /css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<header data-vide-bg="video/1-0.mp4" id="header">

<nav class="navbar navbar-inverse">
   <!-- Контейнер -->
  <div class="container-fluid">
    <!-- Заголовок -->
    <div class="navbar-header">
      <!-- Кнопка «Гамбургер» -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
        <span class=sr-only>Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- Бренд или название сайта -->
      <a class="navbar-brand" href="#">football union</a>
    </div>
    <!-- Основная часть меню -->
    <div class="collapse navbar-collapse" id="navbar-main">
      <?php wp_nav_menu( array(
        'theme_location'  => '',
        'menu'            => '',
        'container'       => 'ul',
        'container_class' => 'nav navbar-nav',
        'container_id'    => '',
        'menu_class'      => 'nav navbar-nav',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => '',
      ) ); 
      wp_nav_menu($args);
      ?>
      <!-- Содержимое основной части -->
      
    </div>
  </div>
</nav>

  <div class="container"> 
    <div class="row">
      <div class="col-md-12">
        <h1><?php bloginfo('name'); ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"><img class="center-block main-logo" src="<?php bloginfo('template_directory') ?> /img/header-logo.png" alt=""></div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <button  type="button" class="btn center-block">Связаться</button> 
      </div>
    </div>
  </div>

	<!-- меню-->
</header>