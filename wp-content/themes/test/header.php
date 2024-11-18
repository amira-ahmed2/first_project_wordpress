<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta  <?php bloginfo('charset'); ?>>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>
		<!-- <title><?php wp_title() ?></title> -->
	<link rel="pingback" type="text/css" href="echo <?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>
<body>

	<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        
       </ul>
 -->       <?php menu_bootstrap(); ?>

    </div>
  </div>
</nav>
