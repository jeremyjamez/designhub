<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>

   <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="child-header">
        <div id="navbar">
            <nav>
                <a class="brand-logo" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
                
                <div id="main-nav-links">
                <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'container' => '')) ?>
                </div>
            </nav>
        </div>
        <h1><?php wp_title(''); ?></h1>
    </header>

    <main>