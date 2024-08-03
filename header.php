<?php
/**
 * wp learn theme Header 
 */
?>
<!DOCTYPE html>
<html lang="<?php get_language_attributes(); ?>">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php wp_title('|', true, 'right') ?>
        </title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <h2>
                Header
            </h2>
        </header>

