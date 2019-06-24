<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Title</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
          integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="css/owl.carousel.min.css">-->
<!--    <link rel="stylesheet" href="style.css">-->
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<div class="header">
    <div id="burger-menu">
        <span></span>
    </div>
    <div class="shop">
        <a href="<?php the_permalink(31) ?>"><img src=" <?php echo get_template_directory_uri(); ?>/img/avatar.png"></a>
        <div class="hearth">
            <a href="<?php the_permalink(44) ?>"><img src=" <?php echo get_template_directory_uri(); ?>/img/heart.png"></a>
            <div class="circle_shop">1</div>
        </div>
    </div>
    <?php
    // Login navigation
    if ( has_nav_menu( 'primary') ) {
        wp_nav_menu(
            array(
                'theme_location'  => 'primary',
                'container'       => 'div',
                'menu_class'      => '',
                // 'echo'            => true
            )
        );
    } ?>
</div>






