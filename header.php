<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>

<body <?php body_class();?>>
  <header>

    <nav class="navbar navbar-expand-lg ">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?php echo get_template_directory_uri().'/assets/img/logo-1pass.svg'?>" alt="logo" />

        </a>

        <div class="d-flex align-items-center gap-3">
          <a href="#" class="language"><?php pll_the_languages(array('show_names' => 1, 'hide_current'=>1 ));  ?></a>
          <a class="get-app-button" href="/1pass.app">Get the app</a>

        </div>
      </div>
    </nav>
  </header>