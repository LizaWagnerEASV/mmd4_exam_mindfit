<!DOCTYPE html>
<html> <?php echo bloginfo('name'); ?>
  <head>
      <meta charset="<?php bloginfo('charset'); ?>" />
      <title><?php echo bloginfo('description');  ?></title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,100' rel='stylesheet' type='text/css'>
    <?php wp_head( ); ?>  
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?> /app.js"></script>
  </head>
