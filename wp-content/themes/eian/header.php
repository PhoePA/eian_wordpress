<?php

/**
 * 
 * header template
 * 
 * @package Eian
 */
?>
 
<!DOCTYPE html>
<html lang="<?php language_attributes();  ?>">
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Eian's Wordpress Theme</title> -->
    <?php wp_head(); ?>
    
</head>
<body <?php body_class('hello-class'); ?>>
 

<?php wp_body_open(); ?>

<Header>Header</Header>